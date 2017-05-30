@extends('vendor.backpack.base.dashboard')

@section('content')
<div class="row">
  <div class="col-s-12" style="margin:0 auto; display:table; font-size:20px">
   
    <div class="col-md-12">
      <h2 style="text-decoration: underline; text-align:center">Nouvelle note de frais</h2>
    </div>

    <form form action="/intranet/ressourceshumaines/conges/nouveau" method="POST">
    <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />

    <div class="row container">
      <table class="table table-bordered">
          <TR>
            <TD class="col-md-3">Nom Prénom</TD>
            <TD  class="col-md-9"><?php echo $currentUser->name ?></TD>
          </TR>
          <TR>
            <TD class="col-md-3">Intitulé</TD>
            <TD class="col-md-9" colspan="4" class="form-group"><input type="text" class="form-control" id="titre" name="titre"></TD>
          </TR>
          <TR>
            <TD class="col-md-3">Description</TD>
            <TD class="col-md-9" colspan="4" class="form-group"><textarea class="form-control" id="description" name="description" rows="6"></textarea></TD>
          </TR>
          <TR>
            <TD class="col-md-3">Montant</TD>
            <TD class="col-md-9" colspan="4" class="form-group"><input type="text" class="form-control" id="montant" name="montant"></TD>
          </TR>
          <TR>
            <!-- A remplacer par un SELECT -->
            <TD class="col-md-3">Responsable</TD>
            <TD class="col-md-9" colspan="4" class="form-group"><input type="text" class="form-control" id="Responsable" name="Responsable"></TD>
          </TR>
      </table>
    </div>

    <div style="text-align:center; display:table; margin:0 auto">
      <button type="submit" class="btn btn-default">Valider note</button>
      <a href="/intranet/ressourceshumaines/notesfrais" class="btn btn-default" style="margin-left: 20px">Retour</a>
    </div>

    </form>

  </div>
</div>
@endsection
