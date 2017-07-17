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
        <div class="panel-body">ENSCR - Rennes (35)
			The National School of Chemistry of Rennes, ENSCR (France) invites applications for 1 post-doc (12 months; Starting date: mid-late October 2017) position on the redox reactions at Fe mineral surfaces: implications in remediation of PCB-contaminated soils.
			The successful candidate will be contributing to our ongoing efforts in combining molecular-scale reactions at mineral surfaces with macroscopic observations. In other words, the candidate will investigate the sorption and heterogeneous redox reactions occurred at the catalyst surface, and then determine the efficiency of selected catalysts to remove PCB from real contaminated soils, using a variety of chromatographic and spectroscopic methods (GC/MS, HPLC/MS, FTIR, Raman, DTG-MS).
			To qualify, applicants must hold a ph.D in environmental chemistry, geochemistry, mineral chemistry or related areas. The successful candidate will have access to excellent experimental and computational research facilities that are supported by competent scientific staff, and will also benefit from attractive working conditions.
			Please contact K. Hanna for further information. Your application (short cover letter, curriculum vitae including names of references) should be sent by email no later than September 30, 2017.

			Job Type: Full-time

			Required education:

			Doctorate
			Required language:

English</div>
      </div>
    </div>
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">Poste : Chef de projet</a>
        </h4>
      </div>
      <div id="collapse3" class="panel-collapse collapse">
        <div class="panel-body">
        	ENTREPRISE
Sopra Steria, fort de 40 000 collaborateurs dans plus de 20 pays, propose l’un des portefeuilles d’offres les plus complets du marché : conseil, intégration de systèmes, édition de solutions métier, infrastructure management et business process services. En forte croissance, le Groupe accueillera 2 700 talents en 2017 en France pour participer à ses projets d’envergure sur l’ensemble de ses métiers.
DESCRIPTION
Missions
Afin de soutenir notre croissance régulière (10% annuel depuis 5 ans, près de 60 projets aux technologies innovantes), rejoignez notre entité rennaise Telecom, Media et Jeux en tant que Chef de projet (H/F).

Vous participerez aux projets de refonte de systèmes d'information de nos clients.
Dans un cadre forfaitaire, vous assurerez la gestion d'un projet de bout en bout :
- gestion de la relation client
- respect des engagements (périmètre, délai, qualité et coût)
- analyse et suivi des risques et plans d'action associés
- pilotage du projet
- management de l'équipe

Vous serez formé(e) au contexte client et à ses métiers, ainsi qu'à nos processus qualité et méthode. Vous évoluerez dans un environnement dynamique en travaillant sur des projets innovants, variés et passionnants pour nos clients Telecom, Media et Jeux.

Nous vous offrons la possibilité de capitaliser sur vos qualités professionnelles et personnelles, d'évoluer dans un environnement dynamique et convivial.
Profil
Vous êtes issu(e) d'une formation Bac+5 (d'Ingénieurs ou Master 2 Informatique) et avez acquis au cours de votre parcours professionnel une expérience significative (3 ans minimum) en management de projet au forfait, idéalement au sein d'une Entreprise de Services Numériques (ESN) ou d'une structure informatique.
        	
        </div>
      </div>
    </div>
		  </div>
	    </div>
	</div>

@endsection


@section('javascript')
@endsection
