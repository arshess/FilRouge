<div class="container-fluid container_user m-0">
    <?= form_open('User/inscription', ['class' => 'form-group offset-md-2 col-12 col-md-8 p-3', 'id' => 'forminscription1']) ?>
    <div class="row">
        <div class="col-lg-5">
            <?= form_label('Prénom', '', ['for' => 'inputFirstname', 'class' => 'mt-3 mb-1 fw-bold']); ?>
            <?= form_input(['id' => 'inputFirstname', 'name' => 'inputFirstname', 'class' => 'form-control mb-1', 'value' => set_value('inputFirstname')]); ?>
            <?= form_error('inputFirstname', '<div class="alert alert-warning">', '</div>'); ?>
        </div>
        <div class="col-lg-5 offset-lg-1">
            <?= form_label('Nom', '', ['for' => 'inputLastname', 'class' => 'mt-3 mb-1 fw-bold']); ?>
            <?= form_input(['id' => 'inputLastname', 'name' => 'inputLastname', 'class' => 'form-control mb-1', 'value' => set_value('inputLastname')]); ?>
            <?= form_error('inputLastname', '<div class="alert alert-warning">', '</div>'); ?>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-5">
            <?= form_label('Adresse Email', '', ['for' => 'inputEmail', 'class' => 'mt-3 mb-1 fw-bold']); ?>
            <?= form_input(['id' => 'inputEmail','type'=>'email', 'name' => 'inputEmail', 'class' => 'form-control mb-1', 'value' => set_value('inputEmail')]); ?>
            <?= form_error('inputEmail', '<div class="alert alert-warning">', '</div>'); ?>
        </div>
        <div class="col-lg-5 offset-lg-1">
            <?= form_label('Mot de passe', '', ['for' => 'inputPassword', 'class' => 'mt-3 mb-1 fw-bold']); ?>
            <?= form_input(['id' => 'inputPassword','type'=>'password', 'name' => 'inputPassword', 'class' => 'form-control mb-1', 'value' => set_value('inputPassword'),'autocomplete'=>'new-password']); ?>
            <?= form_error('inputPassword', '<div class="alert alert-warning">', '</div>'); ?>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-5">
            <?= form_label('Confirmation mot de passe', '', ['for' => 'inputPassword2', 'class' => 'mt-3 mb-1 fw-bold']); ?>
            <?= form_input(['id' => 'inputPassword2','type'=>'password', 'name' => 'inputPassword2', 'class' => 'form-control mb-1', 'value' => set_value('inputPassword2')]); ?>
            <?= form_error('inputPassword2', '<div class="alert alert-warning">', '</div>'); ?>
        </div>
        <div class="col-lg-5 offset-lg-1">
        <br class="mb-1">
            <?= form_input(['type' => 'submit', 'class' => 'btn btn-primary mt-3 mb-1 fw-bold col-12','value'=>'Inscription']); ?>
        </div>
    </div>


</div>