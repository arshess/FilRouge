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