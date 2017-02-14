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
				<TD class="col-md-4 titreTableauGestionUsers">Nom de la ressource</TD>
				<TD class="col-md-4 titreTableauGestionUsers">Description</TD>
				<TD class="col-md-2 titreTableauGestionUsers">Ajouter / Supprimer</TD>
			</TR>
			<?php foreach($rolesList as $role): ?>
			<TR>
				<TD><?php echo $role->name ?></TD>
				<TD><?php echo $role->description ?></TD>
				<TD align="center">
					<TD><a href="/intranet/administration/gestionutilisateurs/<?php echo $user->userId ?>/modifierroles"><button type="button" class="btn btn-primary boutonTableauGestionUsers">Ajouter ou supprimer un rôle</button></a></TD>
				</TD>
			</TR>
			<?php endforeach; ?>
		</TABLE>
	</div>
</div>


<script>
$( document ).ready(function() {
    
});
</script>
@endsection
