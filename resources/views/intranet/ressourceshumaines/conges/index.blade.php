@extends('vendor.backpack.base.dashboard')

@section('header')
<div class="col-md-12 titreGestionUsers">
	Congés
</div>
@endsection

@section('content')
<div class="row">
	<div class="col-md-6">
		<div class="titreConges">
			Mes congés
			<div style="float: right">
				<a href="/intranet/ressourceshumaines/conges/nouveau" class="btn btn-primary boutonTableauGestionUsers">Nouvelle demande</a>
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
							<a href="/intranet/ressourceshumaines/conges/<?php echo $myConges->congesId ?>">Congès du <?php echo $myConges->debutConges ?> au <?php echo $myConges->finConges ?></a>
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
								<a href="/intranet/ressourceshumaines/conges/<?php echo $myConges->congesId ?>/modifier" class="btn btn-primary boutonTableauGestionUsers">Modifier</a>
								<button class="btn btn-primary boutonTableauGestionUsers deleteButton" onclick="deleteConges(<?php echo $myConges->congesId ?>)">Supprimer</button>
							<?php endif; ?>
						</td>
					</tr>
					<?php endforeach; ?>
				  </tbody>
				</table>
			</div>
		</div>
	</div>


	<?php if($canValidate == true): ?>
		<div class="col-md-6">
			<div class="titreConges">
				Demandes à valider
			</div>
			<div class="row">
				<div class="col-md-12">
					<table class="table">
					  <thead>
					    <tr>
					      <th class="col-md-4">Demandes</th>
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
								<a href="/intranet/ressourceshumaines/conges/<?php echo $waitingValidationConges->congesId ?>/validation" class="btn btn-primary boutonTableauGestionUsers">Valider</a>
							<?php endif; ?>

							</td>
						</tr>
						<?php endforeach; ?>
					  </tbody>
					</table>
				</div>
			</div>
		</div>

	<?php endif; ?>

</div>
@endsection

<script type="text/javascript">
	function deleteConges(idConges) {
		var confirmation = confirm("Etes-vous sur de vouloir supprimer cette demande de congés ?");
		if(confirmation == true) {
			 $.ajax({
		       url : '/intranet/ressourceshumaines/conges/'+idConges,
		       type : 'DELETE',
		       dataType : 'html',
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
