@extends('vendor.backpack.base.dashboard')

@section('header')
<div class="col-md-12 titreGestionUsers">
	Nouvelles candidatures
</div>
@endsection

@section('content')
<div class="row">
	<div class="col-md-12">
		<table class="table">
		  <thead>
		    <tr>
		      <th class="col-md-4">Candidat</th>
		      <th class="col-md-4">Type de candidature</th>
		      <th class="col-md-4">Offre</th>
		      <th class="col-md-4">Options</th>
		    </tr>
		  </thead>
		  <tbody>
		    <?php foreach($candidaturesList as $candidature): ?>
			<tr>
				<td>
					<a href="/intranet/ressourceshumaines/candidatures/<?php echo $candidature->candidatureId ?>"><?php echo $candidature->candidatName . ' ' . $candidature->candidatFirstName ?> </a>
				</td>
				<td>
					<?php if($candidature->candidatureType == 1): ?>
						Candidature spontanée
					<?php elseif($candidature->candidatureType == 2): ?>
						Candidature suite à une offre
					<?php endif; ?>
				</td>
				<td>
					<?php echo $candidature->offrePostule ?> 
				</td>
				<td>

				</td>
			</tr>
			<?php endforeach; ?>
		  </tbody>
		</table>
	</div>
</div>
@endsection
