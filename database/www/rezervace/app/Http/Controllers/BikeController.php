<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreBikeRequest;
use App\Http\Requests\UpdateBikeRequest;
use App\Mail\BookingDelete;
use App\Mail\BookingMail;
use App\Mail\BookingUpdate;
use App\Mail\UserCreateMail;
use App\Mail\UserDeleteMail;
use App\Mail\UserUpdateMail;
use App\Models\Bike;
use App\Models\Item;
use App\Models\User;
use Auth;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;
use Mpdf\Mpdf as PDF;

class BikeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        If(!Auth::user()) {
            return redirect(route('login'));
        }

        $bookings = Bike::sortable()
        ->with('user', 'item')
		->where('user_id', '>', 1)
        ->orderBy('date_start', 'asc')
        ->paginate(11);

        if (Gate::denies('logged-in')) {
            return view('home');
        } else {
            return view('user.bikes.index', ['bookings' => $bookings]);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
		if (Gate::allows('logged-in')) {
            return view('user.bikes.create', ['users' => User::all(), 'items' => Item::all()]);
        } else {
            return redirect(route('login'));
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreBikeRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreBikeRequest $request)
    {
		$item = $request->item_id;
        $start = $request->date_start;
        $end = Carbon::create($request->date_end);

        $friday = $end->isFriday();


        if($friday == true)
        {
            $servisDay = Carbon::create($end. ' +3day')->format('Y-m-d');
        }
        else
        {
            $servisDay = Carbon::create($end. ' +1day')->format('Y-m-d');
        }


	    if (Gate::allows('logged-in')) {

            $servicedayExists = Bike::where('item_id', $item)->where('serviceday', $start)->exists();
            $appointmentExists = Bike::where('item_id', $item)->where('date_start', '<=', $start)->where('date_end', '>=', $start)->exists();

            if ($servicedayExists)
            {
                $request->session()->flash('error', 'Rezervace nelze uskute??nit ! Rezervace za????n?? v den kdy bude vybran?? p??edm??t servisov??n. Klikn??te na tla????tko kalend????e pro p??ehled rezervac??.');
                return redirect(route('user.bikes.create'));
            }

            if ($appointmentExists)
            {
                $request->session()->flash('error', 'Rezervaci nelze uskute??nit ! Vybran?? p??edm??t je ji?? v tomto term??nu rezervov??n! Klikn??te na tla????tko kalend????e pro p??ehled rezervac??.');
                return redirect(route('user.bikes.create'));
            }
            else
            {
                $validatedData = $request->validated() + ['serviceday' => $servisDay];

				Bike::create($validatedData);

                $bike = Bike::with('user', 'item')->latest()->first();

                $data = [
                'id'            => $bike->id,
                'user'          => $bike->user->user_name,
                'pernum'        => $bike->pernum,
                'email'         => $bike->user->email,
                'phone'         => $bike->phone,
                'item'          => $bike->item->name,
                'start'         => $bike->date_start,
                'end'           => $bike->date_end,
                'status'        => $bike->status,
                ];

                foreach (['belica@khn.cz', 'ciernikova@khn.cz', 'hracky@khn.cz', 'brhel@khn.cz'] as $recipients) {
                    Mail::to($recipients)->send(new BookingMail($data));
                }
                Mail::to(Auth::user()->email)->send(new UserCreateMail($data));

                $request->session()->flash('success', 'Rezervace ??sp????n?? vytvo??ena !');
                return redirect(route('user.bikes.index'));
            }
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Bike  $bike
     * @return \Illuminate\Http\Response
     */
    public function show(Bike $bike, User $user)
    {

        $start = Carbon::parse($bike->date_start);
        $end = Carbon::parse($bike->date_end);

        $diff = date_diff($end, $start );

        $price = ($diff->days) * $bike->item->price;

        // Setup a filename
        $documentFileName = "smlouva-??.". $bike->id. ".pdf" ;

        // Create the mPDF document
        $document = new PDF( [
            'mode' => 'utf-8',
            'format' => 'A4',
            'margin_header' => '3',
            'margin_top' => '10',
            'margin_bottom' => '10',
            'margin_footer' => '2',
            'default_font' => 'arial',
        ]);


        // Set some header informations for output
        $header = [
            'Content-Type' => 'application/pdf',
            'Content-Disposition' => 'inline; filename="'.$documentFileName.'"'
        ];

        if($bike->item->type == 'kolo') {
            $protocol = $document->SetSourceFile('../public/docs/protocol.pdf');
            $tpl = $document->ImportPage($protocol);
            $document->UseTemplate($tpl);
            $document->AddPage();
        }
        $document->WriteHTML(view('user.bikes.pdf', ['bike' => $bike, 'user' => $user, 'price' => $price]));


        // Save PDF on your public storage
        Storage::disk('public')->put($documentFileName, $document->Output($documentFileName, "S"));

        // Get file back from storage with the give header informations
        return Storage::disk('public')->download($documentFileName, 'Request', $header);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Bike  $bike
     * @return \Illuminate\Http\Response
     */
    public function edit(Bike $bike)
    {
        if (!$bike or $bike->status === 'Schv??leno') {
            $request->session()->flash('error', 'Tato rezervace neexistuje nebo ji u?? nem????ete editovat !');
            return redirect(route('user.bikes.index'));
        }

        if (Gate::allows('is-admin')) {
            $bike = Bike::find($bike->id);
        }

        return view('user.bikes.edit', [
            'items' => Item::all(),
            'bike' => $bike
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateBikeRequest  $request
     * @param  \App\Models\Bike  $bike
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateBikeRequest $request, Bike $bike)
    {
		$start  	= Carbon::create($request->date_start);
        $end    	= Carbon::create($request->date_end);
        $friday	 	= $end->isFriday();

        if($friday == true)
        {
            $servisDay = Carbon::create($end. ' +3day')->format('Y-m-d');
        }
        else
        {
            $servisDay = Carbon::create($end. ' +1day')->format('Y-m-d');
        }

        if (Gate::allows('logged-in')) {

            $servisDayExists = Bike::where('serviceday', $start)->orWhere('serviceday', $end)->exists();

            $appointmentExists = Bike::whereBetween('date_start', [$start, $end])
                  ->orWhereBetween('date_end', [$start, $end])
                  ->orWhereBetween('serviceday', [$start, $end])
                  ->orWhereBetween('serviceday', [$end, $start])->count();

            if ($servisDayExists)
            {
                $request->session()->flash('error', 'Rezervaci nelze zm??nit ! Zm??na term??nu rezervace koliduje se dnem kdy bude vybran?? p??edm??t servisov??n. Klikn??te na tla????tko kalend????e pro p??ehled rezervac??.');
                return redirect(route('user.bikes.edit', $bike->id));
            }

            if ($appointmentExists > 1)
            {
                $request->session()->flash('error', 'Rezervaci nelze zm??nit ! Zm??na term??nu rezervace zasahuje do rezervace jin??ho pracovn??ka! Klikn??te na tla????tko kalend????e pro p??ehled rezervac??.');
                return redirect(route('user.bikes.edit', $bike->id));
            }
            else
            {
                $validatedData = $request->validated() + ['serviceday' => $servisDay];

                $data = [
                    'id'            => $bike->id,
                    'user'          => $bike->user->user_name,
                    'pernum'        => $bike->pernum,
                    'email'         => $bike->user->email,
					'item'          => $bike->item->name,
					'oldphone'      => $bike->phone,
                    'oldstart'      => $bike->date_start,
                    'oldend'        => $bike->date_end,
                    'phone'         => $request->phone,
                    'start'         => $start,
                    'end'           => $end,
                    'status'        => $bike->status,
                ];

                $bike->update($validatedData);

				//return $oldbike. '' .$bike;

                // foreach (['belica@khn.cz', 'ciernikova@khn.cz', 'hracky@khn.cz', 'brhel@khn.cz'] as $recipients) {
                //     Mail::to($recipients)->send(new BookingUpdate($data));
                // }
                // Mail::to(Auth::user()->email)->send(new UserUpdateMail($data));

                $request->session()->flash('success', 'Rezervace '. $bike->name .' byla ??sp????n?? aktualizov??na!');
                return redirect(route('user.bikes.index'));
            }
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Bike  $bike
     * @return \Illuminate\Http\Response
     */
    public function destroy(Bike $bike, Request $request)
    {
        $bike = Bike::with('user', 'item')->find($bike->id);

        $data = [
                'id'            => $bike->id,
                'user'          => $bike->user->user_name,
                'pernum'        => $bike->pernum,
                'email'         => $bike->user->email,
                'phone'         => $bike->phone,
                'item'          => $bike->item->name,
                'start'         => $bike->date_start,
                'end'           => $bike->date_end,
                'status'        => $bike->status,
        ];

        foreach (['belica@khn.cz', 'ciernikova@khn.cz', 'hracky@khn.cz', 'brhel@khn.cz'] as $recipients) {
                    Mail::to($recipients)->send(new BookingDelete($data));
                }
                Mail::to(Auth::user()->email)->send(new UserDeleteMail($data));

        $bike->delete();

        $request->session()->flash('success', 'Rezervace '. $bike->name .' ??sp????n?? odstran??na!');
        return redirect()->back();
    }
}
