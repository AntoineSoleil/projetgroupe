@extends('layouts.app')

@section('content') 
<div class="row">
  <div class="col s2">
  		Liste Menus Gauche
  </div>

  <div class="col s8">
  	<!-- Titre de la page -->
  	<div class="col s12" style="Text-align:center; font-size: 28px">
  		Contactez-Nous
  	</div>
  	<!-- En-tête du formulaire de contact -->
  	<div class="input-field col s6">
  		<select id="type">
  			<option value="">Choisissez votre option</option>
  			<option value="1">Postulant</option>
  			<option value="2">Etudiant</option>
  			<option value="3">Formateur</option>
  			<option value="4">Recruteur</option>
		</select>
		<label for="type">Vous êtes: </label>
  	</div>
  	<div class="input-field col s6">
  		<select id="demande">
  			<option value="" disabled selected>Choisissez votre demande</option>
  			<option value="1">Inscription</option>
  			<option value="2">Renseignement</option>
  			<option value="3">Recrutement</option>
		</select>
		<label for="demande">Votre demande concerne: </label>
  	</div>

  	<!-- Corps du formulaire de contact -->
  	<div class="col s12">
  		<div class="col s2">
  			Sexe: 
  		</div>
  		<div class="col s10">
    		<input name="sexe" type="radio" id="femme" style="background-color:red; color:red"/>
	      <label for="femme">Femme</label>
	    <input name="sexe" type="radio" id="homme" />
	      <label for="homme">Homme</label>
    	</div>

    	<div class="input-field col s6">
    		<input id="Nom" type="text" class="validate">
      		<label for="Nom"><i class="material-icons">perm_identity</i>  Nom </label>
      	</div>
      	<div class="input-field col s6">
    		<input id="Prenom" type="text" class="validate">
      		<label for="Prenom"><i class="material-icons">perm_identity</i>  Prénom </label>
      	</div>
      	<div class="input-field col s6">
    		<input id="Fonction" type="text" class="validate">
      		<label for="Fonction"><i class="material-icons">work</i>  Fonction </label>
      	</div>
      	<div class="input-field col s6">
    		<input id="Societe" type="text" class="validate">
      		<label for="Societe"><i class="material-icons">business</i>  Société </label>
      	</div>

      	<div class="input-field col s6">
    		<input id="Mail" type="text" class="validate">
      		<label for="Mail"><i class="material-icons">email</i>  E-mail </label>
      	</div>
      	<div class="input-field col s6">
    		<input id="Telephone" type="tel" class="validate">
      		<label for="Telephone"><i class="material-icons">phone</i>  Téléphone </label>
      	</div>

      	<div class="input-field col s12">
        <textarea id="Message" class="materialize-textarea"></textarea>
        <label for="Message"><i class="material-icons">message</i>  Votre message</label>
      </div>
  	</div>

  	<!-- Bouton de validation -->
  	<div class="col s12">
	<button class="btn waves-effect waves-light" type="submit" style="margin: 0 auto; background-color:#45718A; float:right" name="action">Submit
	<i class="material-icons right">send</i>
	</button>
  	</div>

  </div>

  <div class="col s2" id="map" style="width:200px;height:200px;">
  	Carte France - avec les agences<br>
  </div>
</div>
@endsection    

@section('javascript')
<script> 
  jQuery(document).ready(function() {
    	jQuery('select').material_select();
  });
</script>
@endsection
 
