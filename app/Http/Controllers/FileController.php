<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Document;

class FileController extends Controller
{
    public function download(Request $request)
    {
        $file = Document::where('id', $request->id)->pluck('file');
        // return response()->file('standardy/' . $file[0]);
        return response()->file('standardy/' . $file[0]);
    }
}
