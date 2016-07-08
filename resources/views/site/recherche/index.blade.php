@extends('layouts.app')

@section('content')
<div class="row">
	<div class="col s12">
		<h2 class="center-align">Recherche</h2>
	</div>

	<form class="col s12">
      <div class="row">
        <div class="input-field col s10">
          <i class="material-icons prefix">search</i>
          <input id="icon_prefix" type="text" class="validate">
          <label for="icon_prefix">Votre recherche</label>
        </div>
        <button class="btn waves-effect waves-light" type="submit" name="action" style="margin-top: 1.60em;">
        	Submit
		  <i class="material-icons right">send</i>
		</button>
      </div>
    </form>

    <div class="col s12">
    	<h5>Résulats de la recherche</h5>
    	<p>Bla bla bla ...</p>
    </div>
</div>
@endsection