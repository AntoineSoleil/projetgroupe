@extends('vendor.backpack.base.dashboard')

@section('header')
<div class="col-md-12 titreGestionUsers">
	Candidature de <?php echo $candidat->firstName . ' ' . $candidat->name ?>
</div>
@endsection

@section('content')
<div class="row">
	<div class="col-md-12">
		<div class="row">
			<div class="col-md-2">
				Nom : 
			</div>
			<div class="col-md-10">
				<?php echo $candidat->name ?>
			</div>
		</div>
		<div class="row">
			<div class="col-md-2">
				Prénom : 
			</div>
			<div class="col-md-10">
				<?php echo $candidat->firstName ?>
			</div>
		</div>
		<div class="row">
			<div class="col-md-2">
				Adresse email: 
			</div>
			<div class="col-md-10">
				<?php echo $candidat->mail ?>
			</div>
		</div>
		<div class="row">
			<div class="col-md-2">
				Téléphone: 
			</div>
			<div class="col-md-10">
				<?php echo $candidat->phone ?>
			</div>
		</div>
		<div class="row">
			<div class="col-md-2">
				Adresse: 
			</div>
			<div class="col-md-10">
				<?php echo $candidat->address?>
				<br>
				<?php echo $candidat->codePostal?>,<?php echo $candidat->city?>
			</div>
		</div>
	</div>
</div>
@endsection
