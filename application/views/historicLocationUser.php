<div class="container-fluid">
   <div class="row justify-content-center my-2">
      <table class="justify-content-center">
         <tr>
            <th>Marque</th>
            <th>Modele</th>
            <th>Kilométrage parcouru</th>
            <th>Date début</th>
            <th>Date fin</th>
            
         </tr>
         <?php
         foreach ($Historic as $datum) {
         var_dump($datum->Nmarque);
         ?>
         
            <tr>
               <td><?= $datum->Nmarque; ?></td>
               <td><?= $datum->Nmodele; ?></td>
               <td><?= $datum->endCpt - $datum->startCpt; ?></td>
               <td>du <?= $datum->startTime; ?></td>
               <td>au <?= $datum->endTime; ?></td>
               
               
            </tr>
         <?php
         }
         ?>
      </table>
   </div>
</div>