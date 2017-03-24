@extends('vendor.backpack.base.dashboard')

@section('content')
<div class="row">
	<div class="col-s-12" style="margin:0 auto; display:table; font-size:20px">
		<div class="row container">
			<table class="table table-bordered">
  			  <TR>
  			  	<TD class="col-md-3">Nom Prénom</TD>
  			  	<TD  class="col-md-9"><?php echo $conges[0]->userName ?></TD>
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
  			  	<TD  class="col-md-3"><?php echo $conges[0]->debutConges ?></TD>
  			  	<TD  class="col-md-1">Au</TD>
  			  	<TD  class="col-md-3"><?php echo $conges[0]->finConges ?></TD>
  			  </TR>
  			  <TR>
  			  	<TD class="col-md-3">Nombre de jours</TD>
  			  	<TD class="col-md-9" colspan="4"></TD>
  			  </TR>
  			  <TR>
  			  	<TD class="col-md-3">Type de congés</TD>
  			  	<TD class="col-md-9" colspan="4"><?php echo $conges[0]->type ?></TD>
  			  </TR>
			</table>
		</div>

		<div class="row container">
			<table>
  			  <TR>
  			  	<TD class="col-md-3" style="padding-top: 40px">Fait à</TD>
  			  	<TD class="col-md-9"><?php echo $conges[0]->lieuCreation ?></TD>
  			  </TR>
  			  <TR>
  			  	<TD class="col-md-3" style="padding-top: 10px">Le</TD>
  			  	<TD class="col-md-9"><?php echo $conges[0]->dateRedaction ?></TD>
  			  </TR>
  			  <TR>
  			  	<TD class="col-md-3" style="padding-top: 10px">Signature</TD>
  			  	<TD class="col-md-9"><?php echo $conges[0]->signature ?></TD>
  			  </TR>
			</table>
		</div>

		<div class="col-md-12">
		  <h2 style="text-decoration: underline; text-align:center">Réponse</h2>
		</div>

		<div class="row container">
			<table class="table table-bordered">
			  <TR style="text-align:center">
            <?php if($conges[0]->status == 1) : ?>
                <TD style="color:green; font-size:32px" class="col-md-6">Accordé</TD>
                <TD class="col-md-6">Refusé</TD>
            <?php elseif($conges[0]->status == 0): ?>
                <TD class="col-md-6">Accordé</TD>
                <TD style="color:red; font-size:32px" class="col-md-6">Refusé</TD>
            <?php else: ?>
                <TD class="col-md-6">Accordé</TD>
                <TD class="col-md-6">Refusé</TD>
            <?php endif; ?>
			  </TR>
  			  <TR>
  			  	<TD>Date et signature du responsable hiérarchique</TD>
  			  	<TD>Validé le <?php echo $conges[0]->dateResponsable ?> par <?php echo $conges[0]->signatureResponsable ?></TD>
  			  </TR>
  			  <TR>
  			  	<TD>Date et signature de dirigeant</TD>
  			  	<TD>Validé le <?php echo $conges[0]->dateDirigeant ?> par <?php echo $conges[0]->signatureDirigeant ?></TD>
  			  </TR>
  			  <TR>
  			  	<TD>Commentaire en cas de refus</TD>
  			  	<TD><?php echo $conges[0]->commentaire ?></TD>
  			  </TR>
			</table>
		</div>
	</div>
</div>
@endsection
