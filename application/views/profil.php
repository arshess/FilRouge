<div class="container-fluid container_user pt-3">
    <div class="container row bg-light ms-auto me-auto rounded">
        <div class="col-lg-6 my-5">
            <div class="row">
                <img id="profil-avatar" src="<?= base_url() . 'public/images/avatar/' . $avatar ?>" alt="avatar du profil">
            </div>

            <p class="row my-3">
                <span class="col-12 col-md-3 fw-bold">Nom de famille :</span>
                <span class="col-12 col-md-6"><?=$lastName?></span>
            </p>
            <p class="row my-3">
                <span class="col-12 col-md-3 fw-bold">Prénom :</span>
                <span class="col-12 col-md-6"><?=$firstName?></span>
            </p>
            <p class="row my-3">
            <span class="col-12 col-md-3 fw-bold">Adresse mail :</span>
                <span class="col-12 col-md-6"><?=$email?></span>
            </p>
        </div>

        <div class="col-lg-6  my-5 pt-2">

            <p class="row my-3">
                <span class="col-12 col-md-3 fw-bold">Date de naissance :</span>
                <span class="col-12 col-md-6"><?=$birthDate?></span>
            </p>
            <p class="row my-3">
                <span class="col-12 col-md-3 fw-bold">Adresse :</span>
                <span class="col-12 col-md-6"><?=$address?></span>
            </p>
            <p class="row my-3">
                <span class="col-12 col-md-3 fw-bold">Code Postal :</span>
                <span class="col-12 col-md-6"><?=$zipCode?></span>
            </p>
            <p class="row my-3">
                <span class="col-12 col-md-3 fw-bold">Ville :</span>
                <span class="col-12 col-md-6"><?=$city?></span>
            </p>
            <p class="row my-3">
                <span class="col-12 col-md-3 fw-bold">Carte identité n° :</span>
                <span class="col-12 col-md-6"><?=$IdCard?></span>
            </p>
            <p class="row my-3">
                <span class="col-12 col-md-3 fw-bold">N° de permis :</span>
                <span class="col-12 col-md-6"><?=$driverLicense?></span>
            </p>
        </div>
    </div>
    <div class="row"><a href="" class="btn btn-success col-lg-6 offset-lg-3 my-3">Modifier le profil</a></div>
</div>