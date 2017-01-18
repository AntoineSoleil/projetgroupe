@extends('vendor.backpack.base.dashboard')

@section('content')
<div class="row">
	<div class="col-s-12" style="margin:0 auto; display:table; font-size:20px">
		<div class="row container">
			<table class="table table-bordered">
  			  <TR>
  			  	<TD class="col-md-3">Nom</TD>
  			  	<TD  class="col-md-9" class="form-group"><input type="text" class="form-control" id="nom" name="nom" placeholder="Nom"></TD>
  			  </TR>
  			  <TR>
  			  	<TD class="col-md-3">Prénom</TD>
  			  	<TD  class="col-md-9" class="form-group"><input type="text" class="form-control" id="prenom" name="prenom" placeholder="Prenom"></TD>
  			  </TR>
  			  <TR>
  			  	<TD class="col-md-3">Fonction</TD>
  			  	<TD  class="col-md-9" class="form-group"><input type="text" class="form-control" id="fonction" name="fonction" placeholder="Fonction"></TD>
  			  </TR>
  			  <TR>
  			  	<TD class="col-md-3">Lieu d'intervention</TD>
  			  	<TD  class="col-md-9" class="form-group"><input type="text" class="form-control" id="lieuInter" name="lieuInter" placeholder="Lieu d'intervention"></TD>
  			  </TR>
  			  <TR>
  			  	<TD class="col-md-3">Responsable hiérarchique</TD>
  			  	<TD  class="col-md-9" class="form-group"><input type="text" class="form-control" id="responsable" name="responsable" placeholder="Responsable hiérarchique"></TD>
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
  			  	<TD  class="col-md-3" class="form-group"><input type="text" class="form-control" id="debutConges" name="debutConges" placeholder="JJ/MM/AAAA"></TD>
  			  	<TD  class="col-md-1">Au</TD>
  			  	<TD  class="col-md-3" class="form-group"><input type="text" class="form-control" id="finConges" name="finConges" placeholder="JJ/MM/AAAA"></TD>
  			  </TR>
  			  <TR>
  			  	<TD class="col-md-3">Nombre de jours</TD>
  			  	<TD class="col-md-9" colspan="4" class="form-group"><input type="text" class="form-control" id="nombreJours" name="nombreJours" placeholder="Nombre de jours"></TD>
  			  </TR>
  			  <TR>
  			  	<TD class="col-md-3">Type de congés</TD>
  			  	<TD class="col-md-9" colspan="4" class="form-group"><input type="text" class="form-control" id="typeConges" name="TypeConges" placeholder="Type de congés"></TD>
  			  </TR>
			</table>
		</div>

		<div class="row container">
  		<div class="col-md-3" style="padding-top: 40px">
        <label for="lieuCreation">Fait à</label>
      </div>
  		<div class="col-md-9" class="form-group" style="padding-top: 40px">
        <input type="text" class="form-control" id="lieuCreation" name="LieuCreation" placeholder="Fait à">
      </div>
  		<div class="col-md-3" style="padding-top: 10px">
        <label for="dateCreation">Le</label>
      </div>
  		<div class="col-md-9" class="form-group"  style="padding-top: 10px">
        <input type="text" class="form-control" id="dateCreation" name="dateCreation" placeholder="JJ/MM/AAAA">
      </div>
  		<div class="col-md-3" style="padding-top: 10px; padding-bottom:100px">
        <label for="signatureDemandeur">Signature</label>
      </div>
  		<div class="col-md-9" class="form-group"  style="padding-top: 10px; padding-bottom:100px">

      </div>
		</div>

    <button type="submit" class="btn btn-default" style="text-align:center; display:table; margin:0 auto">Valider demande</button>

	</div>
</div>
@endsection
