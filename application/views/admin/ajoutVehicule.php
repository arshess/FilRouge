<?php

use function PHPSTORM_META\type;
?>
<div class="col-md-12">
    <?= form_open('Vehicle/addVehicule', ['class' => 'form-group  justify-content-center row']) ?>

    <p class="text-center col-md-6 m-2">
        <?= form_label('plaque d\'immatriculation', 'numberPlate'); ?>
        <?= form_input('numberPlate', set_value("numberPlate"), ['id' => 'numberPlate', 'class' => 'form-control', 'name' => 'numberPlate', 'placeholder' => 'numberPlate']) ?>

        <?= form_error('numberPlate'); ?>
    </p>
    <p class="text-center col-md-6 m-2">
        <?= form_label('nombre des portes', 'doors'); ?>
        <?= form_input(' doors', set_value("doors"), ['id' => ' doors', 'class' => 'form-control', 'name' => 'doors', 'placeholder' => ' nombre des portes']) ?>
        <?= form_error(' doors'); ?>
    </p>
    <p class="text-center col-md-6 m-2">
        <?= form_label('Énergie', 'fuelType'); ?>
        <?= form_input(' fuelType', set_value("fuelType"), ['id' => ' fuelType', 'class' => 'form-control', 'name' => 'fuelType', 'placeholder' => ' Énergie']) ?>
        <?= form_error(' fuelType'); ?>
    </p>
    <p class="text-center col-md-6 m-2">
        <?= form_label('Kilométrage', 'mileage'); ?>
        <?= form_input(' mileage', set_value("mileage"), ['id' => ' mileage', 'class' => 'form-control', 'name' => 'mileage', 'placeholder' => ' Kilométrage']) ?>
        <?= form_error(' mileage'); ?>
    </p>
    <p class="text-center col-md-6 m-2">
        <?= form_label('Puissance DIN', 'horses'); ?>

        <?= form_input('horses', set_value("horses"), ['id' => '  horses', 'class' => 'form-control', 'name' => 'horses', 'placeholder' => '  Puissance DIN']) ?>
        <?= form_error('horses'); ?>
    </p>
    <p class="text-center col-md-6 m-2">
        <?= form_label('Année de production', 'productedYear'); ?>
        <?= form_input(['type' => 'date', 'value' => set_value('productedYear'), 'id' => 'productedYear', 'class' => 'form-control', 'placeholder' => 'Année de production', 'name' => 'productedYear']) ?>
        <?= form_error('productedYear'); ?>
    </p>
    <div class="text-center col-md-6 m-2">
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
        <div class="text-center col-md-6 m-2">
            <select class="form-select" name="modele" id="modele">
                <option>Modeles</option>
                <?php
                foreach ($modeles as $modele) {
                ?>
                    <option value="<?= $modele->modele_id; ?>"><?php echo $modele->name; ?> </option>
                <?php
                };
                ?>
            </select>
        </div>
        <div class="text-center col-md-6 m-2">
            <select class="form-select" name="agency" id="agency">
                <option>Agences</option>
                <?php
                foreach ($agences as $agence) {
                ?>
                    <option value="<?= $agence->agency_id; ?>"><?php echo $agence->name; ?> </option>
                <?php
                };
                ?>
            </select>
        </div>
        <div class="text-center col-md-6 m-2">
            <select class="form-select" name="disponibility" id="disponibility">
                <option>Disponible</option>
                <?php
                foreach ($dispo as $disp) {
                ?>
                    <option value="<?= $disp->dispo_id; ?>"><?php echo $disp->designation; ?> </option>
                <?php
                };
                ?>
            </select>
        </div>

    <?= form_submit('mysubmit', 'Envoyer', ['class' => 'col-md-6 col-12 btn btn-primary m-2 p-0']); ?>
    <?= form_close() ?>
</div>