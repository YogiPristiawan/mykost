<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?= $title; ?></title>

	<link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css') ?>">
	<link rel="stylesheet" href="<?= base_url('assets/css/mystyle.css'); ?>">
	<!-- font -->
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Mulish&display=swap" rel="stylesheet">

	<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
</head>

<body>
	<div class="jumbotron jumbotron-fluid pt-0">
		<div class="jumbotron-bg"></div>
		<div class="container">
			<nav class="navbar navbar-expand-lg navbar-dark">
				<a href="<?= base_url('home'); ?>" class="navbar-brand"><img src="<?= base_url('assets/img/logo.png'); ?>" alt="" width="130px"></a>

				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>

				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav ml-auto text-white">

						<?php if (is_login()) : ?>
							<li class="nav-item">
								<a class="nav-link text-white" href="<?= base_url('auth/logout'); ?>">LOGOUT<span class="sr-only">(current)</span></a>
							</li>
						<?php else : ?>
							<li class="nav-item">
								<a class="nav-link text-white" href="<?= base_url('auth/login'); ?>">LOGIN <span class="sr-only">(current)</span></a>
							</li>
						<?php endif; ?>
					</ul>
				</div>

			</nav>
			<div class="container text-center text-white">
				<h1 class="display-4 font-weight-bold">welcome!</h1>
				<p class="lead">Kini pesan kost jadi lebih mudah...</p>
				<?php if ($this->uri->segment(1) == 'home') : ?>
					<hr class="my-4">
					<a class="btn btn-primary btn-lg" href="#content" role="button">GO</a>
				<?php endif; ?>
			</div>
		</div>
	</div>