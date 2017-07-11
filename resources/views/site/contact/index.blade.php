@extends('layouts.app')

@section('pageTitle', 'Contact')

@section('css')

<link rel="stylesheet" type="text/css" href="{{ asset('css/front/contact.css') }}">

@endsection

@section('content')

<br>
<div class="container">
    <div class="row">
        <div class="col-md-8">
            <div class="well well-sm">
                <form action="{{ route('contactPost') }}" method="POST">
                  {{ csrf_field() }}
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
					</div>
					<div class="col-md-6">
					  	<div class="form-group">
					    	<label for="telephone">Téléphone</label>
					    	<input type="tel" class="form-control" id="telephone" >
			  			</div>
			  			<div class="form-group">
					    	<label for="fonction">Fonction</label>
					    	<input type="text" class="form-control" id="fonction" >
			  			</div>
			  			<div class="form-group">
					    	<label for="societe">Société</label>
					    	<input type="text" class="form-control" id="societe" >
			  			</div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
			  				<label for ="message"> Message</label>
			  			 	<textarea rows="5"  class="form-control" id="description" placeholder="Entrer votre Message"></textarea>
			  			</div>
                    </div>
                    <div class="col-md-12" align="center">
                        <button type="submit" class="btn btn-default submit" ><i class="fa fa-paper-plane" aria-hidden="true"></i>Envoyer</button>
                    </div>
                </div>
                </form>
            </div>
        </div>
        <div class="col-md-4">
            <form>
            <address>
                <strong><span class="glyphicon glyphicon-globe"></span> IPSSI</strong><br>
              	6 Place Charles HERNU<br>
                69100 VILLEURBANNE<br>
                <abbr title="Phone">
                    Tél:</abbr>
                04 82 53 73 75
            </address>
            </form>
            <div id="map" style="width: 100%;min-height:350px;"></div>
        </div>
    </div>
</div>

@endsection

@section('javascript')
<script async defer
src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDBEZdxkLdYIg0uRK6bhAbFhad98t5R6fM&callback=initMap">
</script>
<script>
  function initMap() {
    var position1 = {lat: 45.77028250000001, lng: 4.863792699999976};
    var map = new google.maps.Map(document.getElementById('map'), {
      zoom: 6,
      center: position1
    });
    var marker = new google.maps.Marker({
      position: position1,
      map: map
    });
  }
</script>
@endsection

