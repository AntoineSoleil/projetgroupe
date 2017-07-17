@extends('layouts.app')

@section('pageTitle', 'Accueil')

@section('css')

<link rel="stylesheet" type="text/css" href="{{ asset('css/front/accueil.css') }}">

@endsection

@section('content')

<div class="container">
<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item active">
      <img src="la.jpg" alt="Los Angeles">
    </div>

    <div class="item">
      <img src="chicago.jpg" alt="Chicago">
    </div>

    <div class="item">
      <img src="ny.jpg" alt="New York">
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
	<br>
	<div class="row" >
        <div class="col-md-5" align="center"> 
            <h2 >Recrutement</h2>
            <p>Étape par étape, nous vous expliquons comment déposer votre candidature sur le site et quel est le processus de recrutement.</p>
            <a class="btn btn-primary col-md-12" href="{{ route('recrutementsIndex') }}" role="button">Postuler</a> 
		</div>
		<div class="col-md-7">
			<p>Des centaines de clients nous font confiance :</p>
			<p>Nos équipes sont compétents dans six domaines d'activités :</p>
			<ul>
				<li></span> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Energie</li>
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
			<img src="{{ asset('img/plansite.png') }}" alt="plan du site"/>

			</div>
		</div>
	</div>
</div>

@endsection
