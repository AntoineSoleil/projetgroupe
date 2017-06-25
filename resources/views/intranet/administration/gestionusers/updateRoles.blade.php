@extends('vendor.backpack.base.dashboard')

@section('header')
<div class="col-md-12 titreGestionUsers">
	Modification des rôles de <?php echo $authUser->name ?>
</div>
@endsection

@section('content')
<div class="row">
	<div class="col-md-12" >
		<TABLE class="table">
			<TR>
				<TD class="col-md-4 titreTableauGestionUsers">Nom du rôle</TD>
				<TD class="col-md-4 titreTableauGestionUsers">Description</TD>
				<TD class="col-md-2 titreTableauGestionUsers">Ajouter / Supprimer</TD>
			</TR>
			<?php foreach($rolesList as $role): ?>
			<TR>
				<TD><?php echo $role->name ?></TD>
				<TD><?php echo $role->description ?></TD>
				<TD align="center">
					<?php if(stripos($userRoles[0]->rolesId, (string)$role->id) !== FALSE): ?>
						<button type="button" class="btn btn-primary boutonTableauGestionUsers" style="margin-top:10px;" onclick="deleteRole(<?php echo $authUser->id ?>, <?php echo $role->id ?>)">Enlever</button>
					<?php else: ?>
						<button type="button" class="btn btn-primary boutonTableauGestionUsers" style="margin-top:10px;" onclick="addRole(<?php echo $authUser->id ?>, <?php echo $role->id ?>)">Ajouter</button>
					<?php endif; ?>
				</TD>
			</TR>
			<?php endforeach; ?>
		</TABLE>
		<div align="center">
			<a href="/intranet/administration/gestionutilisateurs"><button type="button" class="btn btn-primary boutonTableauGestionUsers" style="margin-top:10px;">Retour</button></a>
		</div>
	</div>
</div>


<script type="text/javascript">
	function addRole(idUser, idRole) {
		var confirmation = confirm("Etes-vous sur de vouloir ajouter ce rôle ?");
		if(confirmation == true) {
			 $.ajax({
		       url : '/intranet/administration/gestionutilisateurs/'+idUser+'/ajouterroles',
		       type : 'POST',
		       dataType : 'html',
		       data: 'idRole='+idRole,
		       success : function(code_html, statut){ 
		       		console.log("Succes");
		       		location.reload();
		       },

		       error : function(resultat, statut, erreur){
		       		console.log("Echec");
		       }

		    });
		}
	}

	function deleteRole(idUser, idRole) {
		var confirmation = confirm("Etes-vous sur de vouloir supprimer ce rôle ?");
		if(confirmation == true) {
			 $.ajax({
		       url : '/intranet/administration/gestionutilisateurs/'+idUser+'/supprimerroles',
		       type : 'POST',
		       dataType : 'html',
		       data: 'idRole='+idRole,
		       success : function(code_html, statut){ 
		       		console.log("Succes");
		       		location.reload();
		       },

		       error : function(resultat, statut, erreur){
		       		console.log("Echec");
		       }

		    });
		}

	}
</script>
@endsection
