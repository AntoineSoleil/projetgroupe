@extends('layouts.app')

@section('content') 
<div class="row">
  <div class="col s12">
  	<!-- Titre de la page -->
    <div class="col s12" style="Text-align:center;background-color:#45718A;;color:white; font-size: 28px">
      <h3>Recrutement<h3>
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
      <div class="row">
        <div class="input-field">
          <div class="col m12">
            <input id="Nom" type="text" class="validate">
            <label for="Nom"><i class="material-icons">perm_identity</i> Nom</label>
          </div>
        </div>
      </div>
      <!-- Prenom -->
      <div class="row">
        <div class="input-field">
          <div class="col m12">
            <input id="Prenom" type="text" class="validate">
            <label for="Prenom"><i class="material-icons">perm_identity</i> Prénom</label>
          </div>
        </div>
      </div>
      <!-- Adresse -->
      <div class="row">
        <div class="input-field">
          <div class="col m12">
            <input id="Adresse" type="text" class="validate">
            <label for="Adresse"><i class="material-icons">location_on</i> Adresse</label>
          </div>
        </div> 
      </div>  
      <!-- Code Postal -->
      <div class="row">
        <div class="input-field">
          <div class="col m12">
            <input id="CP" type="text" class="validate">
            <label for="CP"><i class="material-icons">location_on</i> CP</label>
          </div>
        </div> 
      </div> 
      <!-- Ville -->
      <div class="row">
        <div class="input-field">
          <div class="col m12">
            <input id="Ville" type="text" class="validate">
            <label for="Ville"><i class="material-icons">my_location</i> Ville</label>
          </div>
        </div> 
      </div> 
      <!-- Pays -->
      <div class="row">
      <div class="input-field">
        <div class="col m12">
          <input id="Pays" type="text" class="validate">
          <label for="Pays"><i class="material-icons">language</i>Pays</label> 
        </div>
      </div>
      </div>
      <!-- Téléphone -->
      <div class="row">
        <div class="input-field">
          <div class="col m12">
            <input id="Telephone" type="tel" class="validate">
            <label for="Telephone"><i class="material-icons">call</i> Téléphone</label>
          </div>
        </div>
      </div>
      <!-- E-mail -->
      <div class="row">
        <div class="input-field">
          <div class="col m12">
            <input id="Mail" type="text" class="validate">
            <label for="Mail"><i class="material-icons">mail</i> E-mail</label>
          </div>
        </div>
      </div>
      <!-- CV --> 
      <div class="row">
        <div class="file-field input-field">
          <div class="col m12">
            <div class="btn" style="background-color:#45718A">
              <span>Joindre CV</span>
              <input type="file" multiple>
            </div>
            <div class="file-path-wrapper">
              <input class="file-path validate" type="text" placeholder="Pacourir">
            </div>
          </div>
        </div> 
      </div>
      <div class="row">
        <div class="input-field">
          <div class="col m12">
            <textarea id="textarea1" class="materialize-textarea"></textarea>
            <label for="textarea1"><i class="material-icons">message</i> Message</label>
          </div>
        </div>
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
