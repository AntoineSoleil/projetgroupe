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
	            <TD class="col-md-2"><b>Client</b></TD>
	            <TD class="col-md-2"><?php echo $cra->name_client ?></TD>
	            <TD class="col-md-1"><b>Projet</b></TD>
	            <TD class="col-md-2"><?php echo $cra->projet ?></TD>
	            <TD class="col-md-2"><b>Période Mission</b></TD>
	            <TD class="col-md-3">Du <?php echo $cra->debut_mission ?> au <?php echo $cra->fin_mission ?></TD>
	          </TR>
	          <TR>
	            <TD class="col-md-2"><b>Responsable Client</b></TD>
	            <TD class="col-md-2"><?php echo $cra->name_responsable_client ?></TD>
	            <TD class="col-md-1"><b>Fonction</b></TD>
	            <TD class="col-md-2"><?php echo $cra->fonction_responsable_client ?></TD>
	            <TD class="col-md-2"><b>Contacts</b></TD>
	            <TD class="col-md-3"><?php echo $cra->phone_responsable_client ?><br><?php echo $cra->mail_responsable_client ?></TD>
	          </TR>
	          <TR>
	            <TD class="col-md-2"><b>Responsable FORTIL</b></TD>
	            <TD class="col-md-2"><?php echo $cra->name_responsable_fortil ?></TD>
	            <TD class="col-md-1"><b>Fonction</b></TD>
	            <TD class="col-md-2"><?php echo $cra->fonction_responsable_fortil ?></TD>
	            <TD class="col-md-2"><b>Contacts</b></TD>
	            <TD class="col-md-3"><?php echo $cra->phone_responsable_fortil ?><br><?php echo $cra->mail_responsable_fortil ?></TD>
	          </TR>
	          <TR>
	            <TD class="col-md-2"><b>Collaborateur</b></TD>
	            <TD class="col-md-2"><?php echo $cra->name_collaborateur ?></TD>
	            <TD class="col-md-1"><b>Fonction</b></TD>
	            <TD class="col-md-2"><?php echo $cra->fonction_collaborateur ?></TD>
	            <TD class="col-md-2"><b>Contacts</b></TD>
	            <TD class="col-md-3"><?php echo $cra->phone_collaborateur ?><br><?php echo $cra->mail_collaborateur ?></TD>
	          </TR>
	      	</table>
    	</div>

    	<div class="row container">
    		<table class="table table-bordered">
			    <TR>
			      <TD class="col-md-9"><b>Rapport d'activité</b></TD>
			      <TD class="col-md-3" colspan="2"><b>Santé et Sécurité du travail</b></TD>
			    </TR>
			    <TR>
			    	<TD rowspan="5"><?php echo $cra->rapport?></TD>
			    	<TD><b>Nombre d'accident avec arrêt</b></TD>
			    	<TD><?php echo $cra->accident_avec_arret ?></TD>
			    </TR>
			    <TR>
			    	<TD><b>Nombre d'accident sans arrêt</b></TD>
			    	<TD><?php echo $cra->accident_sans_arret ?></TD>
			    </TR>
			    <TR>
			    	<TD><b>Nombre d'accident de trajet</b></TD>
			    	<TD><?php echo $cra->accident_trajet ?></TD>
			    </TR>
			    <TR>
			    	<TD><b>Nombre de jours d'arrêt maladie</b></TD>
			    	<TD><?php echo $cra->jours_arret_maladie ?></TD>
			    </TR>
			</table>
    	</div>

    	<div class="row container">
    		<table class="table table-bordered">
			    <TR>
			    	<TD><b>Nombre de jours de congés ou d'absence durant la période</b></TD>
			    	<TD><?php echo $cra->absences ?></TD>
			    </TR>
			    <TR>
			    	<TD><b>Total du nombre de jours de présence</b></TD>
			    	<TD><?php echo $cra->nombre_jours_presence ?></TD>
			    </TR>
			</table>
    	</div>

    	<div class="row container">
    		<table class="table table-bordered">
			    <TR>
			    	<TD><b>Satisfaction du Consultant</b></TD>
			    	<TD>
			    		<div class="col-md-3"><input type="radio" name="satisfactionConsultant" value="3" checked> Très satisfait</div>
			    		<div class="col-md-3"><input type="radio" name="satisfactionConsultant" value="2"> Satisfait</div>
			    		<div class="col-md-3"><input type="radio" name="satisfactionConsultant" value="1"> A revoir</div>
			    		<div class="col-md-3"><input type="radio" name="satisfactionConsultant" value="0"> Insuffisant</div>
			    	</TD>
			    </TR>
			    <TR>
			    	<TD><b>Satisfaction du Client</b></TD>
			    	<TD>
			    		<div class="col-md-3"><input type="radio" name="satisfactionClient" value="3" checked> Très satisfait</div>
			    		<div class="col-md-3"><input type="radio" name="satisfactionClient" value="2"> Satisfait</div>
			    		<div class="col-md-3"><input type="radio" name="satisfactionClient" value="1"> A revoir</div>
			    		<div class="col-md-3"><input type="radio" name="satisfactionClient" value="0"> Insuffisant</div>
			    	</TD>
			    </TR>
			    <TR>
			    	<TD><b>Points d'amélioration</b></TD>
			    	<TD><input type="text" class="form-control" id="accidentAvecArret" name="accidentAvecArret"></TD>
			    </TR>
			    <TR>
			    	<TD><b>Actions restantes à effectuer</b></TD>
			    	<TD><input type="text" class="form-control" id="accidentAvecArret" name="accidentAvecArret"></TD>
			    </TR>
			    <TR>
			    	<TD><b>Commentaire</b></TD>
			    	<TD><input type="text" class="form-control" id="accidentAvecArret" name="accidentAvecArret"></TD>
			    </TR>
			</table>
    	</div>



		<div style="text-align:center; display:table; margin:0 auto">
  			<button type="submit" class="btn btn-default">Valider Evaluation</button>
  			<a href="/intranet/ressourceshumaines/cras" class="btn btn-default" style="margin-left: 20px">Retour</a>
		</div>
		
	</div>
</div>
@endsection

