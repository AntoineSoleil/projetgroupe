@extends('layouts.app')

@section('pageTitle', 'Présentation')

@section('css')

<link rel="stylesheet" type="text/css" href="{{ asset('css/front/presentation.css') }}">

@endsection

@section('content')

<div class="row" id="blocPresentation">
		<h2 align="center">Présentation</h2>
  		<div class="container">
  			<p>IPSSI est un cabinet de conseil en ingénierie, presations intellectuelles, forfaits et produits. </p>
	        <p>IPSSI développe des experises au service des industries, en mettant à disposition ses ressources et compétences directement en régie.</p>
	        <p>L'activité de prestation d'étude permet de plus d'intéger et d'assister les clients dans toutes les phases du cycle de leur développement produit.</p>
			<p>Le siège social est actuellement basé sur Marseille avec des antennessur Lyon et Paris. Aujourdhui environ 80 salariés sont répartissur la France, que se soit sur site ou en clientèle.</p>
			<p>IPSSI est divisé en trois services:</p>
			<p>- Etudes sur site</p>
			<p>- Administraif sur site</p>
			<p>- Conseil sur site (manager) ou en clientèle (consultant)</p>
		</div>
    </div>
	<div class="container">
		<div class="row">
		    <div class="col-xs-12 col-md-4">
		        <div class="panel panel-primary">
		            <div class="panel-heading">
		                <h3 class="panel-title">
		                      Chiffres clés</h3>
		            </div>
		            <div class="panel-body">
		                <table class="table">
		                    <tr>
		                        <td>
		                            80 salariés répartis en France
		                        </td>
		                    </tr>
		                    <tr class="active">
		                        <td>
		                            Création en 2000
		                        </td>
		                    </tr>
		                    <tr>
		                        <td>
		                            10 millions de chiffre d'affaire
		                        </td>
		                    </tr>
		                    <tr class="active">
		                        <td>
		                            10 recrutements chaque année
		                        </td>
		                    </tr>
		                    <tr>
		                        <td>
		                         	2 nouveaux partenaires par an
		                        </td>
		                    </tr>
		                </table>
		            </div>
		        </div>
		    </div>
		    <div class="col-xs-12 col-md-4">
		        <div class="panel panel-success">
		            <div class="cnrflash">
		            </div>
		            <div class="panel-heading">
		                <h3 class="panel-title">
		                    Notre expertise</h3>
		            </div>
		            <div class="panel-body">
		                <table class="table">
		                    <tr>
		                        <td>
		                            Présentation des expertises
		                        </td>
		                    </tr>
		                    <tr class="active">
		                        <td>
		                           Assistance technique
		                        </td>
		                    </tr>
		                    <tr>
		                        <td>
		                            Formation
		                        </td>
		                    </tr>
		                    <tr class="active">
		                        <td>
		                            Forfait
		                        </td>
		                    </tr>
		                    <tr>
		                        <td>
		                            Développement
		                        </td>
		                    </tr>
		                </table>
		            </div>
		        </div>
		    </div>
		    <div class="col-xs-12 col-md-4">
		        <div class="panel panel-info">
		            <div class="panel-heading">
		                <h3 class="panel-title">
		                    Les valeurs du groupe</h3>
		            </div>
		            <div class="panel-body">
		                <table class="table">
		                    <tr>
		                        <td>
		                            Confiance
		                        </td>
		                    </tr>
		                    <tr class="active">
		                        <td>
		                             Savoir faire
		                        </td>
		                    </tr>
		                    <tr>
		                        <td>
		                            Passion
		                        </td>
		                    </tr>
		                    <tr class="active">
		                        <td>
		                           Innovation
		                        </td>
		                    </tr>
		                    <tr>
		                        <td>
		                            Engagement
		                        </td>
		                    </tr>
		                </table>
		            </div>
		        </div>
		    </div>
		</div>
</div>
	</div>

@endsection


@section('javascript')
@endsection
