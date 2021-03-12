<div class="row justify-content-center m-0 p-0" style="height: 620px;">
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
        <div class="row col-12 mt-3">
            <p class="col-md-6">

                <?= form_input(['type' => 'date', 'value' => set_value('date'), 'id' => 'dateDepart', 'class' => 'form-control', 'placeholder' => 'Date', 'name' => 'dateDepart']) ?>

                <?= form_error('date') ?>
            </p>

            <p class="col-md-6">
                <?= form_input(['type' => 'time', 'value' => set_value('hour'), 'id' => 'hourDepart', 'class' => 'form-control', 'placeholder' => 'Heure', 'name' => 'hourDepart']) ?>

                <?= form_error('hour') ?>
            </p>
        </div>
        <div class="row col-12 mt-3">
            <p class="col-md-6">

                <?= form_input(['type' => 'date', 'value' => set_value('date'), 'id' => 'date', 'class' => 'form-control', 'placeholder' => 'Date', 'name' => 'dateRetour']) ?>

                <?= form_error('date') ?>
            </p>

            <p class="col-md-6">
                <?= form_input(['type' => 'time', 'value' => set_value('hour'), 'id' => 'hour', 'class' => 'form-control', 'placeholder' => 'Heure', 'name' => 'hourRetour']) ?>

                <?= form_error('hour') ?>
            </p>
        </div>
        <?= form_close() ?>
        <div class="row col-12">
            <table class="table mt-5" id="getVehicule" name="getVehicule">
            </table>

        </div>
        <!-- <div class="row col-12">
            <table class="table mt-5" id="getVehiculeDispo" name="getVehiculeDispo">
            </table>

        </div> -->
    </div>
</div>
<a class="btn btn-danger col-12" href="<?= base_url() ?>">Reserver </a>