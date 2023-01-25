<?php

namespace App\Http\Controllers;

use App\Models\Addon;
use App\Models\Category;
use App\Models\Department;
use App\Models\Document;
use App\Models\Employee;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use PhpParser\Node\Stmt\Return_;
use RealRashid\SweetAlert\Facades\Alert;

class PageController extends Controller
{


    // Homepage
    public function home()
    {
        return view('home', ['pretitle' => 'Intranet', 'title' => 'Homepage']);
    }

    // Oznámení
    public function prehledy()
    {
        return view('prehledy', ['pretitle' => 'Oznámení', 'title' => 'Přehledy']);
    }

    public function zmenyStandardu()
    {

        $suma = Document::count();

        $documents = Document::with('category', 'addons', 'user')->where('category_id', '<', '13')
            ->where('updated_at', '>=', Carbon::now()->subHours(24))
            ->orderByDesc('updated_at')
            ->paginate(7);

        // for ($i = 1; $i < $y; $i++) {
        //     $documents[$i] = Document::with('category', 'addons', 'user')
        //         // ->where('updated_at', '>=', Carbon::now()->subHours(6), 'and')
        //         // ->where('updated_at', '<=', Carbon::now()->addHours(12))
        //         ->where('category_id', $i)
        //         ->orderBy('category_id')
        //         ->orderBy('created_at')
        //         ->latest();
        // }

        return view('zmeny-standardu', [
            'pretitle'  => 'Oznámení',
            'title'     => 'Změny standardů',
            'suma'      => $suma,
            'documents' => $documents,
        ]);
    }

    public function zmenyDokumentu()
    {

        $suma = Document::count();

        $documents = Document::with('category', 'addons', 'user')->where('category_id', '>', '12')
            ->where('updated_at', '>=', Carbon::now()->subHours(48))
            ->orderBy('updated_at')
            ->paginate(7);

        return view('zmeny-dokumentace', [
            'pretitle'  => 'Oznámení',
            'title'     => 'Změny v dokumentaci',
            'suma'      => $suma,
            'documents' => $documents,
        ]);
    }

    public function akord()
    {

        return view('akord', ['pretitle' => 'Oznámení', 'title' => 'Akord']);
    }

    public function servis()
    {

        return view('servis', ['pretitle' => 'Oznámení', 'title' => 'Odstávky a servis']);
    }

    public function seminare()
    {

        return view('seminare', ['pretitle' => 'Oznámení', 'title' => 'Seminaře']);
    }

    public function sluzby()
    {

        return view('sluzby', ['pretitle' => 'Oznámení', 'title' => 'Změny služeb']);
    }

    public function informace()
    {

        return view('informace', ['pretitle' => 'Oznámení', 'title' => 'Informace']);
    }

    public function kultura()
    {

        return view('kultura', ['pretitle' => 'Oznámení', 'title' => 'Kultura']);
    }

    // Stravování
    public function obedy()
    {
        return redirect()->away('http://akordapp/SISAkord/Login.aspx?ReturnUrl=%2fSISAkord%2f');
    }

    public function kantyna()
    {

        $now = Carbon::now();
        $weekStartDate = $now->startOfWeek()->format('Y-m-d');
        $weekEndDate = $now->endOfWeek()->format('Y-m-d');

        $od = $now->startOfWeek()->format('d. m.');
        $do = $now->endOfWeek()->subDays(2)->format('d. m.');

        $daylist = DB::table('calendar')->where('date', '>=', $weekStartDate)->where('date', '<=', $weekEndDate)->simplePaginate(7);
        return view('kantyna', ['pretitle' => 'Stravování', 'title' => 'Nabídka kantýny', 'daylist' => $daylist, 'od' => $od, 'do' => $do]);
    }

