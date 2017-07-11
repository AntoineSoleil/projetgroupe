@extends('layouts.app')

@section('pageTitle', 'Recrutement')

@section('css')

<link rel="stylesheet" type="text/css" href="{{ asset('css/front/presentation.css') }}">

@endsection

@section('content')

<div class="row">
		<h2 align="center">Poste à pouvoir</h2>
  		<div class="container">
			<div class="card card-outline-primary mb-3 text-center bg-primary" >
			  <div class="card-block">
				<blockquote class="card-blockquote">
				  <p>Nous recherchons en ce moment</p>
				</blockquote>
			  </div>
			</div>
  			<p>IPSSI est l’une des premières entreprises en France en matière de recrutement. Des postes sont proposés dans toutes les régions de France, plus particulièrement dans les métiers de la production, de l'énergie, de la défense et des transports. Cette année encore, IPSSI prévoit près de  10 embauches en CDI, notamment par le biais de campagnes de recrutement pour les divers métiers qui font la richesse du Groupe : Energie, Défense, Chimie/Pétrochimie, Pharmarcie, Industrie lourde, Transport... Découvrez dès maintenant les campagnes en cours et rejoignez-nous !</p>
		</div>
    </div>
	<div class="row">
  		<div class="container">
		  <div class="btn btn-primary col-md-4 col-md-offset-4 " data-toggle="collapse" data-target="#blocCandidature">Candidature spontanée</div>
		  <br><br>
		  <div id="blocCandidature" class="collapse">
			 <div class="well well-sm">
                <form>
		             <div class="row">
		                <div class="col-md-12" align="center">
		                	<label><input type="radio" name="sexe">Homme</label>
							<label><input type="radio" name="sexe">Femme</label>
					  	</div>
					</div>
		            <div class="row">
		                <div class="col-md-6">
		                    <div class="form-group">
				  				<label for="nom">Nom</label>
								<input type="text" class="form-control" id="nom">
					  		</div>
					  		<div class="form-group">
				  				<label for="prenom">Prénom</label>
								<input type="text" class="form-control" id="prenom">
					  		</div>
					  		<div class="form-group">
								<label for="email">Email</label>
								<input type="email" class="form-control" id="email">
						  	</div>
							<div class="form-group">
								<label for="telephone">Téléphone</label>
								<input type="tel" class="form-control" id="telephone" >
				  			</div>
						</div>
						<div class="col-md-6">
						  	<div class="form-group">
								<label for="adresse">Adresse</label>
								<input type="text" class="form-control" id="adresse" >
				  			</div>
				  			<div class="form-group">
								<label for="cp">Code postal</label>
								<input type="text" class="form-control" id="cp" >
				  			</div>
				  			<div class="form-group">
								<label for="ville">Ville</label>
								<input type="text" class="form-control" id="ville" >
				  			</div>
							<div class="form-group">
								<label for="pays">Pays</label>
								<input type="text" class="form-control" id="pays" >
				  			</div>
		                </div>
		            </div>
		            <div class="row">
		                <div class="col-md-12">
								<label for="cv">Votre CV</label>
				  				<input type="file"  id="cv" >
		                </div>
		                <div class="col-md-12" align="center">
		                    <button type="button" class="btn btn-primary submit" ><i class="fa fa-paper-plane" aria-hidden="true"></i>Envoyer</button>
		                </div>
		            </div>
                </form>
            </div>
        </div>
<h2 align="center">Liste des offres à pouvoir</h2>
<div class="panel-group" id="accordion">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">Poste : Développeur Web PHP H/F</a>
        </h4>
      </div>
      <div id="collapse1" class="panel-collapse collapse in">
        <div class="panel-body">Le pôle informatique et télécom de Lyon recherche, pour son client, un Développeur Web PHP H/F.

Sous la responsabilité d'un chef de projet, vous intégrerez une équipe de développeurs dynamiques afin d'accompagner la croissance de notre client, avec pour missions principales :
- Réalisation de spécifications techniques à partir de l'analyse des besoins.
- Effectuer les études de faisabilité.
- Développement d'applications et de modules spécifiques dans le respect des procédures et des règles de développement PHP (bonnes pratiques).
- Recommandations techniques (conception et architecture).
- Maintenance corrective et évolutive des applications existantes.
Le profil idéal

Vous disposez d'une formation en informatique Bac +2 à Bac +5, et justifiez d'une première expérience en développement POO (Symfony2, PHP5) de minimum 2/3 ans (période de stage, alternance incluse).
Votre capacité à intégrer une équipe impliquée et dynamique vous motive, et êtes reconnu(e) pour votre ambition, curiosité technique, et votre forte capacité relationnel.

Poste basé sur Lyon à pourvoir en CDI. </div>
      </div>
    </div>
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">Poste : Chercheur en biologie</a>
        </h4>
      </div>
      <div id="collapse2" class="panel-collapse collapse">
        <div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</div>
      </div>
    </div>
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">Poste : Ingénieur</a>
        </h4>
      </div>
      <div id="collapse3" class="panel-collapse collapse">
        <div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</div>
      </div>
    </div>
		  </div>
	    </div>
	</div>

@endsection


@section('javascript')
@endsection
