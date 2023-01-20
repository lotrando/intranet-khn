<?php

namespace App\Http\Controllers;

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
        $categories = Category::with('documents')->get();
        $id = $request->id;
        $status = $request->status;

        // Session::put('categories', $categories);

        $file = Document::where('id', $id)->pluck('file');
        // $file = Document::where('id', $id)->where('status', '=', $status)->pluck('file');

        if (empty($file[0])) {
            return view('errors.404');
        }

        if (file_exists(public_path() . '/standardy/' . $file[0])) {

            return Response::download('standardy/' . $file[0]);
            // return Response::file('standardy/' . $file[0]);
            return back()->with(['categories' => $categories]);
        } else {
            return view('errors.404');
        }
    }
}
