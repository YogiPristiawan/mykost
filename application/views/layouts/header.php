<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?= $title; ?></title>

	<style>
		table,
		th,
		td {
			border: 1px solid black;
		}
	</style>
</head>
<nav>
	<div style="float: right;">
		<a href="<?= base_url('auth/login'); ?>">
			<h3>Login</h3>
		</a>
		<?php if (is_login()) : ?>
			<a href="<?= base_url('auth/logout'); ?>">
				<h3>Logout</h3>
			</a>
		<?php endif; ?>

	</div>
</nav>
<h5>Header</h5>

<?= $this->session->flashdata('message'); ?>