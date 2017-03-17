@extends('vendor.backpack.base.dashboard')

@section('header')
<div class="col-md-12 titreGestionUsers">
	Ajouter un rôle
</div>
@endsection

@section('content')
<div class="row">
	<div class="col-md-3">

	</div>
	<div class="col-md-6">
		<form action="/intranet/administration/gestionroles/ajouterrole" method="POST">
		<label for="roleName">Nom du rôle</label>
    	<input type="text" class="form-control" id="roleName" name="roleName" placeholder="Nom du rôle">
    	<label for="roleDesc">Description du rôle</label>
    	<input type="text" class="form-control" id="roleDesc" name="roleDesc" placeholder="Description du rôle">
    	<input type="hidden" name="_token" value="{{ csrf_token() }}">
    	<div align="center">
    		<a href="/intranet/administration/gestionroles"><button type="button" class="btn btn-primary boutonTableauGestionUsers" style="margin-top:10px;">Retour</button></a>
    		<button type="submit" class="btn btn-primary" style="margin-top:10px;">Ajouter</button>
    	</div>
		</form>
	</div>
	<div class="col-md-3">

	</div>
</div>
@endsection
