<div class="row">
    <div class="col-md-10">
        <?php foreach ($oneVehic as $oneVehic ):?>
    <?= form_open('Vehicle/updateVehicule/'.$oneVehic->idVeh, ['class' => 'form-group row justify-content-center']) ?>
            <p class="col-md-4 my-2">plaque d'immatriculation
            <?= form_input('numberPlate', set_value('numberPlate', $oneVehic->immat), ['id' => 'numberPlate', 'class' => 'form-control justify-content-center ', 'name' => 'numberPlate', 'class' => 'form-control', 'placeholder' => 'numberPlate']) ?>
                <?= form_error('numberPlate'); ?>
            </p>
            <p class="col-md-4 my-2">Kilométrage
            <?= form_input(' mileage', set_value('mileage', $oneVehic-> miles), ['id' => ' mileage', 'class' => 'form-control justify-content-center ', 'name' => 'mileage', 'class' => 'form-control', 'placeholder' => ' mileage']) ?>
                <?= form_error(' mileage'); ?>
            </p>
            <p class="col-md-4 my-2">Puissance DIN
            <?= form_input('horses', set_value('horses', $oneVehic->  horses), ['id' => '  horses', 'class' => 'form-control justify-content-center s ', 'name' => 'horses', 'class' => 'form-control', 'placeholder' => '  horses']) ?>
                <?= form_error('horses'); ?>
            </p>
            
            <?php endforeach; ?>            
    <?= form_submit('mysubmit', 'Envoyer', ['class' => 'col-md-10 btn btn-primary']); ?>
        <?= form_close() ?>
    </div>
</div>