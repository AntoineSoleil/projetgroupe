@extends('vendor.backpack.base.dashboard')

@section('content')
<section class="content-header">
	<h1>
		Documents de travail
		<small>Ajouter, rechercher, télécharger et supprimer des documents de travail</small>
	</h1>
</section>

<section class="content">
	<div class="row">
		<button type="button" class="btn bg-purple btn-flat margin" data-toggle="modal" data-target="#myModal">Ajouter un document</button>
	</div>

	<div class="row">
	</br>
		<div class="col-md-3">
			<h5>Rechercher un document</h5>
		</div>
		<div class="col-md-4">
			<div class="input-group">
				<span class="input-group-addon"><i class="fa fa-search "></i></span>
				<input type="text" class="form-control" placeholder="Votre recherche">
			</div>
		</div>
	</div>

	<div class="row">
		</br>
		<h4 class="margin">Liste des documents de travail</h4>
		<ul class="thumbnails">

	@foreach($entries as $entry)

			<div class="col-md-2 name-list" id="{{$entry->name}}">
					<div class="thumbnail" >

							@if ($entry->mime === "pdf")
								<img src="{{ asset('img/PDF.png') }}" style="height: 120px;" alt="Document PDF" class="img-responsive" />
							@elseif ($entry->mime === "doc" OR $entry->mime === "docx" OR $entry->mime === "odt" )
								<img src="{{ asset('img/WORD.png') }}" style="height: 120px;" alt="Document Word" class="img-responsive" />
							@elseif ($entry->mime === "xls" OR $entry->mime === "xlsx" OR $entry->mime === "csv" OR $entry->mime === "ods" )
								<img src="{{ asset('img/EXCEL.png') }}" style="height: 120px;" alt="Document Excel" class="img-responsive" />
							@else
								<img src="{{route('getDocuments', $entry->filename)}}" style="height: 120px;" alt="Image" class="img-responsive" />
							@endif

							<div class="caption">
									<p class=" text-muted name-search">{{$entry->name}}</p>
									<a href="{{route('getDocuments', $entry->filename)}}" target="_blank" class="btn btn-flat btn-success " data-toggle="tooltip" data-placement="top" data-original-title="{{$entry->description}}"><i class="fa fa-save"></i></a>
									<a class="btn btn-flat btn-danger sweet-{{$entry->id}}" onclick="Delete({{$entry->id}});"><i class="fa fa-trash-o"></i></a>
							</div>
					</div>
			</div>

	@endforeach

		</ul>
	</div>
</section>
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Ajouter un document</h4>
      </div>
			<form action="{{route('addDocuments', [])}}" method="post" enctype="multipart/form-data">
				 {{ csrf_field() }}
	      <div class="modal-body">
					<div class="form-group">
						<label for="name">Nom du Document</label>
						<input type="name" class="form-control" id="name" name="name" placeholder="Entrer nom" required>
					</div>
					<div class="form-group">
						<label for="description">Description</label>
						<input type="description" class="form-control" name="description" id="description" placeholder="Entrer description" required>
					</div>
					<div class="form-group">
						<label for="file">Uploider votre fichier</label>
						<input type="file" name="file" id="file">
						<!-- <p class="help-block red">Example block-level help text here.</p> -->
					</div>
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
	        <button type="submit" class="btn btn-primary">Sauvegarder</button>
	      </div>
			</form>
    </div>
  </div>
</div>
@endsection

@section('after_scripts')

<script type="text/javascript">
	$(function(){
    $('input[type="text"]').keyup(function(){
        var searchText = $(this).val();
        $('.name-list').each(function(){
            var currentLiText = $(this).attr('id'),
                showCurrentLi = currentLiText.indexOf(searchText) !== -1;
            $(this).toggle(showCurrentLi);
        });
    });
	});
</script>

<script type="text/javascript">
	function Delete(idRow) {
		document.querySelector('.sweet-'+idRow+'').onclick = function () {
			swal({
				title:"Confirmer la suppression !",
				text: "Êtes-vous sûr de vouloir supprimer cet document ?",
				type: "error",
				showCancelButton: true,
				closeOnConfirm: false,
				showLoaderOnConfirm: true
			}, function () {
				$.ajax({
					url: "/intranet/boiteoutils/documents/delete/"+idRow,
					type: "DELETE",
					dataType: "JSON",
					success: function(data) {
						swal("Supprimé!","Le document a été supprimé","success");
						setTimeout(function() {
						   location.reload();
						}, 500);
					}
				})
			});
		};
	}
</script>

@endsection
