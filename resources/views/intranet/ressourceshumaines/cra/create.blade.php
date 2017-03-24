@extends('vendor.backpack.base.dashboard')

@section('header')
<div class="col-md-12 titreGestionUsers">
	Nouveau Compte-Rendu d'activité
</div>
@endsection

@section('content')
<div class="row">
	<div class="col-s-12" style="margin:0 auto; display:table; font-size:20px">
		<div class="row container">
	      	<table class="table table-bordered">
	          <TR>
	            <TD class="col-md-2">Client</TD>
	            <TD class="col-md-2"><input type="text" class="form-control" id="nomClient" name="nomClient"></TD>
	            <TD class="col-md-1">Projet</TD>
	            <TD class="col-md-2"><input type="text" class="form-control" id="projet" name="projet"></TD>
	            <TD class="col-md-2">Période Mission</TD>
	            <TD class="col-md-3"><input type="text" class="form-control" id="debutMission" name="debutMission" placeholder="debut JJ-MM-AAAA"><br>
	            <input type="email" class="form-control" id="finMission" name="finMission" placeholder="fin JJ-MM-AAAA""></TD>
	          </TR>
	          <TR>
	            <TD class="col-md-2">Responsable Client</TD>
	            <TD class="col-md-2"><input type="text" class="form-control" id="nomResponsableClient" name="nomResponsableClient"></TD>
	            <TD class="col-md-1">Fonction</TD>
	            <TD class="col-md-2"><input type="text" class="form-control" id="fonctionResponsableClient" name="fonctionResponsableClient"></TD>
	            <TD class="col-md-2">Contacts</TD>
	            <TD class="col-md-3"><input type="text" class="form-control" id="phoneResponsableClient" name="phoneResponsableClient" placeholder="telephone"><br>
	            <input type="email" class="form-control" id="emailResponsableClient" name="emailResponsableClient" placeholder="email"></TD>
	          </TR>
	          <TR>
	            <TD class="col-md-2">Responsable FORTIL</TD>
	            <TD class="col-md-2"><input type="text" class="form-control" id="nomResponsableFortil" name="nomResponsableFortil"></TD>
	            <TD class="col-md-1">Fonction</TD>
	            <TD class="col-md-2"><input type="text" class="form-control" id="fonctionResponsableFortil" name="fonctionResponsableFortil"></TD>
	            <TD class="col-md-2">Contacts</TD>
	            <TD class="col-md-3"><input type="text" class="form-control" id="phoneResponsableFortil" name="phoneResponsableFortil" placeholder="telephone"><br>
	            <input type="email" class="form-control" id="emailResponsableFortil" name="emailResponsableFortil" placeholder="email"></TD>
	          </TR>
	          <TR>
	            <TD class="col-md-2">Collaborateur</TD>
	            <TD class="col-md-2"><input type="text" class="form-control" id="nomCollaborateur" name="nomCollaborateur"></TD>
	            <TD class="col-md-1">Fonction</TD>
	            <TD class="col-md-2"><input type="text" class="form-control" id="fonctionCollaborateur" name="fonctionCollaborateur"></TD>
	            <TD class="col-md-2">Contacts</TD>
	            <TD class="col-md-3"><input type="text" class="form-control" id="phoneCollaborateur" name="phoneCollaborateur" placeholder="telephone"><br>
	            <input type="email" class="form-control" id="emailCollaborateur" name="emailCollaborateur" placeholder="email"></TD>
	          </TR>
	      	</table>
    	</div>

    	<div class="row container">
    		<table class="table table-bordered">
			    <TR>
			      <TD class="col-md-9">Rapport d'activité</TD>
			      <TD class="col-md-3" colspan="2">Santé et Sécurité du travail</TD>
			    </TR>
			    <TR>
			    	<TD rowspan="5"><textarea class="form-control" id="commentaire" name="commentaire" rows="20"></textarea></TD>
			    	<TD>Nombre d'accident avec arrêt</TD>
			    	<TD><input type="text" class="form-control" id="accidentAvecArret" name="accidentAvecArret"></TD>
			    </TR>
			    <TR>
			    	<TD>Nombre d'accident sans arrêt</TD>
			    	<TD><input type="text" class="form-control" id="accidentSansArret" name="accidentSansArret"></TD>
			    </TR>
			    <TR>
			    	<TD>Nombre d'accident de trajet</TD>
			    	<TD><input type="text" class="form-control" id="accidentTrajet" name="accidentTrajet"></TD>
			    </TR>
			    <TR>
			    	<TD>Nombre de jours d'arrêt maladie</TD>
			    	<TD><input type="text" class="form-control" id="accidentTrajet" name="accidentTrajet"></TD>
			    </TR>
			</table>
    	</div>
		
	</div>
</div>
@endsection

