<?php

namespace App\Http\Controllers\Intranet\Actualites;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Actualites;
use App\Commentaires;
use App\Users;

use Auth;

class ActualitesController extends Controller
{
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
      $entries = Actualites::with('commentaire', 'commentaire.user', 'user')->orderBy('updated_at', 'desc')->get()->toArray();

      return view('intranet.actualites.index')->with('entries', $entries);
    }

    public function create(Request $request)
    {
      $this->validateRequest($request);
      $entry = Actualites::create([
                  'users_id'     =>  $this->authUserId,
                  'subject'      => $request->input('subject'),
                  'content'      => $request->input('content'),
  			       ]);

      return redirect('/intranet/actualites');
    }

    public function update(Request $request, $id)
    {
      $organisation = Organisations::find($id);

      $this->validateRequest($request);
      $organisation->subject		= $request->input('subject');
      $organisation->content		= $request->input('content');
      $organisation->save();

      return redirect('/intranet/actualites');
    }

    public function addComent(Request $request)
    {
      $this->validateRequestComent($request);
      $entry = Commentaires::create([
                  'users_id'      =>  $this->authUserId,
                  'actualites_id' => $request->input('actualites_id'),
                  'content'       => $request->input('content'),
  			       ]);

      return redirect('/intranet/actualites');
    }

    public function destroy($id)
    {
      $entry = Actualites::findOrFail($id);
      $entry->delete();
      echo json_encode(array('status' => TRUE ));
    }

    public function destroyComent($id)
    {
      $entry = Commentaires::findOrFail($id);
      $entry->delete();
      echo json_encode(array('status' => TRUE ));
    }

    public function validateRequest(Request $request)
    {
  		$rules = [
  			 'subject' => 'required',
  			 'content' => 'required'
  		];
  		$this->validate($request, $rules);
	  }

    public function validateRequestComent(Request $request)
    {
  		$rules = [
  			 'content' => 'required'
  		];
  		$this->validate($request, $rules);
	  }
}
