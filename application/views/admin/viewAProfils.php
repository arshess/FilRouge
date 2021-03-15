<div class="container ms-1">
    <div class="row justify-content-center my-2">
        <?= form_open('', ['class' => 'container row']) ?>
        <div class="col-md-6 row">
            <div class="col-auto">
                <?= form_label('Recherche', 'inputSearchUser', ['class' => 'col-form-label']) ?>
            </div>
            <div class="col">
                <?= form_input(['type' => 'search', 'id' => 'inputSearchUser', 'name' => 'inputSearchUser', 'class' => 'form-control']) ?>
            </div>
        </div>

        <div class="col-md-6 d-flex">
            <div class="form-check col">
                <?= form_input(['type' => 'checkbox', 'id' => 'inputCheckemail', 'name' => 'inputCheckemail', 'class' => 'form-check-input mt-3', 'disabled'=>'true']) ?>
                <?= form_label('Email', 'inputCheckemail', ['class' => 'form-check-label col-form-label']) ?>
            </div>

            <div class="form-check col">
                <?= form_input(['type' => 'checkbox', 'id' => 'inputCheckname', 'name' => 'inputCheckname', 'class' => 'form-check-input mt-3', 'checked' => 'true']) ?>
                <?= form_label('Nom / Prénom', 'inputCheckname', ['class' => 'form-check-label  col-form-label']) ?>
            </div>
        </div>
    </div>
    <div class="row my-2">
    <div class="container">
    <div class="row fw-bold">
    <div class="col-3">Nom</div>
    <div class="col-3">Prénom</div>
    <div class="col-3">Adresse mail</div>

    </div>
    <?php foreach ($users as $user) {?>
        <div class="row my-1">
        <div class="col-3"><?=$user->lastName?></div>
        <div class="col-3"><?=$user->firstName?></div>
        <div class="col-3"><?=$user->email?></div>
       
        <div class="col-6 col-md-1"><a href="<?=base_url('Admin/deleteAccount')?>/<?=$user->user_id?>" class="btn btn-danger">Supprimer</a></div>
        <?php if($user->archived==1){?>
        <div class="col-6 col-md-1"><a href="<?=base_url('Admin/reactivateAccount')?>/<?=$user->user_id?>" class="btn btn-primary">Reactiver</a></div>
        <?php } ?>
        
        </div>
        
        
        
        
    <?php } ?>
    </div>
    </div>
</div>