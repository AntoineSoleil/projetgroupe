@extends('layouts.app')

@section('content')
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
        <h4 class="modal-title" id="myModalLabel" style="color:white">INSCRIPTION</h4>
      </div>
      <div class="modal-body">
      	<input id="IdUser" class="form-control" placeholder="Pseudo" type="text"></br>
      	<input id="Password" class="form-control" placeholder="Mot de passe" type="Password"></br>
      	<input id="ConfirmationPassword" class="form-control" placeholder="Confirmation mot de passe" type="Password"></br>
      	<input id="Email" class="form-control" placeholder="Email" type="text"></br>
      </div>
 		<div class="modal-footer">
        <button type="button" class="btn btn-default" style="float:left;" data-dismiss="modal">Fermer</button>
        <button type="button" class="btn btn-primary" id="BtSuivantChoix" data-toggle="modal" data-target="#myModalChoix">Suivant</button>
      </div>
    </div>
  </div>
</div>
<!-- Modal2 -->
<div class="modal fade" id="myModalChoix" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header" style="background-color:blue;" align="center">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel" style="color:white">INSCRIPTION</h4>
      </div>
      <div class="modal-body">
      	<div class="row">
      		<div class="col-md-4">
	      	<button type="button" class="btn btn-primary btn-lg" id="BtIpFormation" data-toggle="modal" data-target="#myModalIPFORMATION">
			 IP FORMATION
			</button>
			</div>
	      	<div class="col-md-4">
	      	<button type="button" class="btn btn-primary btn-lg" id="BtEntreprise" data-toggle="modal" data-target="#myModalENTREPRISE">
			 ENTREPRISE
			</button>
			</div>
			<div class="col-md-4">
			<button type="button" class="btn btn-primary btn-lg BtChoix" id="BtEtudiant" data-toggle="modal" data-target="#myModalETUDIANT">
			 ETUDIANT
			</button>
			</div>
		</div>
      </div>
 		<div class="modal-footer">
        	<button type="button" style="margin: 0 auto;display:table" class="btn btn-default" id="BtRetour" data-dismiss="modal">Retour</button>
        </div>
    </div>
  </div>
</div>
<!-- Modal IPFORMATION-->
<div class="modal fade" id="myModalIPFORMATION" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header" style="background-color:blue;" align="center">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel" style="color:white">INSCRIPTION IP FORMATION</h4>
      </div>
      <div class="modal-body">
      	<input id="nom" class="form-control" placeholder="Nom" type="text"></br>
      	<input id="prenom" class="form-control" placeholder="Prenom" type="text"></br>
      	<input id="rue" class="form-control" placeholder="Rue" type="text"></br>
      	<input id="adresse" class="form-control" placeholder="Adresse" type="text"></br>
        <input id="cp" class="form-control" placeholder="Code postal" type="text"></br>
        <input id="telephone" class="form-control" placeholder="Téléphone" type="text"></br>
      </div>
 		<div class="modal-footer">
        <button type="button" class="btn btn-default BtRetourChoix" data-dismiss="modal">Annuler</button>
        <button type="button" class="btn btn-primary BtValider">Valider</button>
      </div>
    </div>
  </div>
</div>
<!-- Modal ENTREPRISE-->
<div class="modal fade" id="myModalENTREPRISE" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header" style="background-color:blue;" align="center">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel" style="color:white">INSCRIPTION ENTREPRISE</h4>
      </div>
      <div class="modal-body">
        <input id="nomEntreprise" class="form-control" placeholder="Nom de l'entreprise" type="text"></br>
        <input id="adresseEntreprise" class="form-control" placeholder="Prenom de l'entreprise" type="text"></br>
        <input id="telephoneEntreprise" class="form-control" placeholder="Téléphone" type="text"></br>
        <input id="nomDirigeant" class="form-control" placeholder="Nom du dirigeant" type="text"></br>
        <input id="prenomDirigeant" class="form-control" placeholder="Prenom du dirigeant" type="text"></br>
        <input id="poste" class="form-control" placeholder="Poste" type="text"></br>
        <input id="telephoneDirigeant" class="form-control" placeholder="Téléphone" type="text"></br>
      </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-default BtRetourChoix" data-dismiss="modal">Annuler</button>
        <button type="button" class="btn btn-primary BtValider">Valider</button>
      </div>
    </div>
  </div>
</div>
<!-- Modal IPFORMATION-->
<div class="modal fade" id="myModalETUDIANT" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header" style="background-color:blue;" align="center">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel" style="color:white">INSCRIPTION ETUDIANT</h4>
      </div>
      <div class="modal-body">
        <input id="nomEtudiant" class="form-control" placeholder="Nom" type="text"></br>
        <input id="prenomEtudiant" class="form-control" placeholder="Prenom" type="text"></br>
        <input id="rueEtudiant" class="form-control" placeholder="Rue" type="text"></br>
        <input id="adresseEtudiant" class="form-control" placeholder="Adresse" type="text"></br>
        <input id="cpEtudiant" class="form-control" placeholder="Code postal" type="text"></br>
        <input id="telephoneEtudiant" class="form-control" placeholder="Téléphone" type="text"></br>
      </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-default BtRetourChoix" data-dismiss="modal">Annuler</button>
        <button type="button" class="btn btn-primary BtValider">Valider</button>
      </div>
    </div>
  </div>
</div>
@endsection

@section('javascript')
<!-- <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8/jquery.min.js"></script> -->
<!-- <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.4.min.js"></script> -->
<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous"><script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script> -->
<script type="text/javascript">
$( document ).ready(function() {
  $('#BtSuivantChoix').click(function() {
  	$('#myModal').modal('hide');
	});
  $('#BtIpFormation').click(function() {
    $('#myModalChoix').modal('hide');
  });
  $('#BtEntreprise').click(function() {
    $('#myModalChoix').modal('hide');
  });
  $('#BtEtudiant').click(function() {
    $('#myModalChoix').modal('hide');
  });
  $('#BtRetour').click(function() {
    $('#myModal').modal('show');
  });
  $('.BtRetourChoix').click(function() {
    $('#myModalIPFORMATION').modal('hide');
    $('#myModalENTREPRISE').modal('hide');
    $('#myModalETUDIANT').modal('hide');
    $('#myModalChoix').modal('show');
  });
});
</script>
@endsection