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

<style>
	body {
		background: #eee;
	}
</style>

<body>

	<nav class="navbar navbar-expand-lg navbar-light bg-light">
		<div class="container">

			<?php if (is_login()) : ?>
				<a href="<?= base_url('admin'); ?>" class="navbar-brand">ADMIN</a>
			<?php else : ?>
				<a href="<?= base_url('home'); ?>" class="navbar-brand">HOME</a>
			<?php endif; ?>

			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav ml-auto text-white">
					<li class="nav-item">
						<a class="<?= $this->uri->segment(1) == 'produk' ? 'active ' : ''; ?>nav-link" href="<?= base_url('produk'); ?>">Data Produk</a>
					</li>
					<li class="nav-item">
						<a class="<?= $this->uri->segment(1) == 'booking' ? 'active ' : ''; ?>nav-link" href="<?= base_url('booking'); ?>">Data Booking</a>
					</li>
					<li class="navitem">
						<a class="<?= $this->uri->segment(1) == 'payment' ? 'active ' : ''; ?>nav-link" href="<?= base_url('payment'); ?>">Data Payment</a>
					</li>
					<?php if (is_login()) : ?>
						<li class="nav-item">
							<a class="nav-link font-weight-bold" href="<?= base_url('auth/logout'); ?>" onclick="return confirm('Yakin ingin melakukan logout?');">LOGOUT</span></a>
						</li>
					<?php else : ?>
						<li class="nav-item">
							<a class="nav-link font-weight-bold"" href=" <?= base_url('auth/login'); ?>">LOGIN </span></a>
						</li>
					<?php endif; ?>
				</ul>
			</div>
		</div>
	</nav>