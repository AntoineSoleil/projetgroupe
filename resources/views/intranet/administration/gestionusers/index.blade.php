@extends('vendor.backpack.base.dashboard')

@section('header')
<div class="col-lg-12 titreGestionUsers">
	Gestion des utilisateurs
</div>
@endsection

@section('content')
<div class="col-lg-12">
	<div class="row">
		<TABLE class="table">
			<TR>
				<TD class="col-lg-4 titreTableauGestionUsers">Nom de l'utilisateur</TD>
				<TD class="col-lg-4 titreTableauGestionUsers">Adresse mail</TD>
				<TD class="col-lg-2 titreTableauGestionUsers">Rôle(s) associé(s)</TD>
				<TD class="col-lg-2 titreTableauGestionUsers"></TD>
			</TR>
		<?php foreach($usersList as $user): ?>
			<TR>
				<TD><?php echo $user->name ?></TD>
				<TD><?php echo $user->email ?></TD>
				<TD><?php echo $user->roles ?></TD>
				<TD><a href="/intranet/administration/gestionutilisateurs/<?php echo $user->userId ?>/modifierroles"><button type="button" class="btn btn-primary boutonTableauGestionUsers">Ajouter ou supprimer un rôle</button></a></TD>
			</TR>
		<?php endforeach; ?>
		</TABLE>
	</div>
</div>
@endsection
