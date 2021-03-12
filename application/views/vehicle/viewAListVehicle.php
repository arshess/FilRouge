<div class="container-fluid">
   <div class="row">
      <div class="col-3 overflow-scroll" style="max-height:75vh; overflow-x:hidden">
         <table>
            <?php
            foreach ($vehic as $veh) {
            ?>
               <tr><td class="my-2"><?= $veh->marque; ?></td><td class="my-2"><?= $veh->modelle; ?></td><td class="my-2"><a href="<?= base_url('Vehicle/showOneVehicle') ?>/<?= $veh->idVeh; ?>"><?= $veh->immat; ?></a></td></tr>
            <?php
            }

            ?>
         </table>
      </div>
      <div class="col-9">
         <div class="row">
            <? form_open('Vehicle/updateVehicle')?>
            <?php
            foreach ($oneVehic as $oneVeh) {
            ?>
               <? form_input()?><?= $oneVeh->idVeh; ?>
               <div class="col-12 text-center">
                  <?= $oneVeh->immat; ?>
               </div>
               <div class="col-3 text-center">
                  <?= $oneVeh->marque; ?>
               </div>
               <div class="col-9 text-center">
                  Kilométrage
               </div>
               <div class="col-3 text-center">
                  <?= $oneVeh->modelle; ?>
               </div>
               <div class="col-9 text-center">
                  <?= $oneVeh->miles; ?>
               </div>
               <div class="col-3 text-center">
                  <?= $oneVeh->millesime; ?>
               </div>
               <div class="col-9 text-center">
                  <?= $oneVeh->agence; ?>
               </div>
               <div class="col-12 text-center">
                  Image[<?= $oneVeh->pic; ?>]
               </div>
         </div>







      <?php
            }
      
      ?>
      <? form_close();?>
      </div>

   </div>
</div>