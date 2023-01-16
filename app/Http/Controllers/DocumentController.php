<?php

namespace App\Http\Controllers;

use App\Models\Document;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;


class DocumentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $unwantedChars = [
            'Š' => 'S', 'š' => 's', 'Ž' => 'Z', 'ž' => 'z', 'À' => 'A', 'Á' => 'A', 'Â' => 'A', 'Ã' => 'A', 'Ä' => 'A', 'Å' => 'A', 'Æ' => 'A', 'Ç' => 'C', 'È' => 'E', 'É' => 'E',
            'Ê' => 'E', 'Ë' => 'E', 'Ì' => 'I', 'Í' => 'I', 'Î' => 'I', 'Ï' => 'I', 'Ñ' => 'N', 'Ò' => 'O', 'Ó' => 'O', 'Ô' => 'O', 'Õ' => 'O', 'Ö' => 'O', 'Ø' => 'O', 'Ù' => 'U',
            'Ú' => 'U', 'Û' => 'U', 'Ü' => 'U', 'Ý' => 'Y', 'Þ' => 'B', 'ß' => 'Ss', 'à' => 'a', 'á' => 'a', 'â' => 'a', 'ã' => 'a', 'ä' => 'a', 'å' => 'a', 'æ' => 'a', 'ç' => 'c',
            'è' => 'e', 'é' => 'e', 'ê' => 'e', 'ë' => 'e', 'ì' => 'i', 'í' => 'i', 'î' => 'i', 'ï' => 'i', 'ð' => 'o', 'ñ' => 'n', 'ò' => 'o', 'ó' => 'o', 'ô' => 'o', 'õ' => 'o',
            'ö' => 'o', 'ø' => 'o', 'ù' => 'u', 'ú' => 'u', 'û' => 'u', 'ý' => 'y', 'þ' => 'b', 'ÿ' => 'y', 'ř' => 'r', 'č' => 'c', 'ě' => 'e', 'ů' => 'u', 'ň' => 'n', 'Ř' => 'R',
            'Č' => 'C', 'Ě' => 'E', 'Ů' => 'U', 'Ú' => 'U', 'Ň' => 'N', '/' => '-', ':' => '-', ';' => '-', ' ' => '_', '+' => '_'
        ];

        $rules = [
            'category_id'           => 'required',
            'accordion_name'        => 'nullable',
            'accordion_group'       => 'nullable',
            'name'                  => 'required',
            'description'           => 'required',
            'processed'             => 'required',
            'authorize'             => 'nullable',
            'examine'               => 'nullable',
            'efficiency'            => 'nullable',
            'position'              => 'required|numeric',
            'revision'              => 'required',
            'revision_date'         => 'nullable',
            'next_revision_date'    => 'nullable',
            'tags'                  => 'nullable',
            'status'                => 'required',
            'file'                  => 'required|mimes:pdf,doc,xls|max:4096'
        ];

        $error = Validator::make($request->all(), $rules);

        if ($error->fails()) {
            return response()->json(['errors' => $error->errors()->all()]);
        }

        $file_ext  = $request->file->extension();
        $description = Str::lower(strtr($request->description, $unwantedChars));
        $revision = Str::lower(strtr($request->revision, $unwantedChars));
        $file_name = 'standardy_' . $request->folder_name . '-' . $description . '-revize-' . $revision . '.' . $file_ext;
        $request->file->move(public_path('/standardy/'), $file_name);

        $form_data = [
            'category_id'           => $request->category_id,
            'accordion_name'        => $request->name,
            'accordion_group'       => $request->accordion_group,
            'name'                  => $request->name,
            'description'           => $request->description,
            'processed'             => $request->processed,
            'authorize'             => $request->authorize,
            'examine'               => $request->examine,
            'efficiency'            => $request->efficiency,
            'revision'              => $request->revision,
            'revision_date'         => $request->revision_date,
            'next_revision_date'    => $request->next_revision_date,
            'tags'                  => $request->tags,
            'position'              => $request->position,
            'file'                  => $file_name,
            'unique_code'           => $request->unique_code,
            'status'                => $request->status,
        ];

        Document::create($form_data);

        return response()->json(['success' => 'Standard uložen do databáze']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Document  $document
     * @return \Illuminate\Http\Response
     */
    public function show(Document $document)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Document  $document
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Document::with('category')->findOrFail($id);
        if (request()->ajax()) {
            return response()->json(['data' => $data]);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Document  $document
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $file = $request->file;
        if ($file != '') {

            $rules = [
                'category_id'           => 'required',
                'accordion_name'        => 'nullable',
                'accordion_group'       => 'nullable',
                'name'                  => 'required',
                'description'           => 'required',
                'processed'             => 'required',
                'authorize'             => 'nullable',
                'examine'               => 'nullable',
                'efficiency'            => 'nullable',
                'position'              => 'required|numeric',
                'revision'              => 'required',
                'revision_date'         => 'nullable',
                'next_revision_date'    => 'nullable',
                'tags'                  => 'nullable',
                'status'                => 'required',
                'file'                  => 'required|mimes:pdf,doc,xls|max:4096'
            ];

            $error = Validator::make($request->all(), $rules);

            if ($error->fails()) {
                return response()->json(['errors' => $error->errors()->all()]);
            }

            $unwantedChars = [
                'Š' => 'S', 'š' => 's', 'Ž' => 'Z', 'ž' => 'z', 'À' => 'A', 'Á' => 'A', 'Â' => 'A', 'Ã' => 'A', 'Ä' => 'A', 'Å' => 'A', 'Æ' => 'A', 'Ç' => 'C', 'È' => 'E', 'É' => 'E',
                'Ê' => 'E', 'Ë' => 'E', 'Ì' => 'I', 'Í' => 'I', 'Î' => 'I', 'Ï' => 'I', 'Ñ' => 'N', 'Ò' => 'O', 'Ó' => 'O', 'Ô' => 'O', 'Õ' => 'O', 'Ö' => 'O', 'Ø' => 'O', 'Ù' => 'U',
                'Ú' => 'U', 'Û' => 'U', 'Ü' => 'U', 'Ý' => 'Y', 'Þ' => 'B', 'ß' => 'Ss', 'à' => 'a', 'á' => 'a', 'â' => 'a', 'ã' => 'a', 'ä' => 'a', 'å' => 'a', 'æ' => 'a', 'ç' => 'c',
                'è' => 'e', 'é' => 'e', 'ê' => 'e', 'ë' => 'e', 'ì' => 'i', 'í' => 'i', 'î' => 'i', 'ï' => 'i', 'ð' => 'o', 'ñ' => 'n', 'ò' => 'o', 'ó' => 'o', 'ô' => 'o', 'õ' => 'o',
                'ö' => 'o', 'ø' => 'o', 'ù' => 'u', 'ú' => 'u', 'û' => 'u', 'ý' => 'y', 'þ' => 'b', 'ÿ' => 'y', 'ř' => 'r', 'č' => 'c', 'ě' => 'e', 'ů' => 'u', 'ň' => 'n', 'Ř' => 'R',
                'Č' => 'C', 'Ě' => 'E', 'Ů' => 'U', 'Ú' => 'U', 'Ň' => 'N', '/' => '-', ':' => '-', ';' => '-', ' ' => '_', '+' => '_'
            ];

            $file_ext  = $request->file->extension();
            $description = Str::lower(strtr($request->description, $unwantedChars));
            $revision = Str::lower(strtr($request->revision, $unwantedChars));
            $file_name = 'standardy_' . $request->folder_name . '-' . $description . '-revize-' . $revision . '.' . $file_ext;
            $request->file->move(public_path('/standardy/'), $file_name);

            $form_data = [
                'category_id'           => $request->category_id,
                'accordion_name'        => $request->name,
                'accordion_group'       => $request->accordion_group,
                'name'                  => $request->name,
                'description'           => $request->description,
                'processed'             => $request->processed,
                'authorize'             => $request->authorize,
                'examine'               => $request->examine,
                'efficiency'            => $request->efficiency,
                'revision'              => $request->revision,
                'revision_date'         => $request->revision_date,
                'next_revision_date'    => $request->next_revision_date,
                'tags'                  => $request->tags,
                'position'              => $request->position,
                'file'                  => $file_name,
                'unique_code'           => $request->unique_code,
                'status'                => $request->status,
            ];
        } else {

            $rules = [
                'category_id'           => 'required',
                'accordion_name'        => 'nullable',
                'accordion_group'       => 'nullable',
                'name'                  => 'required',
                'description'           => 'required',
                'processed'             => 'nullable',
                'authorize'             => 'nullable',
                'examine'               => 'nullable',
                'efficiency'            => 'nullable',
                'position'              => 'required|numeric',
                'revision'              => 'required',
                'revision_date'         => 'nullable',
                'next_revision_date'    => 'nullable',
                'tags'                  => 'nullable',
                'status'                => 'required',
            ];

            $error = Validator::make($request->all(), $rules);

            if ($error->fails()) {
                return response()->json(['errors' => $error->errors()->all()]);
            }

            $form_data = [
                'category_id'           => $request->category_id,
                'accordion_name'        => $request->name,
                'accordion_group'       => $request->accordion_group,
                'name'                  => $request->name,
                'description'           => $request->description,
                'processed'             => $request->processed,
                'authorize'             => $request->authorize,
                'examine'               => $request->examine,
                'efficiency'            => $request->efficiency,
                'revision'              => $request->revision,
                'revision_date'         => $request->revision_date,
                'next_revision_date'    => $request->next_revision_date,
                'tags'                  => $request->tags,
                'position'              => $request->position,
                'unique_code'           => $request->unique_code,
                'status'                => $request->status,
            ];
        }

        Document::whereId($request->hidden_id)->update($form_data);

        return response()->json(['success' => 'Standard aktualizován']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Document  $document
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $document = Document::find($id);
        $filename = Document::where('id', $id)->pluck('file');

        File::delete('standardy/' . $filename[0]);
        $document->delete();

        return response()->json(['success' => __('Standard deleted successfully')]);
    }

    public function standardSearch(Request $request)
    {
        if ($request->ajax()) {
            $output = "";

            if (Auth::user()) {
                $documents = Document::with('category', 'addon')->orderBy('description')
                    ->orWhere('name', 'LIKE', '%' . $request->search . "%")
                    ->orWhere('description', 'LIKE', '%' . $request->search . "%")
                    ->orWhere('tags', 'LIKE', '%' . $request->search . "%")
                    ->get();
            } else {
                $documents = Document::with('category', 'addon')
                    ->orWhere('name', 'LIKE', '%' . $request->search . "%")->where('status', '==', 'Schváleno')
                    ->orWhere('description', 'LIKE', '%' . $request->search . "%")
                    ->orWhere('tags', 'LIKE', '%' . $request->search . "%")
                    ->get();
            }

            if ($documents) {
                foreach ($documents as $document) {
                    $output .=
                        '<div class="accordion-item bg-' . $document->category->color . '-lt">
                            <div class="show" id="collapse-' . $document->position . '" data-bs-parent="#accordion-standard" style="">
                                <div class="accordion-body pt-0">
                                    <div class="list-group list-group-flush list-group-hoverable pt-1">
                                    <div class="list-group-item">
                                        <div class="row align-items-center">
                                            <div class="col-auto">
                                                <a href=' . route("download", $document->id) . ' target="_blank">
                                                <span class="avatar">
                                                    <img src="./../../img/files/pdf.png" alt="PDF - Standard">
                                                </span>
                                                </a>
                                            </div>
                                            <div class="col text-truncate">
                                                <a class="text-primary d-block text-decoration-none" href=' . route("download", $document->id) . ' target="_blank">
                                                <h3 style="margin-bottom: 0;">' . $document->position . '.' . $document->name . '</h3>
                                                </a>
                                                <div class="d-block text-muted text-truncate mt-n1">' . $document->description . '</div>

                                                <div class="d-block mt-n1">
                                                <a class="d-block text-' . $document->category->color . ' text-decoration-none" href="/standardy/' . $document->category->folder_name . '/' .  $document->category->id . '">
                                                ' . $document->category->svg_icon . '
                                                ' . $document->category->category_name . ' standardy</a>
                                                </div>
                                            </div>
                                            <div class="col-auto">
                                            <svg class="icon icon-tabler text-info" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                                                    stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                <rect x="4" y="5" width="16" height="16" rx="2"></rect>
                                                <line x1="16" y1="3" x2="16" y2="7"></line>
                                                <line x1="8" y1="3" x2="8" y2="7"></line>
                                                <line x1="4" y1="11" x2="20" y2="11"></line>
                                                <line x1="11" y1="15" x2="12" y2="15"></line>
                                                <line x1="12" y1="15" x2="12" y2="18"></line>
                                                </svg>
                                                <span class="text-muted">' . ($document->updated_at)->diffForHumans() . '</span>
                                                <svg class="icon icon-tabler text-yellow" xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" stroke-width="2"
                                                    stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                <path d="M9 4h6a2 2 0 0 1 2 2v14l-5 -3l-5 3v-14a2 2 0 0 1 2 -2"></path>
                                                </svg>
                                                <span class="text-muted">revize: ' . $document->revision . '</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    ';
                }
                return Response($output);
            }
        }
    }
}
