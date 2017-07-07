@extends('vendor.backpack.base.dashboard')

@section('content')
<section class="content-header">
	<h1>
		Actualités
		<small>Publier, consulter et commenter des actualités</small>
	</h1>
</section>


<section class="content">
	<div class="row">
		<button type="button" class="btn bg-purple btn-flat margin" data-toggle="modal" data-target="#myModal">Publier une actualité</button>
	</div>

	<div class="row">
	</br> </br>
		@foreach($entries as $entry)
		<div class="box box-success">
			<div class="box-header">
				<i class="fa fa-newspaper-o "></i>
				<h3 class="box-title">{{ $entry["subject"] }}</h3>
			</div>
			<div class="box-body chat" id="chat-box">
				<div class="item">
					<img src="http://placehold.it/160x160/00a65a/ffffff/&text={{ $entry["user"]["name"] }}" alt="user image" class="online">

					<p class="message">
						<a href="#" class="name">
							<small class="text-muted pull-right"><i class="fa fa-clock-o"></i> {{ Carbon\Carbon::parse($entry["updated_at"])->diffForHumans() }}</small>
							{{$entry["user"]["name"]}}
						</a>
						{{ $entry["content"] }}
					</p>
				</div>

				@foreach($entry["commentaire"] as $coment)
				<div class="item" style="margin-left: 5%;">
					<img src="http://placehold.it/160x160/00a65a/ffffff/&text={{ Auth::user()->name[0] }}" alt="user image" class="offline">

					<p class="message">
						<a href="#" class="name">
							<small class="text-muted pull-right"><i class="fa fa-clock-o"></i> {{ Carbon\Carbon::parse($coment["updated_at"])->diffForHumans() }}</small>
							{{$coment["user"]["name"]}}
						</a>
						{{ $coment["content"] }}
						@if ($coment["users_id"] === Auth::user()->id)
						<a class="btn btn-flat btn-danger btn-xs pull-right sweetComent-{{ $coment["id"] }}" onclick="DeleteComent({{ $coment["id"] }});"><i class="fa fa-trash-o"></i></a>
						@endif
					</p>
				</div>
				@endforeach

			</div>

			<div class="box-footer">
				<form action="{{route('coment', [])}}" method="post" >
					{{ csrf_field() }}
					<div class="input-group">
						<input class="form-control" name="content" id="content" placeholder="Commentez cette actualité">
						<div class="input-group-btn">
							<button type="submit" class="btn btn-success"><i class="fa fa-plus"></i></button>
						</div>
					</div>
					<input type="hidden" name="actualites_id" value="{{ $entry["id"] }}">
				</form>

				@if ($entry["users_id"] === Auth::user()->id)
				<a class="btn btn-flat btn-danger margin pull-right sweet-{{ $entry["id"] }}" onclick="Delete({{ $entry["id"] }});"><i class="fa fa-trash-o"></i></a>
				<a class="btn btn-flat btn-primary margin pull-right " ><i class="fa fa-edit"></i></a>
				@endif

			</div>

		</div>
		@endforeach
	</div>
</section>

<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Publier une actualité</h4>
      </div>
			<form action="{{route('intranetActualitesCreate', [])}}" method="post" >
				 {{ csrf_field() }}
	      <div class="modal-body">
					<div class="form-group">
						<label for="subject">Titre</label>
						<input type="text" class="form-control" id="subject" name="subject" placeholder="Sujet">
					</div>
					<div class="form-group">
						<label for="content">Actualité</label>
						<textarea class="form-control" rows="3" name="content" id="content" placeholder="Contenu"></textarea>
					</div>
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
	        <button type="submit" class="btn btn-primary">Publier</button>
	      </div>
			</form>
    </div>
  </div>
</div>

@endsection

@section('after_scripts')

<script type="text/javascript">
	function Delete(idRow) {
		document.querySelector('.sweet-'+idRow+'').onclick = function () {
			swal({
				title:"Confirmer la suppression !",
				text: "Êtes-vous sûr de vouloir supprimer cette actualité ?",
				type: "error",
				showCancelButton: true,
				closeOnConfirm: false,
				showLoaderOnConfirm: true
			}, function () {
				$.ajax({
					url: "/Intranet/Actualites/delete/"+idRow,
					type: "DELETE",
					dataType: "JSON",
					success: function(data) {
						swal("Supprimé!","L'actualité a été supprimée","success");
						setTimeout(function() {
						   location.reload();
						}, 500);
					}
				})
			});
		};
	}
</script>

<script type="text/javascript">
	function DeleteComent(idRow) {
		document.querySelector('.sweetComent-'+idRow+'').onclick = function () {
			swal({
				title:"Confirmer la suppression !",
				text: "Êtes-vous sûr de vouloir supprimer ce commentaire ?",
				type: "error",
				showCancelButton: true,
				closeOnConfirm: false,
				showLoaderOnConfirm: true
			}, function () {
				$.ajax({
					url: "/Intranet/Actualites/commentairedelete/"+idRow,
					type: "DELETE",
					dataType: "JSON",
					success: function(data) {
						swal("Supprimé!","Le commentaire a été supprimé","success");
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
