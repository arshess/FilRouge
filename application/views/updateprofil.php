<div class="container-fluid container_user py-3">
    <div class="container row bg-light ms-auto me-auto rounded my-3">
        <?= form_open('User/updateProfil', ['class' => 'form-group p-3', 'id' => 'formConnexion']); ?>
        <div class="row">
            <div class="col-lg-6 my-2 d-flex align-items-end">
                <img id="profil-avatar" src="<?= base_url() . 'public/images/avatar/' . $avatar ?>" alt="avatar du profil">
                <input type="file" name="inputAvatar" id="inputAvatar" class="form-control mb-1 mx-1" value="Televersement">
            </div>
            <div class="col-lg-6 my-2 px-2 d-flex flex-column-reverse">
                <div class="form-floating col-12">
                    <?= form_input(['type' => 'date', 'id' => 'inputbirthDate', 'name' => 'inputbirthDate', 'class' => 'form-control mb-1', 'placeholder' => 'date de naissance'], set_value('inputbirthDate', $birthDate)); ?>
                    <?= form_label('Date de naissance :', '', ['for' => 'inputbirthDate', 'class' => 'ms-1 fw-bold']); ?>
                    <?= form_error('inputbirthDate', '<div class="alert alert-warning">', '</div>'); ?>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <div class="row form-floating px-2">
                    <?= form_input(['id' => 'inputLastname', 'name' => 'inputLastname', 'class' => 'form-control mb-1', 'placeholder' => 'Nom'], set_value('inputLastname', $lastName)); ?>
                    <?= form_label('Nom :', '', ['for' => 'inputLastname', 'class' => 'ms-1 fw-bold']); ?>
                    <?= form_error('inputLastname', '<div class="alert alert-warning">', '</div>'); ?>
                </div>
                <div class="row form-floating my-2 px-2">
                    <?= form_input(['id' => 'inputFirstname', 'name' => 'inputFirstname', 'class' => 'form-control mb-1', 'placeholder' => 'Prénom'], set_value('inputFirstname', $firstName)); ?>
                    <?= form_label('Prénom :', '', ['for' => 'inputFirstname', 'class' => 'ms-1 fw-bold']); ?>
                    <?= form_error('inputFirstname', '<div class="alert alert-warning">', '</div>'); ?>
                </div>
                <div class="row form-floating my-2 px-2">
                    <?= form_input(['id' => 'inputAddress', 'name' => 'inputAddress', 'class' => 'form-control mb-1', 'placeholder' => 'Adresse'], set_value('inputAddress', $address)); ?>
                    <?= form_label('Adresse :', '', ['for' => 'inputAddress', 'class' => 'ms-1 fw-bold']); ?>
                    <?= form_error('inputAddress', '<div class="alert alert-warning">', '</div>'); ?>
                </div>
                <div class="row form-floating my-2 px-2">
                    <?= form_input(['id' => 'inputZipcode', 'name' => 'inputZipcode', 'class' => 'form-control mb-1', 'placeholder' => 'Code Postal'], set_value('inputZipcode', $zipCode)); ?>
                    <?= form_label('Code Postal :', '', ['for' => 'inputZipcode', 'class' => 'ms-1 fw-bold']); ?>
                    <?= form_error('inputZipcode', '<div class="alert alert-warning">', '</div>'); ?>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="row form-floating px-2">
                    <?= form_input(['id' => 'inputCity', 'name' => 'inputCity', 'class' => 'form-control mb-1', 'placeholder' => 'Ville'], set_value('inputCity', $city)); ?>
                    <?= form_label('Ville :', '', ['for' => 'inputCity', 'class' => 'ms-1 fw-bold']); ?>
                    <?= form_error('inputCity', '<div class="alert alert-warning">', '</div>'); ?>
                </div>
                <div class="row form-floating my-2 px-2">
                    <?= form_input(['id' => 'inputIdCard', 'name' => 'inputIdCard', 'class' => 'form-control mb-1', 'placeholder' => 'Carte identité n'], set_value('inputIdCard', $IdCard)); ?>
                    <?= form_label('Carte identité n° :', '', ['for' => 'inputIdCard', 'class' => 'ms-1 fw-bold']); ?>
                    <?= form_error('inputIdCard', '<div class="alert alert-warning">', '</div>'); ?>
                </div>
                <div class="row form-floating my-2 px-2">
                    <?= form_input(['id' => 'inputDriverLicense', 'name' => 'inputDriverLicense', 'class' => 'form-control mb-1', 'placeholder' => 'N° de permis'], set_value('inputDriverLicense', $driverLicense)); ?>
                    <?= form_label('N° de permis :', '', ['for' => 'inputDriverLicense', 'class' => 'ms-1 fw-bold']); ?>
                    <?= form_error('inputDriverLicense', '<div class="alert alert-warning">', '</div>'); ?>
                </div>
                <div class="row form-floating my-2 px-2">
                    <?= form_input(['type' => 'email', 'id' => 'inputEmail', 'name' => 'inputEmail', 'class' => 'form-control mb-1', 'placeholder' => 'Email'], set_value('inputEmail', $email)); ?>
                    <?= form_label('Email :', '', ['for' => 'inputEmail', 'class' => 'ms-1 fw-bold']); ?>
                    <?= form_error('inputEmail', '<div class="alert alert-warning">', '</div>'); ?>
                </div>
            </div>
        </div>
        <div class="row px-2 col-6 offset-3">
            <?= form_input(['type' => 'submit', 'class' => 'btn btn-success '], 'Enregistrer') ?>
        </div>
        <?= form_close() ?>
    </div>
</div>