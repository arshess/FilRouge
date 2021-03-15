<div class="row">
    <div class="col-md-10">
        <?php foreach ($oneVehic as $oneVehic ):?>
    <?= form_open('Vehicle/updateVehicule/'.$oneVehic->idVeh, ['class' => 'form-group row justify-content-center']) ?>
            <p class="col-md-5 my-2 mx-2">
            <?= form_input('numberPlate', set_value('numberPlate', $oneVehic->immat), ['id' => 'numberPlate', 'class' => 'form-control', 'placeholder' => 'numberPlate']) ?>
                <?= form_error('numberPlate'); ?>
            </p>
            <p class="col-md-5 my-2 mx-2">
            <?= form_input(' mileage', set_value('mileage', $oneVehic-> miles), ['id' => ' mileage', 'class' => 'form-control', 'placeholder' => ' mileage']) ?>
                <?= form_error(' mileage'); ?>
            </p>
            <p class="col-md-5 my-2 mx-2">
            <?= form_input('horses', set_value('horses', $oneVehic->  horses), ['id' => '  horses', 'class' => 'form-control', 'placeholder' => '  horses']) ?>
                <?= form_error('horses'); ?>
            </p>
            <p class="col-md-5 my-2 mx-2">
            <?= form_input('picture', set_value('picture', $oneVehic->  pic), ['id' => '  picture', 'class' => 'form-control', 'placeholder' => '  picture']) ?>
                <?= form_error('picture'); ?>
            </p>
            <?php endforeach; ?>            <?= form_submit('mysubmit', 'Envoyer', ['class' => 'col-md-10 btn btn-primary']); ?>
        <?= form_close() ?>
    </div>
</div>