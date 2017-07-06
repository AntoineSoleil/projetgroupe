@extends('vendor.backpack.base.dashboard')

@section('content')
<div class="row">
	<div class="col-s-12" style="margin:0 auto; display:table; text-align:center">
		<div class="row container">
		  <div class="col-md-4">
		   <a href="{{ route('administrationGestionUsersIndex') }}">
		    <div class="thumbnail">
		      <img src="{{ asset('img/intranet/administration/gestionutilisateur.png') }}" alt="Gestion des utilisateurs" style="width:150px; height:150px;">
		      <div class="caption">
		        <h3>Gestion des utilisateurs</h3>
		      </div>
		    </div>
		   </a>
		  </div>
		  <div class="col-md-4">
		   <a href="{{ route('administrationGestionRolesIndex') }}">
		    <div class="thumbnail">
		      <img src="{{ asset('img/intranet/administration/gestionrole.png') }}" alt="Gestion des roles" style="width:150px; height:150px;">
		      <div class="caption">
		        <h3>Gestion des rôles</h3>
		      </div>
		    </div>
		   </a>
		  </div>
		  <div class="col-md-4">
		   <a href="{{ route('administrationApplicationIndex') }}">
		    <div class="thumbnail">
		      <img src="{{ asset('img/intranet/administration/applications.png') }}" alt="Gestion de l'application" style="width:150px; height:150px;">
		      <div class="caption">
		        <h3>Gestion de l'application</h3>
		      </div>
		    </div>
		   </a>
		  </div>
		  <div class="col-md-4">
		   <a href="{{ route('administrationApplicationIndex') }}">
		    <div class="thumbnail">
		      <img src="{{ asset('img/intranet/administration/attribuer_responsable.png') }}" alt="Atribuer un responsable" style="width:150px; height:150px;">
		      <div class="caption">
		        <h3>Attribuer un responsable</h3>
		      </div>
		    </div>
		   </a>
		  </div>
		</div>
	</div>
</div>
@endsection
