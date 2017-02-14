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
    	<button type="submit" class="btn btn-primary" style="float:right; margin-top:10px;">Submit</button>
		</form>
	</div>
	<div class="col-md-3">

	</div>
</div>
@endsection
