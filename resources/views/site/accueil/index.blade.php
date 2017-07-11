@extends('layouts.app')

@section('pageTitle', 'Accueil')

@section('css')

<link rel="stylesheet" type="text/css" href="{{ asset('css/front/accueil.css') }}">

@endsection

@section('content')

<div class="container">
    <div class="row" >
        <div class="col-md-12" >
			 <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
			  <div class="carousel-inner" role="listbox">
			    <div class="carousel-item active">
			      <img class="d-block img-fluid" src="img/droneActu.png" alt="drone" width="1024">
			    </div>
			    <div class="carousel-item">
			      <img class="d-block img-fluid" src="img/panneauActu.jpg" alt="Panneau solaire">
			    </div>
			    <div class="carousel-item">
			      <img class="d-block img-fluid" src="http://placehold.it/1024x350" alt="Third slide">
			    </div>
			  </div>
			  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
			    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
			    <span class="sr-only">Previous</span>
			  </a>
			  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
			    <span class="carousel-control-next-icon" aria-hidden="true"></span>
			    <span class="sr-only">Next</span>
			  </a>
			</div>
		</div>
	</div>
	<br>
	<div class="row" >
        <div class="col-md-5">
	        <ul class="demo-3">
			    <li>
			        <figure>
			            <img src="img/recrutementAccueil.png" alt="recrutement" title="recrutement" />
			            <figcaption>
                    <h2>Recrutement</h2>
                    <p>Étape par étape, nous vous expliquons comment déposer votre candidature sur le site et quel est le processus de recrutement.</p>
                    <a class="btn btn-primary col-md-6"  role="button">Postuler</a>
			            </figcaption>
			        </figure>
			    </li>
			</ul>
		</div>
		<div class="col-md-7">
			<p>Des centaines de clients nous font confiance :</p>
			<p>Nos équipes sont compétents dans six domaines d'activités :</p>
			<ul>
				<li> <span class="glyphicon glyphicon-search"></span> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Energie</li>
				<li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Défense</li>
				<li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Chimie/Pétrochimie</li>
				<li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Pharmarcie</li>
				<li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Industrie lourde</li>
				<li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Transport</li>
			</ul>
		</div>
	</div>
	<div class="row" >
		  <div class="col-md-12" >
			 	<button class="btn btn-primary col-md-12"  data-toggle="collapse" data-target="#blocPlan">Plan du site</button>
			 <br><br>
			 <div id="blocPlan" class="collapse" align="center">
			<img src="img/plansite.png" alt="plan du site"/>

			</div>
		</div>
	</div>
</div>

@endsection
