@extends('vendor.backpack.base.dashboard')

@section('header')
<div class="col-md-12 titreGestionUsers">
	Modification des ressources de <?php echo $role[0]->name;?>
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
			<?php foreach($ressourcesList as $ressource): ?>
			<TR>
				<TD><?php echo $ressource->name ?></TD>
				<TD><?php echo $ressource->description ?></TD>
				<TD align="center">
					<?php if(stripos($ressource->role, strval($role[0]->id)) !== FALSE): ?>
						<button type="button" class="btn btn-primary boutonTableauGestionUsers" style="margin-top:10px;">Enlever</button>
					<?php else: ?>
						<button type="button" class="btn btn-primary boutonTableauGestionUsers" style="margin-top:10px;">Ajouter</button>
					<?php endif; ?>
				</TD>
			</TR>
			<?php endforeach; ?>
		</TABLE>
		<div align="center">
			<a href="/intranet/administration/gestionroles"><button type="button" class="btn btn-primary boutonTableauGestionUsers" style="margin-top:10px;">Retour</button></a>
		</div>
	</div>
</div>
@endsection
