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
        $categories = Category::with('documents')->get();
        return view('home', ['pretitle' => 'Intranet', 'title' => 'Homepage', 'categories' => $categories]);
    }

    // Oznámení
    public function prehledy()
    {
        $categories = Category::with('documents')->get();
        return view('prehledy', ['pretitle' => 'Oznámení', 'title' => 'Přehledy', 'categories' => $categories]);
    }

    public function zmenyStandardu()
    {
        $categories = Category::with('documents')->get();
        $suma = Document::count();

        $documents = Document::with('category', 'addons', 'user')
            ->where('updated_at', '>=', Carbon::now()->subHours(6))
            ->orderByDesc('updated_at')
            ->paginate(6);

        // for ($i = 1; $i < $y; $i++) {
        //     $documents[$i] = Document::with('category', 'addons', 'user')
        //         // ->where('updated_at', '>=', Carbon::now()->subHours(6), 'and')
        //         // ->where('updated_at', '<=', Carbon::now()->addHours(12))
        //         ->where('category_id', $i)
        //         ->orderBy('category_id')
        //         ->orderBy('created_at')
        //         ->latest();
        // }

        return view('zmeny', [
            'categories' => $categories,
            'pretitle'  => 'Oznámení',
            'title'     => 'Změny standardů',
            'suma'      => $suma,
            'documents' => $documents,
        ]);
    }

    public function zmenyDokumentu()
    {
        $categories = Category::with('documents')->get();
        $suma = Document::count();

        $documents = Document::with('category', 'addons', 'user')
            ->where('updated_at', '>=', Carbon::now()->subHours(12))
            ->orderBy('updated_at')
            ->paginate(6);

        return view('zmeny', [
            'categories' => $categories,
            'pretitle'  => 'Oznámení',
            'title'     => 'Změny dokumentů',
            'suma'      => $suma,
            'documents' => $documents,
        ]);
    }

    public function akord()
    {
        $categories = Category::with('documents')->get();
        return view('akord', ['pretitle' => 'Oznámení', 'title' => 'Akord', 'categories' => $categories]);
    }

    public function servis()
    {
        $categories = Category::with('documents')->get();
        return view('servis', ['pretitle' => 'Oznámení', 'title' => 'Odstávky a servis', 'categories' => $categories]);
    }

    public function seminare()
    {
        $categories = Category::with('documents')->get();
        return view('seminare', ['pretitle' => 'Oznámení', 'title' => 'Seminaře', 'categories' => $categories]);
    }

    public function sluzby()
    {
        $categories = Category::with('documents')->get();
        return view('sluzby', ['pretitle' => 'Oznámení', 'title' => 'Změny služeb', 'categories' => $categories]);
    }

    public function informace()
    {
        $categories = Category::with('documents')->get();
        return view('informace', ['pretitle' => 'Oznámení', 'title' => 'Informace', 'categories' => $categories]);
    }

    public function kultura()
    {
        $categories = Category::with('documents')->get();
        return view('kultura', ['pretitle' => 'Oznámení', 'title' => 'Kultura', 'categories' => $categories]);
    }

    // Stravování
    public function obedy()
    {
        return redirect()->away('http://akordapp/SISAkord/Login.aspx?ReturnUrl=%2fSISAkord%2f');
    }

    public function kantyna()
    {
        $categories = Category::with('documents')->get();
        $daylist = DB::table('calendar')->where('date', '>=', Carbon::now()->previous('Monday'))->where('date', '<=', Carbon::now()->addDays(16))->simplePaginate(7);
        return view('kantyna', ['pretitle' => 'Stravování', 'title' => 'Nabídka kantýny', 'daylist' => $daylist, 'categories' => $categories]);
    }

    // Akreditacní stadnardy
    public function akreditacni($id)
    {
        $accordion_groups = Document::where('status', 'Schváleno')->where('category_id', $id)->pluck('accordion_group');
        $categories = Category::with('documents')->get();
        $allDocuments = Document::pluck('category_id');
        $doctors = Employee::where('title_preffix', 'LIKE', '%' . 'Dr.' . '%')->orderBy('last_name')->get();
        $allAddons = Addon::pluck('document_id');
        $categorie = Category::where('id', $id)->first();
        $last = Document::where('category_id', $id)->latest()->first();

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
            'categories'        => $categories,
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

    // Standardy
    public function standard($id)
    {
        $categories = Category::with('documents')->get();
        $allDocuments = Document::pluck('category_id');
        $allAddons = Addon::pluck('document_id');
        $categorie  = Category::where('id', $id)->first();
        $doctors = Employee::where('title_preffix', 'LIKE', '%' . 'Dr.' . '%')->orderBy('last_name')->get();
        $last = Document::where('category_id', $id)->latest()->first();

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
            'categories'        => $categories,
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
        return redirect()->away('http://192.168.0.10/data/hudba/R%c3%a1dia/Evropa%202.m3u');
    }

    public function video()
    {
        $categories = Category::with('documents')->get();
        return view('videa', ['pretitle' => 'Média', 'title' => 'Videa', 'categories' => $categories]);
    }

    public function prekladatele()
    {
        $categories = Category::with('documents')->get();
        return view('prekladatele', ['pretitle' => 'Média', 'title' => 'Překladatelé', 'categories' => $categories]);
    }
}
