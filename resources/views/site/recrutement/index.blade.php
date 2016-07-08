@extends('layouts.app')

@section('content') 
<div class="row">
  <div class="col s2">
  		Liste Menus Gauche
  </div>

  <div class="col s10">
  	<!-- Titre de la page -->
    <div class="col s12" style="Text-align:center; font-size: 28px">
      Recrutement
    </div>
    <div class="col s12">
      <select>
          <option>--Choisissez une option--</option>
          <option>Candidature spontanée</option>
      </select>
    </div>
    <div class="col s5">
      <!-- Sexe -->
      <input name="sexe" type="radio" id="femme"/>
      <label for="femme">Femme</label>
      <input name="sexe" type="radio" id="homme"/>
      <label for="homme">Homme</label><br>

      <!-- Nom -->
      <input id="Nom" type="text" class="validate">
      <label for="Nom">Nom: </label><br>

      <!-- Prenom -->
      <input id="Prenom" type="text" class="validate">
      <label for="Prenom">Nom: </label><br>

      <!-- Adresse -->
      <input id="Adresse" type="text" class="validate">
      <label for="Adresse">Nom: </label><br>

      <!-- Code Postal -->
      <input id="CP" type="text" class="validate">
      <label for="CP">Nom: </label><br>

      <!-- Ville -->
      <input id="Ville" type="text" class="validate">
      <label for="Ville">Nom: </label><br>

      <!-- Pays -->
      <input id="Pays" type="text" class="validate">
      <label for="Pays">Nom: </label><br>

      <!-- Téléphone -->
      <input id="Telephone" type="tel" class="validate">
      <label for="Telephone">Téléphone: </label><br>

      <!-- E-mail -->
      <input id="Mail" type="text" class="validate">
      <label for="Mail">E-mail: </label><br>

      <!-- CV -->
      <div class="btn">
        <span>Joindre CV</span>
        <input type="file">
      </div>
      <div class="file-path-wrapper">
        <input class="file-path validate" type="text">
      </div>

    </div>
  	<div class="col s7">
      <div class="input-field col s12">
        <textarea id="textarea1" class="materialize-textarea"></textarea>
        <label for="textarea1">Textarea</label>
      </div>
    </div>

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
