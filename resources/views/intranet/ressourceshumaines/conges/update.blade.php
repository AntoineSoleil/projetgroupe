@extends('vendor.backpack.base.dashboard')

@section('content')
<div class="row">
  <div class="col-s-12" style="margin:0 auto; display:table; font-size:20px">
    <div class="row container">
      <table class="table table-bordered">
          <TR>
            <TD class="col-md-3">Nom Prénom</TD>
            <TD  class="col-md-9"><?php echo $conges[0]->userName ?></TD>
          </TR>
          <TR>
            <TD class="col-md-3">Fonction</TD>
            <TD  class="col-md-9"></TD>
          </TR>
          <TR>
            <TD class="col-md-3">Lieu d'intervention</TD>
            <TD  class="col-md-9"></TD>
          </TR>
          <TR>
            <TD class="col-md-3">Responsable hiérarchique</TD>
            <TD  class="col-md-9"></TD>
          </TR>
      </table>
    </div>

    <div class="col-md-12">
      <h2 style="text-decoration: underline; text-align:center">Demande</h2>
    </div>

    <form form action="/intranet/ressourceshumaines/conges/<?php echo $conges[0]->congesId ?>/modifier" method="POST">
    <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />

      <div class="row container">
        <table class="table table-bordered">
            <TR>
              <TD class="col-md-4">Date de congés ou absence</TD>
              <TD  class="col-md-1">Du</TD>
              <TD  class="col-md-3" class="form-group"><input type="text" class="form-control" id="debutConges" name="debutConges" placeholder="JJ/MM/AAAA" value="<?php echo $conges[0]->debutConges ?>"></TD>
              <TD  class="col-md-1">Au</TD>
              <TD  class="col-md-3" class="form-group"><input type="text" class="form-control" id="finConges" name="finConges" placeholder="JJ/MM/AAAA" value="<?php echo $conges[0]->finConges ?>"></TD>
            </TR>
            <TR>
              <TD class="col-md-3">Nombre de jours</TD>
              <TD class="col-md-9" colspan="4" class="form-group"></TD>
            </TR>
            <TR>
              <TD class="col-md-3">Type de congés</TD>
              <TD class="col-md-9" colspan="4" class="form-group"><input type="text" class="form-control" id="typeConges" name="TypeConges" placeholder="Type de congés" value="<?php echo $conges[0]->type ?>"></TD>
            </TR>
        </table>
      </div>

      <div class="row container">
        <div class="col-md-3" style="padding-top: 40px">
          <label for="lieuCreation">Fait à</label>
        </div>
        <div class="col-md-9" class="form-group" style="padding-top: 40px">
          <input type="text" class="form-control" id="lieuCreation" name="LieuCreation" placeholder="Fait à" value="<?php echo $conges[0]->lieuCreation ?>">
        </div>
        <div class="col-md-3" style="padding-top: 10px">
          <label for="dateCreation">Le</label>
        </div>
        <div class="col-md-9" class="form-group"  style="padding-top: 10px">
          <input type="text" class="form-control" id="dateCreation" name="dateCreation" placeholder="JJ-MM-AAAA">
        </div>
        <div class="col-md-3" style="padding-top: 10px; padding-bottom:100px">
          <label for="signatureDemandeur">Signature</label>
        </div>
        <div class="col-md-9" class="form-group"  style="padding-top: 10px; padding-bottom:100px">

        </div>
      </div>

      <div style="text-align:center; display:table; margin:0 auto">
        <button type="submit" class="btn btn-default">Valider demande</button>
        <a href="/intranet/ressourceshumaines/conges" class="btn btn-default" style="margin-left: 20px">Retour</a>
      </div>

    </form>
    
  </div>
</div>
@endsection
