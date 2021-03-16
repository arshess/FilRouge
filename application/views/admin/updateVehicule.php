    <div class="col-md-12">
    <?= form_open('Vehicle/updateVehicule/'.$oneVehic[0]->idVeh, ['class' => 'form-group  justify-content-center row']) ?>
            <p class="text-center col-md-6 m-2">
            <?= form_label('plaque d\'immatriculation', 'numberPlate'); ?>
            <?= form_input('numberPlate', set_value('numberPlate', $oneVehic[0]->immat), ['id' => 'numberPlate', 'class' => 'form-control', 'name' => 'numberPlate', 'for' => 'numberPlate', 'placeholder' => 'numberPlate']) ?>
                <?= form_error('numberPlate'); ?>
            </p>
            <p class="text-center col-md-6 m-2">
            <?= form_label('Kilométrage', 'mileage'); ?>
            <?= form_input(' mileage', set_value('mileage', $oneVehic[0]-> miles), ['id' => ' mileage', 'class' => 'form-control', 'name' => 'mileage', 'for' => 'mileage', 'placeholder' => ' mileage']) ?>
                <?= form_error(' mileage'); ?>
            </p>
            <p class="text-center col-md-6 m-2">
            <?= form_label('Puissance DIN', 'horses'); ?>

            <?= form_input('horses', set_value('horses', $oneVehic[0]->  horses), ['id' => '  horses', 'class' => 'form-control', 'name' => 'horses', 'for' => 'horses', 'placeholder' => '  horses']) ?>
                <?= form_error('horses'); ?>
            </p>
            
    <?= form_submit('mysubmit', 'Envoyer', ['class' => 'col-md-6 col-12 btn btn-primary m-2 p-0']); ?>
        <?= form_close() ?>
    </div>
