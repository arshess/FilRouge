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
        <div class=" row col-12">

            <p class="col-md-6 my-2 ">
                <label for="dateDepart">Date de départ</label>

                <?= form_input(['type' => 'date', 'value' => set_value('date'), 'id' => 'dateDepart', 'class' => 'form-control', 'for' => 'dateDepart', 'placeholder' => 'Date', 'name' => 'date']) ?>

                <?= form_error('date') ?>
            </p>

            <p class="col-md-6 my-2">
            <label for="hourDepart">Heure de depart
</label>
                <?= form_input(['type' => 'time', 'value' => set_value('hour'), 'id' => 'hourDepart', 'class' => 'form-control', 'for' => 'hourDepart', 'placeholder' => 'Heure', 'name' => 'hour']) ?>

                <?= form_error('hour') ?>
            </p>
        </div>
        <div class=" row col-12">

            <p class="col-md-6 my-2 ">
                <label for="dateRetour">Date de retour</label>

                <?= form_input(['type' => 'date', 'value' => set_value('date'), 'id' => 'dateRetour', 'class' => 'form-control', 'for' => 'dateRetour', 'placeholder' => 'Date', 'name' => 'date']) ?>

                <?= form_error('date') ?>
            </p>

            <p class="col-md-6 my-2">
                <label for="heureRetour">Heure de retour</label>
                <?= form_input(['type' => 'time', 'value' => set_value('hour'), 'id' => 'hourRetour', 'class' => 'form-control', 'for' => 'heureRetour', 'placeholder' => 'Heure', 'name' => 'hour']) ?>

                <?= form_error('hour') ?>
            </p>
        </div>

        <?= form_close() ?>
        <div class="row col-12">
            <table class="table mt-5" id="getVehicule" name="getVehicule">
                <?php if ($_SERVER['REQUEST_METHOD'] != 'POST') { ?>
                    <tr style="text-align: center;">
                        <th>Marque</th>
                        <th>Modèle</th>
                        <th>Nombre de portes</th>
                        <th>Carburant</th>
                        <th>Kilométrage</th>
                        <th>Puissance DIN</th>
                        <th>Mise en circulation</th>
                        <th>Image</th>
                    </tr>
                    <?php foreach ($vehicule as $val) { ?>
                        <tr style="text-align: center;">
                            <td><?= $val->name ?></td>
                            <td><?= $val->modele ?></td>
                            <td><?= $val->doors ?></td>
                            <td><?= $val->fuelType ?></td>
                            <td><?= $val->mileage ?></td>
                            <td><?= $val->horses ?></td>
                            <td><?= $val->productedYear ?></td>
                            <td><img src="<?= base_url('public/images/vehicule/') ?><?= $val->picture; ?>" style="height:50px;width:100px;object-fit: cover;"></td>
                            <td><a href="<?= base_url() ?>index.php/User/getDetailsVehicule/<?= $val->vehicule_id ?>"><button class="btn btn-success" value="<?= $val->vehicule_id ?>">Détails véhicule</button></td></a>
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
<script src="<?= base_url() ?>assets/script.js"></script>
