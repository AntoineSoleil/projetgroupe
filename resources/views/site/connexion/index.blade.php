@extends('layouts.app')

@section('content')
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8/jquery.min.js"></script>
<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous"><script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script type="text/javascript">
$( document ).ready(function() {
    $('.BtModal').click(function() {
	});
});
</script>
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
	 <a href="{{ route('inscriptionsIndex') }}" style='margin:0 auto;display:table;'>S'inscrire</a>
</div>
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary btn-lg BtModal" data-toggle="modal" data-target="#myModal">
  Launch demo modal
</button>

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header" style="background-color:blue;" align="center">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel" style="color:white">CONNEXION</h4>
      </div>
      <div class="modal-body">
		<input id="IdUser" class="form-control" placeholder="Identifiant" type="text"></br>
		<input id="Password" class="form-control" placeholder="Mot de passe" type="password">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Annuler</button>
        <button type="button" class="btn btn-primary">Se connecter</button>
      </div>
    </div>
  </div>
</div>
@endsection