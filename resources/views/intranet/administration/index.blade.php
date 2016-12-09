@extends('layouts.intranet')

@section('content')
<div class="row">
	<div class="col-s-12" style="margin:0 auto; display:table; text-align:center">
		<div class="row container">
		  <div class="col-md-4">
		   <a href="{{ route('administrationGestionIndex') }}">
		    <div class="thumbnail">
		      <img src="..." alt="...">
		      <div class="caption">
		        <h3>Gestion des utilisateurs</h3>
		      </div>
		    </div>
		   </a>
		  </div>
		  <div class="col-md-4">
		   <a href="{{ route('administrationApplicationIndex') }}">
		    <div class="thumbnail">
		      <img src="..." alt="...">
		      <div class="caption">
		        <h3>Applications</h3>
		      </div>
		    </div>
		   </a>
		  </div>
		</div>
	</div>
</div>
@endsection