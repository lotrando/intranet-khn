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
            'unique_code'           => 'nullable',
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

            $documents = Document::with('category', 'addons')->orderBy('category_id')
                ->orWhere('unique_code', 'LIKE', '%' . $request->search . "%")
                ->orWhere('name', 'LIKE', '%' . $request->search . "%")
                ->orWhere('description', 'LIKE', '%' . $request->search . "%")
                ->orWhere('tags', 'LIKE', '%' . $request->search . "%")
                ->get();

            if ($documents) {
                foreach ($documents as $document) {
                    $output .=
                        '<div class="accordion-item">
                            <div class="show" id="collapse-' . $document->position . '" data-bs-parent="#accordion-standard" style="">
                                <div class="accordion-body pt-0">
                                    <div class="list-group list-group-flush list-group-hoverable pt-1">
                                    <div class="list-group-item">
                                                          <div class="row align-items-center">
                    <div class="avatar bg-' . $document->category->color . '-lt col-auto">
                      <a class="text-decoration-none" href="/standardy/' . $document->category->folder_name . '/' .  $document->category->id . '">
                        <div class="text-uppercase">
                          ' . $document->category->svg_icon . '
                        </div>
                      </a>
                    </div>
                         <div class=" col-auto">
                          <a href="' . route('download', $document->id) . '" target="_blank">
                            <span class="avatar">
                              <img src="../../img/files/pdf.png" alt="PDF soubor">
                            </span>
                          </a>
                        </div>
                        <div class="col text-truncate">
                          <a class="text-primary d-block text-decoration-none" href="' . route('download', $document->id) . '" target="_blank">
                            <h3 style="margin-bottom: 0;">' . $document->name . '</h3>
                          </a>
                          <div class="d-block text-muted text-truncate mt-n1">' . $document->description . '</div>
                        </div>
                        <div class="col-auto">
                          <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-calendar-event text-azure" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <rect x="4" y="5" width="16" height="16" rx="2"></rect>
                            <line x1="16" y1="3" x2="16" y2="7"></line>
                            <line x1="8" y1="3" x2="8" y2="7"></line>
                            <line x1="4" y1="11" x2="20" y2="11"></line>
                            <rect x="8" y="15" width="2" height="2"></rect>
                          </svg>
                          <span class="text-muted">upraveno ' . \Carbon\Carbon::parse($document->updated_at)->diffForHumans() . '</span>
                          <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-certificate text-yellow" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <circle cx="15" cy="15" r="3"></circle>
                            <path d="M13 17.5v4.5l2 -1.5l2 1.5v-4.5"></path>
                            <path d="M10 19h-5a2 2 0 0 1 -2 -2v-10c0 -1.1 .9 -2 2 -2h14a2 2 0 0 1 2 2v10a2 2 0 0 1 -1 1.73"></path>
                            <line x1="6" y1="9" x2="18" y2="9"></line>
                            <line x1="6" y1="12" x2="9" y2="12"></line>
                            <line x1="6" y1="15" x2="8" y2="15"></line>
                          </svg>
                          <span class="text-muted">Revize: ' . $document->revision . '</span>
                        </div>
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
