@extends('layouts.app')

@section('pageTitle', 'Activité')

@section('css')

<link rel="stylesheet" type="text/css" href="{{ asset('css/front/activite.css') }}">

@endsection

@section('content')

	<div class="row">
		<div class="container">
    		<button type="button" class="btn btn-info ribbon">Nos métiers</button>
    		<div class="row blocInfo">
	    		<div class="col-sm-12 col-md-12 ">
	    			<br><br>
		    		<p>Nos métiers sont diversifiés avec une équipe compétente et motivé. L'entreprise est composé d'ingénieur en recherche et développement, de technicien en laboratoire, technicien technique, de chef de projet,...</p>
		    	</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="container">
    		<button type="button" class="btn btn-info ribbon">Nos secteurs d'activités</button>
    		<div class="row ">
    			<br><br>
	    		<div class="row">
		    		<div class="col-sm-4 col-md-4">
		    			<img src="{{ asset('img/energie.jpg') }}" alt="energie" width="250" height="250">
		    			<p>Energie</p>
		    		</div>
		    		<div class="col-sm-4 col-md-4">
		    			<img src="{{ asset('img/defense.jpg') }}" alt="defense" width="250" height="250">
		    			<p>Défense</p>
		    		</div>
		    		<div class="col-sm-4 col-md-4">
		    			<img src="{{ asset('img/petrochimie.jpg') }}" alt="petrochimie" width="250" height="250">
		    			<p>Chimie/Pétrochimie</p>
		    		</div>
	    		</div>
	    		<br>
	    		<div class="row">
		    		<div class="col-sm-4 col-md-4">
		    			<img src="{{ asset('img/medicament.jpg') }}" alt="medicament" width="250" height="250">
		    			<p>Pharmarcie</p>
		    		</div>
		    		<div class="col-sm-4 col-md-4">
		    			<img src="{{ asset('img/industrie.jpg') }}" alt="industrie" width="250" height="250">
		    			<p>Industrie lourde</p>
		    		</div>
		    		<div class="col-sm-4 col-md-4">
		    			<img src="{{ asset('img/transport.jpg') }}" alt="transport" width="250" height="250">
		    			<p>Transport</p>
		    		</div>
		    	</div>
		    </div>
		</div>
		<div class="row">
			<div class="container">
	    		<button type="button" class="btn btn-info ribbon">Ils nous font confiance</button>
	    		<div class="row">
					<div class="container">
						<div class="row blocInfo">
							<div class="col-sm-12 col-md-12">
								<br><br>
								<p>Voici quelques exemples de clients avec lesquels nous avons eu le plaisir de collaborer. Ces derniers vous permettront d’appréhender les secteurs et nos domaines d’intervention.</p>
							</div>
						</div>
						<div class="row">
							<div class="col-md-4">
								<img src="{{ asset('img/EDF.png') }}" alt="EDF" class="img-thumbnail"/>
							</div>
							<div class="col-md-4">
								<img src="{{ asset('img/Orange.png') }}" alt="Orange" class="img-thumbnail"/>
							</div>
							<div class="col-md-4">
								<img src="{{ asset('img/airfrance.png') }}" alt="Air france" class="img-thumbnail"/>
							</div>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>

@endsection

@section('javascript')

<script type="text/javascript">
$(document).ready(function() {
	$('.blocInfo').hide();
	$(".ribbon").on("click",function() {
		$(this).next().toggle( "slow", function() {
    // Animation complete.
  });
	});
});
</script>

@endsection
