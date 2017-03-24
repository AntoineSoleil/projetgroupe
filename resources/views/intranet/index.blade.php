@extends('vendor.backpack.base.dashboard')

@section('content')
<div class="row">
	<div class="col-s-12" style="margin:0 auto; display:table; text-align:center">
		<div class="row container">
		  <div class="col-md-4">
		   <a href="{{ route('intranetActualitesIndex') }}">
		    <div class="thumbnail">
		      <img src="..." alt="...">
		      <div class="caption">
		        <h3>Actualités</h3>
		      </div>
		    </div>
		   </a>
		  </div>
		  <div class="col-md-4">
		   <a href="{{ route('ressourceshumainesIndex') }}">
		    <div class="thumbnail">
		      <img src="..." alt="...">
		      <div class="caption">
		        <h3>Ressources humaines</h3>
		      </div>
		    </div>
		   </a>
		  </div>
		  <div class="col-md-4">
		   <a href="{{ route('boiteoutilsIndex') }}">
		    <div class="thumbnail">
		      <img src="..." alt="...">
		      <div class="caption">
		        <h3>Boite à outils</h3>
		      </div>
		    </div>
		   </a>
		  </div>
		</div>
		<div class="row container">
		  <div class="col-md-4">
		   <a href="{{ route('parametrageIndex') }}">
		    <div class="thumbnail">
		      <img src="..." alt="...">
		      <div class="caption">
		        <h3>Paramétrage</h3>
		      </div>
		    </div>
		   </a>
		  </div>
		  <div class="col-md-4">
		   <a href="{{ route('administrationIndex') }}">
		    <div class="thumbnail">
		      <img src="..." alt="...">
		      <div class="caption">
		        <h3>Administration</h3>
		      </div>
		    </div>
		   </a>
		  </div>
		</div>
	</div>
</div>
@endsection
