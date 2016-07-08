@extends('layouts.app')

@section('content') 
<div class="row">
  <div class="col s12">
  	<!-- Titre de la page -->
    <div class="col s12" style="Text-align:center; font-size: 28px">
      Recrutement
    </div>
    <div class="col s12 input-field">
      <select>
          <option>--Choisissez une option--</option>
          <option>Candidature spontanée</option>
      </select>
    </div>
      <!-- Sexe -->
      <p>
        <input name="sexe" type="radio" id="femme"/>
        <label for="femme">Femme</label>
      </p>
      <p>
        <input name="sexe" type="radio" id="homme"/>
        <label for="homme">Homme</label>
      </p>

      <!-- Nom -->
      <div class="input-field">
        <input id="Nom" type="text" class="validate">
        <label for="Nom">Nom</label>
      </div>

      <!-- Prenom -->
      <div class="input-field">
        <input id="Prenom" type="text" class="validate">
        <label for="Prenom">Pénom</label>
      </div>
      <!-- Adresse -->
      <div class="input-field">
        <input id="Adresse" type="text" class="validate">
        <label for="Adresse">Adresse</label>
      </div>    
      <!-- Code Postal -->
      <div class="input-field">
        <input id="CP" type="text" class="validate">
        <label for="CP">CP</label>
      </div>  
      <!-- Ville -->
      <div class="input-field">
        <input id="Ville" type="text" class="validate">
        <label for="Ville">Ville</label>
      </div>  
      <!-- Pays -->
      <div class="input-field">
        <input id="Pays" type="text" class="validate">
        <label for="Pays">Pays</label>
      </div>
      <!-- Téléphone -->
      <div class="input-field">
        <input id="Telephone" type="tel" class="validate">
        <label for="Telephone">Téléphone</label>
      </div>
      <!-- E-mail -->
      <div class="input-field">
        <input id="Mail" type="text" class="validate">
        <label for="Mail">E-mail</label>
      </div>

      <!-- CV --> 
      <div class="file-field input-field">
        <div class="btn" style="background-color:#45718A">
          <span>Joindre CV</span>
          <input type="file" multiple>
        </div>
        <div class="file-path-wrapper">
          <input class="file-path validate" type="text" placeholder="Pacourir">
        </div>
      </div> 
      <div class="input-field">
        <textarea id="textarea1" class="materialize-textarea"></textarea>
        <label for="textarea1">Message</label>
      </div>

      <!-- Bouton validation -->
      <button class="btn waves-effect waves-light" type="submit" name="action" style="background-color:#45718A;display:table;margin:0 auto;">Envoyer
        <i class="material-icons right">send</i>
      </button>
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
