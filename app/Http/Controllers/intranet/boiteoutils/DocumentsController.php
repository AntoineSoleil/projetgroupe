<?php

namespace App\Http\Controllers\Intranet\Boiteoutils;

use App\Http\Requests;
use Request;

use App\Http\Controllers\Controller;
use App\Documents;
use App\Users;

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Response;

use Auth;

class DocumentsController extends Controller
{
    protected $authUserId;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->authUserId = Auth::user()->id;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $entries = Documents::all();
        return view('intranet.boiteoutils.documents.index', compact('entries'));
    }

    public function add(Request $request) {

      $file  = Request::file('file');
      $infos = Request::all();
      $extension = $file->getClientOriginalExtension();
      Storage::disk('local')->put($file->getFilename().'.'.$extension,  File::get($file));
      $entry = new Documents();
      $entry->mime = $extension;
      $entry->filename = $file->getFilename().'.'.$extension;
      $entry->name = $infos["name"];
      $entry->description =$infos["description"];
      $entry->id_users = $this->authUserId;

      $entry->save();

      return redirect('/intranet/boiteoutils/documentstravail');

    }

    public function store($filename) {

      $entry = Documents::where('filename', '=', $filename)
              ->firstOrFail();
      $file = Storage::disk('local')->get($entry->filename);

      return (new Response($file, 200))
               ->header('Content-Type', $entry->mime);

    }

    public function destroy($id) {

      $entry = Documents::findOrFail($id);
      $entry->delete();
      echo json_encode(array('status' => TRUE ));
    }

}
