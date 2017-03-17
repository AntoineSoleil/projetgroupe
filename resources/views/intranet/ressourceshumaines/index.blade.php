@extends('vendor.backpack.base.dashboard')

@section('content')
<div class="row">
	<div class="col-s-12" style="margin:0 auto; display:table; text-align:center">

		<div class="row container">
		  <div class="col-md-4">
		   <a href="{{ route('craIndex') }}">
		    <div class="thumbnail">
		      <img src="..." alt="...">
		      <div class="caption">
		        <h3>Compte rendu d'acitivité</h3>
		      </div>
		    </div>
		   </a>
		  </div>
		  <div class="col-md-4">
		   <a href="{{ route('notesfraisIndex') }}">
		    <div class="thumbnail">
		      <img src="..." alt="...">
		      <div class="caption">
		        <h3>Note de frais</h3>
		      </div>
		    </div>
		   </a>
		  </div>
		  <div class="col-md-4">
		   <a href="{{ route('congesIndex') }}">
		    <div class="thumbnail">
		      <img src="..." alt="...">
		      <div class="caption">
		        <h3>Demande de congès</h3>
		      </div>
		    </div>
		   </a>
		  </div>
		</div>
		<div class="row container">
		  <div class="col-md-4">
		   <a href="{{ route('cvthequeIndex') }}">
		    <div class="thumbnail">
		      <img src="..." alt="...">
		      <div class="caption">
		        <h3>CV-thèque</h3>
		      </div>
		    </div>
		   </a>
		  </div>
		  <div class="col-md-4">
		   <a href="{{ route('offreIndex') }}">
		    <div class="thumbnail">
		      <img src="..." alt="...">
		      <div class="caption">
		        <h3>Offre de poste</h3>
		      </div>
		    </div>
		   </a>
		  </div>
		  <div class="col-md-4">
		   <a href="{{ route('candidaturesIndex') }}">
		    <div class="thumbnail">
		      <img src="..." alt="...">
		      <div class="caption">
		        <h3>Candidatures</h3>
		      </div>
		    </div>
		   </a>
		  </div>
		</div>
		<div class="row container">
		  <div class="col-md-4">
		   <a href="{{ route('collaborateursIndex') }}">
		    <div class="thumbnail">
		      <img src="..." alt="...">
		      <div class="caption">
		        <h3>Collaborateurs</h3>
		      </div>
		    </div>
		   </a>
		  </div>
		</div>
	</div>
</div>
@endsection
