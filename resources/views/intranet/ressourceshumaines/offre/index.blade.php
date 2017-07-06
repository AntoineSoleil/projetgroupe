@extends('vendor.backpack.base.dashboard')

@section('header')
<div class="col-md-12 titreGestionUsers">
	Offres d'alternance
</div>
@endsection

@section('content')
<div class="row">
	<div class="col-md-12">
		<div class="titreConges">
			<div style="float: right">
				<a href="/intranet/ressourceshumaines/offres/nouveau" class="btn btn-primary boutonTableauGestionUsers">Nouvelle offre</a>
			</div>
		</div>

		<div class="row">
			<div class="col-md-12">
				<table class="table">
				  <thead>
				    <tr>
				      <th class="col-md-4">Offres d'alternance</th>
				      <th class="col-md-3">Société</th>
				      <th class="col-md-2">Statut</th>
				      <th class="col-md-3">Options</th>
				    </tr>
				  </thead>
				  <tbody>
				  	<?php foreach($listeOffres as $offre): ?>
					<tr>
						<td>
							<a href="/intranet/ressourceshumaines/offres/<?php echo $offre->offreId ?>"><?php echo $offre->intitule ?></a>
						</td>
						<td>
							<?php echo $offre->societe ?>
						</td>
						<td>
							<?php 
								if($offre->status == 1) 
								{
									echo "Offre pourvue";
								} 
								else
								{
									echo "Offre disponible";
								}
							?>
						</td>
						<td>
							<?php if($offre->status == 1) : ?>
								<button class="btn btn-primary boutonTableauGestionUsers deleteButton" onclick="deleteOffre(<?php echo $offre->offreId ?>)">Supprimer</button>
							<?php else : ?>
								<button class="btn btn-primary boutonTableauGestionUsers deleteButton" onclick="deleteOffre(<?php echo $offre->offreId ?>)">Supprimer</button>
								<button class="btn btn-primary boutonTableauGestionUsers deleteButton" onclick="attribuerOffre(<?php echo $offre->offreId ?>)">Attribuer</button>
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
	function deleteOffre(idOffre) {
		var confirmation = confirm("Etes-vous sur de vouloir supprimer cette Offre ?");
		if(confirmation == true) {
			 $.ajax({
		       url : '/intranet/ressourceshumaines/offres/'+idOffre,
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

	function attribuerOffre(idOffre) {
		var confirmation = confirm("Avez-vous trouvé un alternant pour cette offre ?");
		if(confirmation == true) {
			 $.ajax({
		       url : '/intranet/ressourceshumaines/offres/'+idOffre+'/attribuer',
		       type : 'POST',
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