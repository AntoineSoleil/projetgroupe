@extends('layouts.intranet')

@section('content')
<div class="row">
	<div class="col-s-12" style="margin:0 auto; display:table; font-size:20px">
		<div class="row container">
			<table class="table table-bordered">
  			  <TR>
  			  	<TD class="col-md-3">Nom</TD>
  			  	<TD  class="col-md-9"></TD>
  			  </TR>
  			  <TR>
  			  	<TD class="col-md-3">Prénom</TD>
  			  	<TD  class="col-md-9"></TD>
  			  </TR>
  			  <TR>
  			  	<TD class="col-md-3">Fonction</TD>
  			  	<TD  class="col-md-9"></TD>
  			  </TR>
  			  <TR>
  			  	<TD class="col-md-3">Lieu d'intervention</TD>
  			  	<TD  class="col-md-9"></TD>
  			  </TR>
  			  <TR>
  			  	<TD class="col-md-3">Responsable hiérarchique</TD>
  			  	<TD  class="col-md-9"></TD>
  			  </TR>
			</table>
		</div>

		<div class="col-md-12">
		  <h2 style="text-decoration: underline; text-align:center">Demande</h2>
		</div>

		<div class="row container">
			<table class="table table-bordered">
  			  <TR>
  			  	<TD class="col-md-3">Nom</TD>
  			  	<TD  class="col-md-9"></TD>
  			  </TR>
  			  <TR>
  			  	<TD class="col-md-3">Nombre de jours</TD>
  			  	<TD  class="col-md-9"></TD>
  			  </TR>
  			  <TR>
  			  	<TD class="col-md-3">Type de congés</TD>
  			  	<TD  class="col-md-9"></TD>
  			  </TR>
			</table>
		</div>
		
		<!--<div class="row container">
			<table class="table table-bordered">
  			  <TR>
  			  	<TD class="col-md-4">Date de congés ou absence</TD>
  			  	<TD class="col-md-2">Du</TD>
  			  	<TD class="col-md-2"></TD>
  			  	<TD class="col-md-2">Au</TD>
  			  	<TD class="col-md-2"></TD>
  			  </TR>
  			  <TR>
  			  	<TD class="col-md-3">Nombre de jours</TD>
  			  	<TD  class="col-md-9"></TD>
  			  </TR>
  			  <TR>
  			  	<TD class="col-md-3">Type de congés</TD>
  			  	<TD  class="col-md-9"></TD>
  			  </TR>
			</table>
		</div>-->

		<div class="row container">
		  <div class="col-md-3">
		    Fait à 
		  </div>
		  <div class="col-md-9">
		    <br>
		  </div>
		</div>
		<div class="row container">
		  <div class="col-md-3">
		    Le
		  </div>
		  <div class="col-md-9">
		    <br>
		  </div>
		</div>
		<div class="row container">
		  <div class="col-md-3">
		    Signature
		  </div>
		  <div class="col-md-9">
		    <br>
		  </div>
		</div>

		<div class="col-md-12">
		  <h2 style="text-decoration: underline; text-align:center">Réponse</h2>
		</div>

		<div class="row container" style="text-align:center">
		  <div class="col-md-6">
		    Accordé
		  </div>
		  <div class="col-md-6">
		    Refusé
		  </div>
		</div>
		<div class="row container">
		  <div class="col-md-3">
		    Date et signature du responsable hiérarchique
		  </div>
		  <div class="col-md-9">
		    <br>
		  </div>
		</div>
		<div class="row container">
		  <div class="col-md-3">
		    Date et signature du dirigeant
		  </div>
		  <div class="col-md-9">
		    <br>
		  </div>
		</div>
		<div class="row container">
		  <div class="col-md-3">
		    Commentaire en cas de refus
		  </div>
		  <div class="col-md-9">
		    <br>
		  </div>
		</div>
	</div>
</div>
@endsection