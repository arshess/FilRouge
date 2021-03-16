<div class="container-fluid">
   <div class="row justify-content-center my-2">
      <div class="row justify-content-center col-12">
         <div class="bg-light col-12 col-md-1 text-center">Immatriculation</div>
         <div class="bg-light col-12 col-md-2 text-center">Prenom&nbsp;Nom</div>
         <div class="bg-light col-6 col-md-2 text-center">Marque</div>
         <div class="bg-light col-6 col-md-2 text-center">Modèle</div>
         <div class="bg-light col-6 col-md-2 text-center">Date début</div>
         <div class="bg-light col-6 col-md-2 text-center">Date fin</div>
         <div class="bg-light col-12 col-md-1 text-center">&nbsp;</div>
      </div>
      <?php
      foreach ($ARentList as $datum) {
      ?>
         <div class="row justify-content-center align-middle col-12"></div>
         <div class="bg-light bg-md-secondary col-12 col-md-1 text-center mb-md-1 "><span class="bg-light rounded align-middle">&nbsp;<?= $datum->immatriculation; ?>&nbsp;</span></div>
         <div class="bg-light bg-md-secondary col-12 col-md-2 text-center mb-md-1 "><span class="bg-light rounded align-middle">&nbsp;<?= $datum->Prenom; ?>&nbsp;<?= $datum->Nom; ?>&nbsp;</span></div>
         <div class="bg-light bg-md-secondary col-md-2 col-6 text-center mb-md-1 "><span class="bg-light rounded align-middle">&nbsp;<?= $datum->marque; ?>&nbsp;</span></div>
         <div class="bg-light bg-md-secondary col-md-2 col-6 text-center mb-md-1 "><span class="bg-light rounded align-middle">&nbsp;<?= $datum->modele; ?>&nbsp;</span></div>
         <div class="bg-light bg-md-secondary col-6 col-md-2 text-center mb-md-1 "><span class="bg-light rounded align-middle">&nbsp;&nbsp;du&nbsp;<?= substr($datum->debutDate, 0, -3); ?>&nbsp;&nbsp;</span></div>
         <div class="bg-light bg-md-secondary col-6 col-md-2 text-center mb-md-1 "><span class="bg-light rounded align-middle">&nbsp;&nbsp;au&nbsp;<?= substr($datum->retourDate, 0, -3); ?>&nbsp;&nbsp;</span></div>
         <div class="bg-light bg-md-secondary col-12 col-md-1 text-center mb-3 mb-md-1"><a href="<?= base_url() ?>Admin/showAdminOneLocation/<?= $datum->idLoc ?>" class="btn btn-primary">Choisir</a></div>
      <?php
      }
      ?>
      </div>
   </div>
</div>