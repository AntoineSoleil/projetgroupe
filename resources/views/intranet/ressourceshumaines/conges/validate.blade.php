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

    <div class="row container">
      <table class="table table-bordered">
          <TR>
            <TD class="col-md-4">Date de congés ou absence</TD>
            <TD  class="col-md-1">Du</TD>
            <TD  class="col-md-3"><?php echo $conges[0]->debutConges ?></TD>
            <TD  class="col-md-1">Au</TD>
            <TD  class="col-md-3"><?php echo $conges[0]->finConges ?></TD>
          </TR>
          <TR>
            <TD class="col-md-3">Nombre de jours</TD>
            <TD class="col-md-9" colspan="4"></TD>
          </TR>
          <TR>
            <TD class="col-md-3">Type de congés</TD>
            <TD class="col-md-9" colspan="4"><?php echo $conges[0]->type ?></TD>
          </TR>
      </table>
    </div>

    <div class="row container">
      <table>
          <TR>
            <TD class="col-md-3" style="padding-top: 40px">Fait à</TD>
            <TD class="col-md-9"><?php echo $conges[0]->lieuCreation ?></TD>
          </TR>
          <TR>
            <TD class="col-md-3" style="padding-top: 10px">Le</TD>
            <TD class="col-md-9"><?php echo $conges[0]->dateRedaction ?></TD>
          </TR>
          <TR>
            <TD class="col-md-3" style="padding-top: 10px">Signature</TD>
            <TD class="col-md-9"><?php echo $conges[0]->signature ?></TD>
          </TR>
      </table>
    </div>

    <div class="col-md-12">
      <h2 style="text-decoration: underline; text-align:center">Réponse</h2>
    </div>

    <form form action="/intranet/ressourceshumaines/conges/<?php echo $conges[0]->congesId ?>/validation" method="POST">
    <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />

        <div class="row container">
          <table class="table table-bordered">
            <TR style="text-align:center">
              <TD class="col-md-6">
                <label class="radio-inline">
                  <input type="radio" name="validation" id="validation1" value="1"> Accordé
                </label>
              </TD>
                <TD class="col-md-6">
                  <label class="radio-inline">
                    <input type="radio" name="validation" id="validation2" value="0"> Refusé
                  </label>
                </TD>
            </TR>
              <TR>
                <TD class="col-md-3" style="height:100px;">Signature du responsable hiérarchique</TD>
                <TD class="col-md-9" class="form-group"><input type="text" class="form-control" id="signatureResponsable" name="signatureResponsable" placeholder="Nom Prenom"></TD>
              </TR>
              <TR>
                <TD class="col-md-3" style="height:100px;">Signature de dirigeant</TD>
                <TD class="col-md-9" class="form-group"><input type="text" class="form-control" id="signatureDirigeant" name="signatureDirigeant" placeholder="Nom Prenom"></TD>
              </TR>
              <TR>
                <TD class="col-md-3">Commentaire en cas de refus</TD>
                <TD class="col-md-9" class="form-group"><textarea class="form-control" id="commentaire" name="commentaire" rows="5"></textarea></TD>
              </TR>
          </table>
        </div>

        <div style="text-align:center; display:table; margin:0 auto">
          <button type="submit" class="btn btn-default">Valider</button>
          <a href="/intranet/ressourceshumaines/conges" class="btn btn-default" style="margin-left: 20px">Retour</a>
        </div>

    </form>

  </div>
</div>
@endsection
