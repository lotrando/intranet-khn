<?php

namespace App\Http\Controllers;

use App\Models\Addon;
use App\Models\Category;
use App\Models\Document;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Session;

class FileController extends Controller
{
    public function standardDownload(Request $request)
    {
        $id = $request->id;

        $file = Document::where('id', $id)->pluck('file');

        if (empty($file[0])) {
            return view('errors.404');
        }

        if (file_exists(public_path() . '/standardy/' . $file[0])) {

            return Response::download('standardy/' . $file[0]);
            redirect()->back();
        } else {

            return view('errors.404');
        }
    }

    public function standardAddonDownload(Request $request)
    {
        $id = $request->id;

        $addon = Addon::where('id', $id)->pluck('file');

        if (empty($addon[0])) {
            return view('errors.404');
        }

        if (file_exists(public_path() . '/standardy/' . $addon[0])) {

            return Response::download('standardy/' . $addon[0]);
            redirect()->back();
        } else {

            return view('errors.404');
        }
    }
}
