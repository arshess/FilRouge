<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="fr">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Loca Auto</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
	<link rel="stylesheet" href="<?= base_url() ?>public/style/style.css">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</head>

<body class="">
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		<div class="container-fluid">
			<a class="navbar-brand me-5" href="<?=base_url()?>">Location auto</a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
				<ul class="navbar-nav me-auto ">
					<li class="nav-item">
						<a class="nav-link ms-4" href="#">Nos véhicules</a>
					</li>
					<?php if ($this->session->userdata('email')) { ?>
						<li class="nav-item">
						<a class="nav-link ms-4" href="<?=base_url('User/showProfil')?>">Profil</a>
					</li>
					<li class="nav-item">
					<a class="nav-link" href="<?= base_url('Admin/showProfil') ?>" tabindex="-1" aria-disabled="true">Gestion Profils</a>
					</li>
					<li class="nav-item">
					<a class="nav-link" href="<?= base_url('Admin/showLocation') ?>" tabindex="-1" aria-disabled="true">Gestion Locations</a>
					</li>
					<li class="nav-item">
					<a class="nav-link" href="<?= base_url('Admin/showVehicle') ?>" tabindex="-1" aria-disabled="true">Gestion Véhicules</a>
					</li>



					<?php  } else { ?>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
								Connexion / Inscription
							</a>
							<ul class="dropdown-menu" aria-labelledby="navbarDropdown">
								<li><a class="dropdown-item" href="<?= base_url('User/connexion') ?>" tabindex="-1" aria-disabled="true">Connexion</a></li>

								<li><a class="dropdown-item" href="<?= base_url('User/inscription') ?>" tabindex="-1" aria-disabled="true">Inscription</a></li>
							</ul>
						</li>
					<?php } ?>
				</ul>
			</div>
		</div>
	</nav>
	<!-- <div class="container mt-4 p-3 bg-light"> -->
