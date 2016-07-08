@extends('layouts.app')

@section('content')
<div class="row">
	<div class="col s2">
		Sous-menus
	</div>
	<div class="col s10">
		<nav>
		    <div class="nav-wrapper">
		      <ul id="nav-mobile" class="left hide-on-med-and-down">
		        <li><a href="#">Créer</a></li>
		        <li><a href="#">Ourir</a></li>
		        <li><a href="#">Modifier</a></li>
		        <li><a href="#">Supprimer</a></li>
		        <li><a href="#">Exporter</a></li>
		        <li><a href="#">Valider</a></li>
		      </ul>
		    </div>
		  </nav>

		  <div class="col s4">
		  	<img src="{{ asset('img/photoprofil.png') }}" alt="photoprofil" class="col m12"/>
		  </div>
		  <div class="col s8">
		  	<h5 style="text-align:center">Mon profil</h5>
		  	<div>Nom : </div>
		  	<div>Prénom : </div>
		  	<div>Entreprise : </div>
		  	<div>Adresse : </div>
		  	<div>Email : </div>
		  	<div>Téléphone : </div>
		  </div>

		  <div class="col s12" style="padding-top: 2em;">
		  	<h5 style="text-align:center">Dossier de compétente</h5>
		  	<ul class="collaborateurUl">
			  	<li>Section Compétence</li>
			  	<div>Description des compétences du collaborateur</div>
			  	<li>Section Expérience</li>
			  	<div>Description de l'expérience du collaborateur</div>
			  	<li>Section Formation</li>
			  	<div>Description de la formation du collaborateur</div>
		  	</ul>
		  </div>


	</div>
</div>
@endsection