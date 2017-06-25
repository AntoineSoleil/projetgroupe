@extends('vendor.backpack.base.dashboard')

<script src="/js/nicEdit.js"></script> 
<script type="text/javascript">bkLib.onDomLoaded(function() { nicEditors.allTextAreas() });</script>

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

	    <div class="row container" style="margin-bottom:20px;">
	    	<div class="col-md-12">
			      <h4>
			        Description du poste et profil recherché
			      </h4>
			      <textarea name="description" style="width: 100%;" rows="15"></textarea>
			</div>
		</div>

    <div style="text-align:center; display:table; margin:0 auto">
      <button type="submit" class="btn btn-default">Valider demande</button>
      <a href="/intranet/ressourceshumaines/offre" class="btn btn-default" style="margin-left: 20px">Retour</a>
    </div>

    </form>

	</div>
</div>
@endsection
