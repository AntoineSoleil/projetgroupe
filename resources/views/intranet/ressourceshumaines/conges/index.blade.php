@extends('vendor.backpack.base.dashboard')

@section('header')
<div class="col-md-12 titreGestionUsers">
	Congès
</div>
@endsection

@section('content')
<div class="row">
	<div class="col-md-6">
		<div class="titreConges">
			Mes congés
			<div style="float: right">
				<a href="/intranet/ressourceshumaines/conges/nouveau"><button type="button" class="btn btn-primary boutonTableauGestionUsers">Nouvelle demande</button></a>
			</div>
		</div>

		<div class="row">
			<div class="col-md-12">
				<table class="table">
				  <thead>
				    <tr>
				      <th class="col-md-4">Mes demandes</th>
				      <th class="col-md-4">Statut</th>
				      <th class="col-md-4">Options</th>
				    </tr>
				  </thead>
				  <tbody>
				    <?php foreach($myCongesList as $myConges): ?>
					<tr>
						<td>
							Congès du <?php echo $myConges->debutConges ?> au <?php echo $myConges->finConges ?>
						</td>
						<td>
							<?php 
								if($myConges->status == 1) 
								{
									echo "Congés accepté";
								} 
								else if ($myConges->status == 0) 
								{
									echo "Congés refusé";
								} 
								else 
								{
									echo "En attente de validation";
								}
							?>
						</td>
						<td>
							<?php if($myConges->status == 2): ?>
							<a href="#"><button type="button" class="btn btn-primary boutonTableauGestionUsers">Modifier</button></a>
							<a href="#""><button type="button" class="btn btn-primary boutonTableauGestionUsers">Supprimer</button></a>
						<?php endif; ?>

						</td>
					</tr>
					<?php endforeach; ?>
				  </tbody>
				</table>
			</div>
		</div>
	</div>


	<div class="col-md-6">
		<div class="titreConges">
			Demandes à valider
		</div>
		<div class="row">
			<div class="col-md-12">
				<table class="table">
				  <thead>
				    <tr>
				      <th class="col-md-4">Mes demandes</th>
				      <th class="col-md-4">Demandeur</th>
				      <th class="col-md-4">Options</th>
				    </tr>
				  </thead>
				  <tbody>
				    <?php foreach($waitingValidationCongesList as $waitingValidationConges): ?>
					<tr>
						<td>
							Congès du <?php echo $waitingValidationConges->debutConges ?> au <?php echo $waitingValidationConges->finConges ?>
						</td>
						<td>
							<?php echo $waitingValidationConges->userName ?>
						</td>
						<td>
							<?php if($waitingValidationConges->status == 2): ?>
							<a href="#"><button type="button" class="btn btn-primary boutonTableauGestionUsers">Valider</button></a>
						<?php endif; ?>

						</td>
					</tr>
					<?php endforeach; ?>
				  </tbody>
				</table>
			</div>
		</div>
	</div>
</div>
@endsection
