@extends('layouts.app')

@section('content')
<div>
  <div class="row">
    <div class="input-field">
      <div class="col m12">
        <label for="IdUser"><i class="material-icons">assignment_ind</i> Identifiant</label>
        <input type="text" id="IdUser">
      </div>
    </div>
  </div>
  <div class="row">
    <div class="input-field">
      <div class="col m12">
        <label for="Password"><i class="material-icons">lock</i> Mot de passe</label>
        <input type="password" id="Password"> 
      </div>
    </div>
  </div>
  <div class="row">
    <div class="input-field">
      <div class="col m12">
        <label for=""><i class="material-icons">email</i> Adresse mail</label>
        <input type="text" id="Mail"> 
      </div>
    </div>
  </div>
  <div class="row">
    <div class="input-field">
      <div class="col m12">
        <label for=""><i class="material-icons">perm_identity</i> Nom</label>
        <input type="text" id="Nom"> 
      </div>
    </div>
  </div>
  <div class="row">
  <div class="input-field">
    <div class="col m12">
        <label for=""><i class="material-icons">perm_identity</i> Prénom</label>
        <input type="text" id="Prenom"> 
    </div>
  </div>
  <div class="row">
    <div class="col m12">
      <button class="btn waves-effect waves-light" type="submit" style='margin:0 auto;display:table;background-color: #45718A;'>Valider
          <i class="material-icons right">send</i>
      </button>
    </div>
  </div>
</div>
@endsection