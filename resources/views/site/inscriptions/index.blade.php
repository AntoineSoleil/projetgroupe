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
	      	<button type="button" class="btn btn-primary btn-lg BtChoix" data-toggle="modal" data-target="#myModal2">
			 IP FORMATION
			</button>
			</div>
	      	<div class="col-md-4">
	      	<button type="button" class="btn btn-primary btn-lg BtChoix" data-toggle="modal" data-target="#myModal2">
			 ENTREPRISE
			</button>
			</div>
			<div class="col-md-4">
			<button type="button" class="btn btn-primary btn-lg BtChoix" data-toggle="modal" data-target="#myModal2">
			 ETUDIANT
			</button>
			</div>
		</div>
      </div>
 		<div class="modal-footer">
        	<button type="button" style="margin: 0 auto;display:table" class="btn btn-default" data-dismiss="modal">Fermer</button>
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
        <h4 class="modal-title" id="myModalLabel" style="color:white">INSCRIPTION</h4>
      </div>
      <div class="modal-body">
      	<input id="IdUser" class="form-control" placeholder="Pseudo" type="text"></br>
      	<input id="Password" class="form-control" placeholder="Mot de passe" type="Password"></br>
      	<input id="ConfirmationPassword" class="form-control" placeholder="Confirmation mot de passe" type="Password"></br>
      	<input id="Email" class="form-control" placeholder="Email" type="text"></br>
      </div>
 		<div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Annuler</button>
        <button type="button" class="btn btn-primary BtSuivantChoix">Suivant</button>
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
    	var modal = $('#myModal');
    	console.log(modal);
    	modal.modal('hide');
	});
});
</script>
@endsection