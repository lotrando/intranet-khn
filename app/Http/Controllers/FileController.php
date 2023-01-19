<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Document;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Response;

class FileController extends Controller
{
    public function standardDownload(Request $request)
    {
        $categories = Category::with('documents')->get();
        $id = $request->id;
        $status = $request->status;

        if (Auth::check()) {
            $file = Document::where('id', $id)->pluck('file');
        } else {
            $file = Document::where('id', $id)->where('status', $status)->pluck('file');
        }

        // $file = Document::where('id', $id)->where('status', '=', $status)->pluck('file');

        if (empty($file[0])) {
            return view('errors.404');
        }

        if (file_exists(public_path() . '/standardy/' . $file[0])) {

            return Response::download('standardy/' . $file[0]);
            // return Response::file('standardy/' . $file[0]);
            redirect()->back(['categories' => $categories]);
        } else {
            return view('errors.404');
        }
    }
}
