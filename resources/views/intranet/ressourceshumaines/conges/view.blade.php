@extends('vendor.backpack.base.dashboard')

@section('content')
<div class="row">
	<div class="col-s-12" style="margin:0 auto; display:table; font-size:20px">
		<div class="row container">
			<table class="table table-bordered">
  			  <TR>
  			  	<TD class="col-md-3">Nom Prénom</TD>
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
  			  	<TD class="col-md-4">Date de congés ou absence</TD>
  			  	<TD  class="col-md-1">Du</TD>
  			  	<TD  class="col-md-3"></TD>
  			  	<TD  class="col-md-1">Au</TD>
  			  	<TD  class="col-md-3"></TD>
  			  </TR>
  			  <TR>
  			  	<TD class="col-md-3">Nombre de jours</TD>
  			  	<TD class="col-md-9" colspan="4"></TD>
  			  </TR>
  			  <TR>
  			  	<TD class="col-md-3">Type de congés</TD>
  			  	<TD class="col-md-9" colspan="4"></TD>
  			  </TR>
			</table>
		</div>

		<div class="row container">
			<table>
  			  <TR>
  			  	<TD class="col-md-3" style="padding-top: 40px">Fait à</TD>
  			  	<TD class="col-md-9"></TD>
  			  </TR>
  			  <TR>
  			  	<TD class="col-md-3" style="padding-top: 10px">Le</TD>
  			  	<TD class="col-md-9"></TD>
  			  </TR>
  			  <TR>
  			  	<TD class="col-md-3" style="padding-top: 10px">Signature</TD>
  			  	<TD class="col-md-9"></TD>
  			  </TR>
			</table>
		</div>

		<div class="col-md-12">
		  <h2 style="text-decoration: underline; text-align:center">Réponse</h2>
		</div>

		<div class="row container">
			<table class="table table-bordered">
			  <TR style="text-align:center">
			    <TD class="col-md-6">Accordé</TD>
  			  	<TD class="col-md-6">Refusé</TD>
			  </TR>
  			  <TR>
  			  	<TD class="col-md-3" style="height:100px;">Date et signature du responsable hiérarchique</TD>
  			  	<TD class="col-md-9"></TD>
  			  </TR>
  			  <TR>
  			  	<TD class="col-md-3" style="height:100px;">Date et signature de dirigeant</TD>
  			  	<TD class="col-md-9"></TD>
  			  </TR>
  			  <TR>
  			  	<TD class="col-md-3">Commentaire en cas de refus</TD>
  			  	<TD class="col-md-9"></TD>
  			  </TR>
			</table>
		</div>
	</div>
</div>
@endsection
