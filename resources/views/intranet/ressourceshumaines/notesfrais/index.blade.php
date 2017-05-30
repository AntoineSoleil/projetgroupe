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
				<a href="/intranet/ressourceshumaines/notesfrais/nouveau" class="btn btn-primary boutonTableauGestionUsers">Nouvelle Note de frais</a>
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
				    			<a href="/intranet/ressourceshumaines/notesfrais/<?php echo $note->noteId ?>"><?php echo $note->titre ?></a>
				    		</td>
				    		<td>
				    			<?php 
								if($note->statutValidation == 1) 
								{
									echo "Note de frais validée<br>";
								}
								else if($note->statutValidation == 0)
								{
									echo "Note de frais refusée<br>";
								}
								else 
								{
									echo "En attente d'évaluation";
								}
							?>
				    		</td>
				    		<td>
								<?php if($note->statutValidation != 1 && $note->statutValidation != 0): ?>
									<a href="/intranet/ressourceshumaines/notesfrais/<?php echo $note->noteId ?>/modifier" class="btn btn-primary boutonTableauGestionUsers">Modifier</a>
									<button class="btn btn-primary boutonTableauGestionUsers deleteButton" onclick="deleteNotesFrais(<?php echo $note->noteId ?>)">Supprimer</button>
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
				    <?php foreach($notesAValider as $noteAValider): ?>
					<tr>
						<td>
							<?php echo $noteAValider->titre ?>
						</td>
						<td>
							<?php echo $noteAValider->createur ?>
						</td>
						<td>
							<?php if($noteAValider->statutValidation == 2): ?>
							<a href="/intranet/ressourceshumaines/notesfrais/<?php echo $noteAValider->noteId ?>/validation" class="btn btn-primary boutonTableauGestionUsers">Valider</a>
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

