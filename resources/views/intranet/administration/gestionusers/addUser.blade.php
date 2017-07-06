@extends('vendor.backpack.base.dashboard')

@section('header')
<div class="col-lg-12 titreGestionUsers">
	Ajouter un utilisateur
</div>
@endsection

@section('content')
<div class="row">
	<div class="col-md-3">

	</div>
	<div class="col-md-6">
		<form action="/intranet/administration/gestionutilisateurs/ajouterutilisateur" method="POST">
		<label for="userName">Nom de l'utilisateur</label>
    	<input type="text" class="form-control" id="userName" name="userName" placeholder="Nom Prénom">
    	<label for="userMail">Adresse email</label>
    	<input type="email" class="form-control" id="userMail" name="userMail" placeholder="adresse email">
    	<label for="userMail">Mot de passe</label>
    	<input type="password" class="form-control" id="userPassword" name="userPassword" placeholder="adresse email">
    	<input type="hidden" name="_token" value="{{ csrf_token() }}">
    	<div align="center">
    		<a href="/intranet/administration/gestionutilisateurs"><button type="button" class="btn btn-primary boutonTableauGestionUsers" style="margin-top:10px;">Retour</button></a>
    		<button type="submit" class="btn btn-primary" style="margin-top:10px;">Ajouter</button>
    	</div>
		</form>
	</div>
	<div class="col-md-3">

	</div>
</div>
@endsection
