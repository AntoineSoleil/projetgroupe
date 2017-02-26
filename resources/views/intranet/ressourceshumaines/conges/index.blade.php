@extends('vendor.backpack.base.dashboard')

@section('header')
<div class="col-md-12 titreGestionUsers">
	Congès
</div>
@endsection

@section('content')
<div class="row">
	<div class="col-md-6">
		<div class="col-md-12 titreConges">
			Mes congès
			<div style="float: right">
				<a href="/intranet/ressourceshumaines/conges/nouveau"><button type="button" class="btn btn-primary boutonTableauGestionUsers">Nouvelle demande</button></a>
			</div>
		</div>
	</div>
	<div class="col-md-6">
		<div class="col-md-12 titreConges">
			Demandes à valider
		</div>
	</div>
</div>
@endsection
