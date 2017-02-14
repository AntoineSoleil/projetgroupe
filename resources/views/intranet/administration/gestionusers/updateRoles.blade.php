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
					<a href="#"><button id="btn-<?php echo $role->id ?>-del" type="button" class="btn btn-primary">Supprimer</button></a>
					<a href="#"><button id="btn-<?php echo $role->id ?>-add" type="button" class="btn btn-primary">Ajouter</button></a>
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
