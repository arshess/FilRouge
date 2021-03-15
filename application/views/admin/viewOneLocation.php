<div class="container-fluid justify-content-center">
<div class="row justify-content-center my-2">
   <?php

   setlocale(LC_ALL, 'fr-FR');
   ?>

   <?= form_open('Admin/updateLocation'); ?>
   <table>
      <?php
      foreach ($ARentOne as $datum) {
      ?>
         <tr>
         <td class="text-end">
            Locataire
            </td>
            <td colspan="2">
               <?= form_input(['type' => 'hidden', 'id' => 'idLoc', 'name' => 'idLoc', 'value' => $datum->idLoc]); ?>
               <?= form_input(['type' => 'hidden', 'id' => 'idVehicule', 'name' => 'idVehicule', 'value' => $datum->id_vehicule]); ?>
               <?= form_input(['type' => 'text', 'id' => 'firstlastname', 'class' => 'form-control text-center', 'name' => 'firstlastname', 'value' => $datum->Prenom . ' ' . $datum->Nom, 'readonly' => '']); ?>
            </td>
         </tr>
         <tr>
            <td class="text-end">
               Immatriculation
            </td>
            <td colspan="2">
               <?= form_input(['type' => 'text', 'id' => 'numberPlate', 'class' => 'form-control text-center', 'name' => 'numberPlate', 'value' => $datum->immatriculation, 'readonly' => '']); ?>
            </td>
         </tr>
         <tr>
            <td class="text-end">Marque</td>
            <td colspan="2">
               <?= form_input(['type' => 'text', 'id' => 'brand', 'class' => 'form-control text-center', 'name' => 'brand', 'value' => $datum->marque, 'readonly' => '']); ?>
               
            
            </td>
            </tr>
            <tr>
            <td class="text-end">Modèle</td>
            <td colspan="2">
               <?= form_input(['type' => 'text', 'id' => 'model', 'class' => 'form-control text-center', 'name' => 'model', 'value' => $datum->modele, 'readonly' => '']); ?>

            
            </td>
            </tr>
         <tr>
            
         </tr>
         <tr>
         <td class="text-end">Date de départ prévu</td>
            <td>
               <?= form_input(['type' => 'date', 'id' => 'beginDate', 'class' => 'form-control text-center', 'name' => 'beginDate', 'value' => strftime('%Y-%m-%e', strtotime($datum->debutDate))]); ?>
            </td>
            <td>
               <?= form_input(['type' => 'time', 'id' => 'beginHour', 'class' => 'form-control text-center', 'name' => 'beginHour', 'value' => strftime('%R', strtotime($datum->debutDate))]); ?>
            </td>
         </tr>
         <?php
         $retourDate2 = explode(' ',$datum->retourDate);
         // var_dump($datum->retourDate);
         // die();
         ?>
         <tr>
            <td class="text-end">Date de retour prévu</td>
            <td>
               <?= form_input(['type' => 'date', 'id' => 'endDate', 'class' => 'form-control text-center', 'name' => 'endDate', 'value' => $retourDate2[0]]); ?>
            </td>
            <td>
               <?= form_input(['type' => 'time', 'id' => 'endHour', 'class' => 'form-control text-center', 'name' => 'endHour', 'value' => strftime('%R', strtotime($datum->retourDate))]); ?>
            </td>
         </tr>
         <tr>
         <td class="text-end">Kilométrage</td>
            <td colspan="2">
               <?= form_input(['type' => 'text', 'id' => 'startmileage', 'class' => 'form-control text-center', 'name' => 'startmileage', 'min' => $datum->lastmileage, 'placeholder' => $datum->lastmileage]); ?>
            </td>
         </tr>
         <tr>
            <td class="text-start">
               <a href="<?= base_url() ?>Admin/showAdminLocation" class="btn btn-warning" class="btn btn-warning">Retour</a>
            </td>

            <td class="text-end">
               <?= form_submit('save', 'Enregistrer', 'class="btn btn-success"'); ?>
            </td>
         </tr>
      <?php
      }
      ?>
   </table>
   <?= form_close(); ?>

</div>
</div>