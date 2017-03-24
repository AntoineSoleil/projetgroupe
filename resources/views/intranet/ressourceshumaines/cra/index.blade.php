@extends('vendor.backpack.base.dashboard')

@section('header')
<div class="col-md-12 titreGestionUsers">
	Compte-rendu d'acitivté
</div>
@endsection

@section('content')
<div class="row">
	<div class="col-md-6">
		<div class="titreConges">
			Mes congés
			<div style="float: right">
				<a href="/intranet/ressourceshumaines/cra/nouveau" class="btn btn-primary boutonTableauGestionUsers">Nouveau CRA</a>
			</div>
		</div>

		<div class="row">
			<div class="col-md-12">
				<table class="table">
				  <thead>
				    <tr>
				      <th class="col-md-4">Mes CRAs</th>
				      <th class="col-md-4">Statut</th>
				      <th class="col-md-4">Options</th>
				    </tr>
				  </thead>
				  <tbody>
				    
				  </tbody>
				</table>
			</div>
		</div>
	</div>


	<?php //if($canValidate == true): ?>
		<div class="col-md-6">
			<div class="titreConges">
				Demandes à valider
			</div>
			<div class="row">
				<div class="col-md-12">
					<table class="table">
					  <thead>
					    <tr>
					      <th class="col-md-4">CRAs en attente</th>
					      <th class="col-md-4">Emetteur</th>
					      <th class="col-md-4">Options</th>
					    </tr>
					  </thead>
					  <tbody>
						<tr>
							
						</tr>
					  </tbody>
					</table>
				</div>
			</div>
		</div>

	<?php //endif; ?>

</div>
@endsection

