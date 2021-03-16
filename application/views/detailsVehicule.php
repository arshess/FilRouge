<div class="row card mb-5">
   <table class="col-12">
      <tr style="text-align: center;">
         <th>Nombre de portes</th>
         <th>Carburant</th>
         <th>Kilométrage</th>
         <th>Puissance DIN</th>
         <th>Mise en circulatio</th>
      </tr>
      <?php
      foreach ($details as $detail) : ?>
         <tr>
            <?php if ($detail->picture == NULL) {
               $detail->picture = 'lambo.jpg';
            } ?>
         <tr colspan="5" style="text-align:center;"><img src="<?= base_url('public/images/vehicules/') . $detail->picture; ?>" style="height:500px;width:auto;object-fit: cover;"></tr>
         </tr>
         <tr style="text-align: center;">
            <td><?= $detail->doors; ?></td>
            <td><?= $detail->fuelType; ?></td>
            <td><?= $detail->mileage; ?></td>
            <td><?= $detail->horses; ?></td>
            <td><?= $detail->productedYear; ?></td>
         </tr>
      <?php endforeach; ?>
   </table>
</div>
<div class="col-12 d-flex">
   <a class="btn btn-secondary col-6" href="<?= base_url() ?>user">Retour </a>
   <a class="btn btn-danger col-6" href="<?= base_url() ?>user/connexion">Reserver </a>
</div>