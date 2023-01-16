<?php

namespace App\Http\Controllers;

use App\Models\Addon;
use App\Models\Category;
use App\Models\Department;
use App\Models\Document;
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
        return view('home', ['category' => 'Intranet', 'title' => 'Homepage']);
    }

    // Oznámení
    public function prehledy()
    {
        return view('prehledy', ['category' => 'Oznámení', 'title' => 'Přehledy']);
    }

    public function zmeny()
    {
        $suma = Document::count();
        $y = Category::count();

        for ($i = 1; $i < $y; $i++) {
            $documents[$i] = Document::with('category')->where('category_id', $i)->get();
        }

        return view('zmeny', [
            'category'  => 'Oznámení',
            'title'     => 'Změny standardů',
            'suma'      => $suma,
            'documents' => $documents,
        ]);
    }

    public function akord()
    {
        return view('akord', ['category' => 'Oznámení', 'title' => 'Akord']);
    }

    public function servis()
    {
        return view('servis', ['category' => 'Oznámení', 'title' => 'Odstávky a servis']);
    }

    public function seminare()
    {
        return view('seminare', ['category' => 'Oznámení', 'title' => 'Seminaře']);
    }

    public function sluzby()
    {
        return view('sluzby', ['category' => 'Oznámení', 'title' => 'Změny služeb']);
    }

    public function informace()
    {
        return view('informace', ['category' => 'Oznámení', 'title' => 'Informace']);
    }

    public function kultura()
    {
        return view('kultura', ['category' => 'Oznámení', 'title' => 'Kultura']);
    }

    // Stravování
    public function obedy()
    {
        return redirect()->away('http://akordapp/SISAkord/Login.aspx?ReturnUrl=%2fSISAkord%2f');
    }

    public function kantyna()
    {
        $daylist = DB::table('calendar')->where('date', '>=', Carbon::now()->subdays(7))->where('date', '<=', Carbon::now()->addDays(7))->paginate(7);
        return view('kantyna', ['category' => 'Stravování', 'title' => 'Nabídka kantýny', 'daylist' => $daylist]);
    }

    // Akreditacní stadnardy
    public function akreditacni($id)
    {
        $accordion_groups = Document::where('status', 'Schváleno')->where('category_id', $id)->pluck('accordion_group');
        $categories = Category::all();
        $categorie = Category::where('id', $id)->first();

        $documents1 = Document::where('status', 'Schváleno')->with('category', 'addon')->where('category_id', $id)->where('accordion_group', 1)->orderBy('position')->get();
        $documents2 = Document::where('status', 'Schváleno')->with('category', 'addon')->where('category_id', $id)->where('accordion_group', 2)->orderBy('position')->get();
        $documents3 = Document::where('status', 'Schváleno')->with('category', 'addon')->where('category_id', $id)->where('accordion_group', 3)->orderBy('position')->get();
        $documents4 = Document::where('status', 'Schváleno')->with('category', 'addon')->where('category_id', $id)->where('accordion_group', 4)->orderBy('position')->get();
        $documents5 = Document::where('status', 'Schváleno')->with('category', 'addon')->where('category_id', $id)->where('accordion_group', 5)->orderBy('position')->get();
        $documents6 = Document::where('status', 'Schváleno')->with('category', 'addon')->where('category_id', $id)->where('accordion_group', 6)->orderBy('position')->get();
        $documents7 = Document::where('status', 'Schváleno')->with('category', 'addon')->where('category_id', $id)->where('accordion_group', 7)->orderBy('position')->get();
        $documents8 = Document::where('status', 'Schváleno')->with('category', 'addon')->where('category_id', $id)->where('accordion_group', 8)->orderBy('position')->get();
        $documents9 = Document::where('status', 'Schváleno')->with('category', 'addon')->where('category_id', $id)->where('accordion_group', 9)->orderBy('position')->get();
        $documents10 = Document::where('status', 'Schváleno')->with('category', 'addon')->where('category_id', $id)->where('accordion_group', 10)->orderBy('position')->get();
        $documents11 = Document::where('status', 'Schváleno')->with('category', 'addon')->where('category_id', $id)->where('accordion_group', 11)->orderBy('position')->get();
        $documents12 = Document::where('status', 'Schváleno')->with('category', 'addon')->where('category_id', $id)->where('accordion_group', 12)->orderBy('position')->get();

        return view('standardy.akreditacni', [
            'title'             => $categorie->category_name,
            'category'          => 'Standardy',
            'categorie'         => $categorie,
            'icon'              => $categorie->fa_icon,
            'categories'        => $categories,
            'groups'            => $accordion_groups,
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
        $categories = Category::all();
        $categorie  = Category::where('id', $id)->first();
        $last = Document::where('category_id', $id)->latest()->first();

        if ($last == null) {
            $last = 0;
        } else {
            $position = $last->position;
            $last = $position;
        }

        if (Auth::user()) {
            $documents = Document::with('category', 'addon')->where('category_id', $id)->orderBy('position')->get();
        } else {
            $documents = Document::with('category', 'addon')->where('status', 'Schváleno')->where('category_id', $id)->orderBy('position')->get();
        }

        return view('standardy.standard', [
            'title'             => $categorie->category_name,
            'category'          => 'Standardy',
            'categorie'         => $categorie,
            'icon'              => $categorie->fa_icon,
            'categories'        => $categories,
            'lastpos'           => $last,
            'documents'         => $documents
        ]);
    }


    // Media
    public function radio()
    {
        return redirect()->away('http://192.168.0.10/data/hudba/R%c3%a1dia/Evropa%202.m3u');
    }

    public function video()
    {
        return view('videa', ['category' => 'Média', 'title' => 'Videa']);
    }
}
