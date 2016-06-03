@extends('layouts.app')

@section('content')
<div>
	<div class="input-field">
		<label for="IdUser">Identifiant</label>
		<input type="text" id="IdUser">
	</div>
	<div class="input-field">
		<label for="Password">Mot de passe</label>
		<input type="password" id="Password">
	</div> 
	<button class="btn waves-effect waves-light" type="submit" style='margin:0 auto;display:table;background-color: #45718A;'>Valider
	    <i class="material-icons right">send</i>
	 </button>
	 <a href="/inscription" style='margin:0 auto;display:table;'>S'inscrire</a>
</div>
@endsection