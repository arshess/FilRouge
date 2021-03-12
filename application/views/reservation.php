<div class="row justify-content-center m-0 p-0">
    <div class="col-md-10 mt-5">
        <?= form_open('', ['class' => 'form-group row justify-content-center']) ?>
        <div class="row col-4">
            <select class="form-select" name="type" id="type">
                <option>Types</option>
                <?php
                foreach ($types as $type) {
                ?>
                    <option value="<?= $type->type_id; ?>"><?php echo $type->name; ?> </option>
                <?php
                };
                ?>
            </select>
        </div>
        <div class=" row col-4"><select class="form-select" id="resultMarque" name="marque">
                <option>Marques</option>
            </select></div>
        <div class=" row col-4"><select class="form-select" id="result" name="modele">
                <option>Modeles</option>
            </select></div>
        
        <?= form_close() ?>
        <div class="row col-12">
            <table class="table mt-5" id="getVehicule" name="getVehicule">
            <?php if($_SERVER['REQUEST_METHOD'] != 'POST'){?>
                <tr  style="text-align: center;"><th>Marque</th><th>Modèle</th><th>Nombre de portes</th><th>Carburant</th><th>Kilométrage</th><th>Puissance DIN</th><th>Mise en circulation</th><th>Image</th></tr>
               <?php foreach($vehicule as $val){?>
                   <tr style="text-align: center;">
                   <td><?= $val->name?></td>
                   <td><?= $val->modele?></td>
                   <td><?= $val->doors?></td>
                   <td><?= $val->fuelType?></td>
                   <td><?= $val->mileage?></td>
                   <td><?= $val->horses?></td>
                   <td><?= $val->productedYear?></td>
                   <td><?= $val->picture?></td>
                   </tr>
               <?php }
            } ?>
            </table>

        </div>
        <div id="vehiculePagination">
            <?php echo $this->pagination->create_links(); ?>
        </div>
        
    </div>
</div>
<a class="btn btn-danger col-12" href="<?= base_url() ?>">Reserver </a>