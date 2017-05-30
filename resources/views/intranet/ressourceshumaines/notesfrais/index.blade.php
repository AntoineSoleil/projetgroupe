@extends('vendor.backpack.base.dashboard')

@section('header')
<div class="col-md-12 titreGestionUsers">
	Notes de frais
</div>
@endsection

@section('content')
<div class="row">
	<div class="col-md-6">
		<div class="titreConges">
			Mes notes de frais
			<div style="float: right">
				<a href="/intranet/ressourceshumaines/notesfrais/nouveau" class="btn btn-primary boutonTableauGestionUsers">Nouveau CRA</a>
			</div>
		</div>

		<div class="row">
			<div class="col-md-12">
				<table class="table">
				  <thead>
				    <tr>
				      <th class="col-md-4">Mes notes</th>
				      <th class="col-md-4">Statut</th>
				      <th class="col-md-4">Options</th>
				    </tr>
				  </thead>
				  <tbody>
				    <?php foreach($myNotesList as $note): ?>
				    	<tr>
				    		<td>
				    			<a href="/intranet/ressourceshumaines/notesfrais/<?php echo $cra->craId ?>"><?php echo $cra->nomClient . " - " . $cra->nomProjet ?></a>
				    		</td>
				    		<td>
				    			<?php 
								if($cra->statutEvaluation == 1) 
								{
									echo "Compte rendu évalué<br>";
									if($cra->statutValidation == 1)
									{
										echo "Compte rendu validé";
									}
									else if($cra->statutValidation == 0)
									{
										echo "Compte rendu refusé";
									}
									else
									{
										echo "En attente de validation";
									}
								}
								else 
								{
									echo "En attente d'évaluation";
								}
							?>
				    		</td>
				    		<td>
								<?php if($cra->statutEvaluation != 1): ?>
									<a href="/intranet/ressourceshumaines/notesfrais/<?php echo $cra->craId ?>/modifier" class="btn btn-primary boutonTableauGestionUsers">Modifier</a>
									<button class="btn btn-primary boutonTableauGestionUsers deleteButton" onclick="deleteCra(<?php echo $cra->craId ?>)">Supprimer</button>
								<?php endif; ?>
							</td>
				    	</tr>
				    <?php endforeach; ?>
				  </tbody>
				</table>
			</div>
		</div>
	</div>


	<?php //if($canValidate == true): ?>
		<div class="col-md-6">
			<div class="titreConges">
				Notes de frais à valider
			</div>
			<div class="row">
				<div class="col-md-12">
					<table class="table">
					  <thead>
					    <tr>
					      <th class="col-md-4">Notes en attente</th>
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


<script type="text/javascript">
	function deleteNotesFrais(idNote) {
		var confirmation = confirm("Etes-vous sur de vouloir supprimer ce compte-rendu?");
		if(confirmation == true) {
			 $.ajax({
		       url : '/intranet/ressourceshumaines/notesfrais/'+idNote,
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

