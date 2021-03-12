<div class="container-fluid justify-content-center">
<div class="row justify-content-center my-2">
   <?php

   setlocale(LC_ALL, 'fr-FR');
   ?>

   <?= form_open('Admin/updateReturn'); ?>
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
         <td class="text-end">Kilométrage départ</td>
            <td colspan="2">
               <?= form_input(['type' => 'text', 'id' => 'startmileage', 'class' => 'form-control text-center', 'value' => number_format($datum->startmileage,0,'.',' '), 'name' => 'startmileage', 'readonly' => '']); ?>
            </td>
         </tr>
         <tr>
            
         </tr>
         <tr>
         <?php
         $retourDate1 = explode(' ',$datum->debutDate);
         $retourDate2 = explode(' ',$datum->retourDate);
         $last7days = date('Y-m-d',mktime(0, 0, 0, date("m"), date("d")-7,   date("Y")));
         //var_dump($last7days);
         // var_dump($datum->retourDate);
          //die();
         ?>
         <td class="text-end">Date de départ</td>
            <td>
               <?= form_input(['type' => 'date', 'id' => 'beginDate', 'class' => 'form-control text-center', 'name' => 'beginDate', 'value' => $retourDate1[0], 'readonly' => '']); ?>
            </td>
            <td>
               <?= form_input(['type' => 'time', 'id' => 'beginHour', 'class' => 'form-control text-center', 'name' => 'beginHour', 'value' => $retourDate1[1], 'readonly' => '']); ?>
            </td>
         </tr>
         <tr>
            <td class="text-end">Date de retour réel</td>
            <td>
               <?= form_input(['type' => 'date', 'id' => 'endDate', 'class' => 'form-control text-center', 'name' => 'endDate', 'min' => $last7days, 'value' => Date('Y-m-d')]); ?>
            </td>
            <td>
               <?= form_input(['type' => 'time', 'id' => 'endHour', 'class' => 'form-control text-center', 'name' => 'endHour', 'value' => Date('h:i')]); ?>
            </td>
         </tr>
         <tr>
         <td class="text-end">Kilométrage retour</td>
            <td colspan="2">
               <?= form_input(['type' => 'text', 'id' => 'returnmileage', 'class' => 'form-control text-center', 'name' => 'returnmileage']); ?>
            </td>
         </tr>
         <tr>
            <td class="text-start">
               <a href="<?= base_url() ?>Admin/showAdminReturn" class="btn btn-warning" class="btn btn-warning">Retour</a>
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