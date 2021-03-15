<div class="container-fluid">
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
                <?= form_input(['type' => 'checkbox', 'id' => 'inputCheckemail', 'name' => 'inputCheckemail', 'class' => 'form-check-input mt-3']) ?>
                <?= form_label('Email', 'inputCheckemail', ['class' => 'form-check-label col-form-label']) ?>
            </div>

            <div class="form-check col ">
                <?= form_input(['type' => 'checkbox', 'id' => 'inputCheckname', 'name' => 'inputCheckname', 'class' => 'form-check-input mt-3','checked'=>'true']) ?>
                <?= form_label('Nom / Prénom', 'inputCheckname', ['class' => 'form-check-label  col-form-label']) ?>
            </div>
        </div>

    </div>
</div>