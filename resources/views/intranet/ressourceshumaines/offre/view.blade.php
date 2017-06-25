@extends('vendor.backpack.base.dashboard')

@section('content')
<div class="row">
	<div class="col-s-12" style="margin:0 auto; display:table; font-size:20px">

		<div class="col-md-12">
		  <h2 style="text-decoration: underline; text-align:center"><?php echo $offre->intitule ?></h2>
		</div>

		<div class="row container">
			<table class="table table-bordered">
  			  <TR>
  			  	<TD class="col-md-4">Société</TD>
  			  	<TD  class="col-md-8"><?php echo $offre->societe ?></TD>
  			  </TR>
  			  <TR>
  			  	<TD class="col-md-4">Telephone</TD>
  			  	<TD  class="col-md-8"><?php echo $offre->telephone ?></TD>
  			  </TR>
  			  <TR>
  			  	<TD class="col-md-4">Adresse mail</TD>
  			  	<TD  class="col-md-8"><?php echo $offre->mail ?></TD>
  			  </TR>
  			  <TR>
  			  	<TD class="col-md-4">Site internet</TD>
  			  	<TD  class="col-md-8"><?php echo $offre->website ?></TD>
  			  </TR>
			</table>
		</div>

	    <div class="row container" style="margin-bottom:20px;">
	    	<div class="col-md-12">
			      <?php  echo $offre->description?>
			</div>
		</div>

    <div style="text-align:center; display:table; margin:0 auto">
      <a href="/intranet/ressourceshumaines/offres" class="btn btn-default" style="margin-left: 20px">Retour</a>
    </div>

	</div>
</div>
@endsection
