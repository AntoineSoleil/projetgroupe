@extends('layouts.app')

@section('content')
<form>
 <table>  
    <tbody>
      <tr>
        <td>Nom</td> 
        <td><input type="text"></td>
      </tr>
      <tr>
        <td>Prénom</td> 
        <td><input type="text"></td>
      </tr>
      <tr>
        <td>Fonction</td>
        <td><input type="text"></td>
      </tr>
      <tr>
        <td>Lieu d'intervention</td>
        <td><input type="text"></td>
      </tr>
      <tr>
        <td></td>
      </tr>
      <tr>
        <td>Repsponsable hiérarchique</td>
        <td><input type="text"></td>
      </tr>
    </tbody>
  </table>
  <br/>
  <h2 align="center">DEMANDE</h2>
  <table>  
    <tbody>
      <tr>
        <td>Date de congés ou absence</td> 
        <td>Date du</td>
        <td><input type="text"></td>
        <td>Au</td>
        <td><input type="text"></td>
      </tr>
      <tr>
        <td>Nombre de jours</td> 
        <td colspan="4"><input type="text"></td>
      </tr>
      <tr>
        <td>Type de congés (CP, CSS)</td>
        <td colspan="4"><input type="text"></td>
      </tr>  
    </tbody>
  </table>
  <br/>
   <table>  
    <tbody>
      <tr>
        <td>Fait à </td> 
        <td><input type="text"></td>
      </tr>
      <tr>
        <td>Le</td> 
        <td><input type="text"></td>
      </tr>
      <tr>
        <td>Signature</td>
        <td><input type="text"></td>
      </tr> 
    </tbody>
  </table>
  <br />
  <h2 align="center">REPONSE</h2>
  <table>  
    <tbody>
      <tr> 
        <td><input type="checkbox"  id="Accorde" />  
            <label for="Accorde">Accordé</label></td> 
         <td><input type="checkbox"  id="Refuse" />  
            <label for="Refuse">Refusé</label></td>  
      </tr>
      <tr>
        <td>Date et signature du responsable hiérachique</td> 
        <td><input type="text"></td>
      </tr>
      <tr>
        <td>Date et signature du dirigeant</td>
        <td><input type="text"></td>
      </tr>  
      <tr>
        <td>
          <label for="textarea1">Commentaire en cas de refus :</label>
          <textarea id="textarea1" class="materialize-textarea"></textarea>
        </td> 
      </tr>
    </tbody>
  </table>
@endsection