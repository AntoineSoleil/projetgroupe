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
				      <th class="col-md-4">Société</th>
				      <th class="col-md-4">Statut</th>
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
					</tr>
					<?php endforeach; ?>
				    
				  </tbody>
				</table>
			</div>
		</div>
	</div>

</div>
@endsection

