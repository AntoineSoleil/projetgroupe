@extends('vendor.backpack.base.dashboard')

@section('header')
<div class="col-md-12 titreGestionUsers">
	Gestion des rôles
</div>
@endsection

@section('content')
<div class="row">
	<div class="col-md-12">
		<TABLE class="table">
			<TR>
				<TD class="col-lg-4 titreTableauGestionUsers">Nom</TD>
				<TD class="col-lg-4 titreTableauGestionUsers">Description</TD>
				<TD class="col-lg-2 titreTableauGestionUsers"><a href="#"><button type="button" class="btn btn-primary boutonTableauGestionUsers">Ajouter un Rôle</button></a></TD>
			</TR>
		<?php foreach($rolesList as $role): ?>
			<TR>
				<TD><?php echo $role->name ?></TD>
				<TD><?php echo $role->description ?></TD>
				<TD><a href="/intranet/administration/gestionroles/<?php echo $role->id ?>/modifierressources"><button type="button" class="btn btn-primary boutonTableauGestionUsers">Ajouter ou supprimer une ressource</button></a></TD>
			</TR>
		<?php endforeach; ?>
		</TABLE>
	</div>
</div>
@endsection
