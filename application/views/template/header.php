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
	<link rel="stylesheet" href="<?= base_url() ?>public/style.css">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
</head>

<body style="background : #212529">
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
		<div class="container">
			<ul class="navbar-nav">
				<li class="nav-item">
					<a class="nav-link" aria-current="page" href="<?= site_url('/Patient/index') ?>">Gestion des patients</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" aria-current="page" href="<?= site_url('/rendezvous/index') ?>">Gestion des rendez-Vous</a>
				</li>
			</ul>

		</div>
	</nav>
	<div class="container mt-4 p-3 bg-light">