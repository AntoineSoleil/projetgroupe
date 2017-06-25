@extends('vendor.backpack.base.dashboard')

@section('content')
<div class="row">
	<div class="col-s-12" style="margin:0 auto; display:table; font-size:20px">

		<div class="col-md-12">
		  <h2 style="text-decoration: underline; text-align:center">Nouvelle offre</h2>
		</div>

    <form form action="/intranet/ressourceshumaines/conges/nouveau" method="POST">
    <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />

		<div class="row container">
			<table class="table table-bordered">
  			  <TR>
  			  	<TD class="col-md-4">Intitule</TD>
  			  	<TD  class="col-md-8" class="form-group"><input type="text" class="form-control" id="intitule" name="intitule"></TD>
  			  </TR>
  			  <TR>
  			  	<TD class="col-md-4">Société</TD>
  			  	<TD  class="col-md-8" class="form-group"><input type="text" class="form-control" id="societe" name="societe"></TD>
  			  </TR>
  			  <TR>
  			  	<TD class="col-md-4">Nom du contact</TD>
  			  	<TD  class="col-md-8" class="form-group"><input type="text" class="form-control" id="societe" name="societe"></TD>
  			  </TR>
  			  <TR>
  			  	<TD class="col-md-4">Telephone</TD>
  			  	<TD class="col-md-8" colspan="4" class="form-group"><input type="text" class="form-control" id="telephone" name="telephone"></TD>
  			  </TR>
  			  <TR>
  			  	<TD class="col-md-4">Adresse mail</TD>
  			  	<TD class="col-md-8" colspan="4" class="form-group"><input type="text" class="form-control" id="mail" name="mail"></TD>
  			  </TR>
  			  <TR>
  			  	<TD class="col-md-4">Site internet</TD>
  			  	<TD class="col-md-8" colspan="4" class="form-group"><input type="text" class="form-control" id="website" name="website"></TD>
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
        <input type="text" class="form-control" id="dateCreation" name="dateCreation" placeholder="JJ-MM-AAAA">
      </div>
  		<div class="col-md-3" style="padding-top: 10px; padding-bottom:100px">
        <label for="signatureDemandeur">Signature</label>
      </div>
  		<div class="col-md-9" class="form-group"  style="padding-top: 10px; padding-bottom:100px">
        <input type="text" class="form-control" id="signatureDemandeur" name="signatureDemandeur" placeholder="Nom Prenom">
      </div>
		</div>

    <div style="text-align:center; display:table; margin:0 auto">
      <button type="submit" class="btn btn-default">Valider demande</button>
      <a href="/intranet/ressourceshumaines/conges" class="btn btn-default" style="margin-left: 20px">Retour</a>
    </div>

    </form>

	</div>
</div>
@endsection
