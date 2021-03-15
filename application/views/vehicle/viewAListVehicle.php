<?php
   
?>
<div class="container-fluid">
   <div class="row">
      <div class="col-md-3 overflow-scroll col-12 order-2  order-md-1" style="max-height:75vh; overflow-x:hidden">
         <table>
            <?php
            foreach ($vehic as $veh) {
            ?>
               <tr>
                  <td class="my-2"><?= $veh->marque; ?></td>
                  <td class="my-2"><?= $veh->modelle; ?></td>
                  <td class="my-2"><a href="<?= base_url('Vehicle/showOneVehicle') ?>/<?= $veh->idVeh; ?>"><?= $veh->immat; ?></a></td>
               </tr>
            <?php
            }
            ?>
         </table>
      </div>
      <div class="col-md-9 col-12 order-1 order-md-2">
         <div class="row">
            <? form_open('Vehicle/updateVehicle')?>
            <?php
               if (isset($oneVehic)) {
                  foreach ($oneVehic as $oneVeh) {
               ?>
                  
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
                     <?php
$config['image_library'] = 'gd2';
$config['source_image'] = base_url('public/images/vehicule/') . $oneVeh->pic;
//var_dump($oneVeh->pic);
$config['create_thumb'] = TRUE;
$config['maintain_ratio'] = TRUE;
$config['width'] = 75;
$config['height'] = 50;

$this->load->library('image_lib', $config);
$this->image_lib->resize();
?>
                     <img src="<?= base_url('public/images/vehicule/') ?><?=$oneVeh->pic!=NULL?$oneVeh->pic:'noPicsAvailable.png';?>" />
                  </div>
                  <div class="col-12 text-center">
                  <?= form_submit('change', 'Changer', 'class="btn btn-success"'); ?>
                  </div>
         </div>
         <?php
               }
            }
   ?>
   <? form_close();?>
      </div>

   </div>
</div>