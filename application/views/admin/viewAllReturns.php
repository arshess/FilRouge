<div class="container-fluid">
   <div class="row justify-content-center my-2">
      <table class="justify-content-center">
         <tr>
            <th>Immatriculation</th>
            <th>Prenom&nbsp;Nom</th>
            <th>Marque</th>
            <th>Modele</th>
            <th>Kilométrage départ</th>
            <th>Date début</th>
            <th>Date fin</th>
            <th>Choix</th>
         </tr>
         <?php
         foreach ($ARentList as $datum) {
         ?>
            <tr>
               <td class="bg-primary"><?= $datum->immatriculation; ?></td>
               <td><?= $datum->Prenom; ?>&nbsp;<?= $datum->Nom; ?></td>
               <td><?= $datum->marque; ?></td>
               <td><?= $datum->modele; ?></td>
               <td><?= $datum->startmileage; ?></td>
               <td>du <?= $datum->debutDate; ?></td>
               <td>au <?= $datum->retourDate; ?></td>
               <td><a href="<?= base_url() ?>Admin/showAdminOneReturn/<?= $datum->idLoc ?>">Choisir</a></td>
               
            </tr>
         <?php
         }
         ?>
      </table>
   </div>
</div>