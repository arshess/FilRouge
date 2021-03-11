<div class="container-fluid">
   <div class="row justify-content-center my-2">
      <table class="justify-content-center">
         <tr>
            <td>Immatriculation</td>
            <td>Prenom&nbsp;Nom</td>
            <td>Marque</td>
            <td>Modele</td>
            <td>Date début</td>
            <td>Date fin</td>
            <td>Choisir</td>
         </tr>
         <?php
         foreach ($ARentList as $datum) {
         ?>
            <tr>
               <td class="bg-primary"><?= $datum->immatriculation; ?></td>
               <td><?= $datum->Prenom; ?>&nbsp;<?= $datum->Nom; ?></td>
               <td><?= $datum->marque; ?></td>
               <td><?= $datum->modele; ?></td>
               <td>du <?= $datum->debutDate; ?></td>
               <td>au <?= $datum->retourDate; ?></td>
               <td><a href="<?= base_url() ?>Admin/showAdminOneLocation/<?= $datum->idLoc ?>">Choisir</a></td>
               
            </tr>
         <?php
         }
         ?>
      </table>
   </div>
</div>