    // Akreditacní stadnardy
    public function akreditacni($id)
    {
        $accordion_groups = Document::where('status', 'Schváleno')->where('category_id', $id)->pluck('accordion_group');

        $allDocuments = Document::pluck('category_id');
        $allAddons = Addon::pluck('document_id');
        $categorie  = Category::where('id', $id)->first();
        $doctors = Employee::where('title_preffix', 'LIKE', '%' . 'Dr.' . '%')
            ->orWhere('job_id', 'LIKE', '%' . 47 . '%')
            ->orWhere('job_id', 'LIKE', '%' . 47 . '%')
            ->orWhere('job_id', 'LIKE', '%' . 17 . '%')
            ->orderBy('last_name')
            ->get();
        $last = Document::where('category_id', $id)->orderBy('id', 'desc')->take(1)->first();

        if ($last == null) {
            $last = 0;
        } else {
            $position = $last->position;
            $last = $position;
        }

        $documents1 = Document::where('status', 'Schváleno')->with('category', 'addons')->where('category_id', $id)->where('accordion_group', 1)->orderBy('position')->get();
        $documents2 = Document::where('status', 'Schváleno')->with('category', 'addons')->where('category_id', $id)->where('accordion_group', 2)->orderBy('position')->get();
        $documents3 = Document::where('status', 'Schváleno')->with('category', 'addons')->where('category_id', $id)->where('accordion_group', 3)->orderBy('position')->get();
        $documents4 = Document::where('status', 'Schváleno')->with('category', 'addons')->where('category_id', $id)->where('accordion_group', 4)->orderBy('position')->get();
        $documents5 = Document::where('status', 'Schváleno')->with('category', 'addons')->where('category_id', $id)->where('accordion_group', 5)->orderBy('position')->get();
        $documents6 = Document::where('status', 'Schváleno')->with('category', 'addons')->where('category_id', $id)->where('accordion_group', 6)->orderBy('position')->get();
        $documents7 = Document::where('status', 'Schváleno')->with('category', 'addons')->where('category_id', $id)->where('accordion_group', 7)->orderBy('position')->get();
        $documents8 = Document::where('status', 'Schváleno')->with('category', 'addons')->where('category_id', $id)->where('accordion_group', 8)->orderBy('position')->get();
        $documents9 = Document::where('status', 'Schváleno')->with('category', 'addons')->where('category_id', $id)->where('accordion_group', 9)->orderBy('position')->get();
        $documents10 = Document::where('status', 'Schváleno')->with('category', 'addons')->where('category_id', $id)->where('accordion_group', 10)->orderBy('position')->get();
        $documents11 = Document::where('status', 'Schváleno')->with('category', 'addons')->where('category_id', $id)->where('accordion_group', 11)->orderBy('position')->get();
        $documents12 = Document::where('status', 'Schváleno')->with('category', 'addons')->where('category_id', $id)->where('accordion_group', 12)->orderBy('position')->get();

        return view('standardy.akreditacni', [
            'title'             => $categorie->category_name,
            'pretitle'          => 'Standardy',
            'categorie'         => $categorie,
            'icon'              => $categorie->fa_icon,
            'doctors'           => $doctors,
            'groups'            => $accordion_groups,
            'allDocuments'      => $allDocuments,
            'allAddons'         => $allAddons,
            'lastpos'           => $last,
            'documents1'        => $documents1,
            'documents2'        => $documents2,
            'documents3'        => $documents3,
            'documents4'        => $documents4,
            'documents5'        => $documents5,
            'documents6'        => $documents6,
            'documents7'        => $documents7,
            'documents8'        => $documents8,
            'documents9'        => $documents9,
            'documents10'       => $documents10,
            'documents11'       => $documents11,
            'documents12'       => $documents12
        ]);
    }

    // Dokument
    public function document($id)
    {

        $allDocuments = Document::pluck('category_id');
        $allAddons = Addon::pluck('document_id');
        $categorie  = Category::where('id', $id)->first();
        $doctors = Employee::where('standard_signature', 1)->orderBy('last_name')->get();
        $last = Document::where('category_id', $id)->orderBy('id', 'desc')->take(1)->first();

        if ($last == null) {
            $last = 0;
        } else {
            $position = $last->position;
            $last = $position;
        }

        if (Auth::user()) {
            $documents = Document::with('category', 'addons', 'user')->where('onscreen', 1)->where('category_id', $id)->orderBy('position')->get();
        } else {
            $documents = Document::with('category', 'addons', 'user')->where('onscreen', 1)->where('status', 'Schváleno')->where('category_id', $id)->orderBy('position')->get();
        }

        return view('dokumenty.dokument', [
            'title'             => $categorie->category_name,
            'pretitle'          => 'Dokumentace',
            'categorie'         => $categorie,
            'icon'              => $categorie->fa_icon,
            'lastpos'           => $last,
            'documents'         => $documents,
            'allDocuments'      => $allDocuments,
            'allAddons'         => $allAddons,
            'doctors'           => $doctors
        ]);
    }

    // Standardy
    public function standard($id)
    {

        $allDocuments = Document::pluck('category_id');
        $allAddons = Addon::pluck('document_id');
        $categorie  = Category::where('id', $id)->first();
        $doctors = Employee::where('standard_signature', 1)->orderBy('last_name')->get();
        $last = Document::where('category_id', $id)->orderBy('id', 'desc')->take(1)->first();

        if ($last == null) {
            $last = 0;
        } else {
            $position = $last->position;
            $last = $position;
        }

        if (Auth::user()) {
            $documents = Document::with('category', 'addons', 'user')->where('category_id', $id)->orderBy('position')->get();
        } else {
            $documents = Document::with('category', 'addons', 'user')->where('status', 'Schváleno')->where('category_id', $id)->orderBy('position')->get();
        }

        return view('standardy.standard', [
            'title'             => $categorie->category_name,
            'pretitle'          => 'Standardy',
            'categorie'         => $categorie,
            'icon'              => $categorie->fa_icon,
            'lastpos'           => $last,
            'documents'         => $documents,
            'allDocuments'      => $allDocuments,
            'allAddons'         => $allAddons,
            'doctors'           => $doctors
        ]);
    }


    // Media
    public function radio()
    {
        return redirect()->away('http://192.168.81.121:8000/radio.m3u');
    }

    public function video()
    {

        return view('videa', ['pretitle' => 'Média', 'title' => 'Videa']);
    }

    public function prekladatele()
    {

        return view('prekladatele', ['pretitle' => 'Média', 'title' => 'Překladatelé']);
    }

    public function profile()
    {
        return view('profile.profile', ['pretitle' => 'Profil', 'title' => 'Uživatele']);
    }
}
