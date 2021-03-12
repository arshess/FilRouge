<div class="container-fluid container_user m-0">

    <?= form_open('User/connexion', ['class' => 'form-group offset-md-3 col-12 col-md-6 p-3', 'id' => 'formConnexion']); ?>
    <div class="row">
        <?= form_label('Email', '', ['for' => 'inputEmail', 'class' => 'mt-3 mb-1 fw-bold']); ?>
        <?= form_input(['id' => 'inputEmail', 'name' => 'inputEmail', 'class' => 'form-control mb-1', 'value' => set_value('inputEmail')]); ?>
        <?= form_error('inputEmail', '<div class="alert alert-warning">', '</div>');?>
    </div>
    <div class="row">
        <?= form_label('Mot de passe', '', ['for' => 'inputPassword', 'class' => 'mt-3 mb-1 fw-bold']); ?>
        <?= form_input(['id' => 'inputPassword','type'=>'password', 'name' => 'inputPassword', 'class' => 'form-control mb-1', 'value' => set_value('inputPassword'),'autocomplete'=>'current-password]']); ?>
        <?= form_error('inputPassword', '<div class="alert alert-warning">', '</div>');?>
    </div>
    <div class="row my-3">
        <a href="" class="text-end">Mot de passe oublié ?</a>
    </div>
    <div class="row my-3">
    <?= form_input(['type'=>'submit', 'class' => 'btn btn-primary fw-bold','value'=>'Connexion']); ?>
    </div>
    <?= form_close(); ?>

</div>