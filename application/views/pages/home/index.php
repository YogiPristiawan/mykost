<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>

	<link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css') ?>">
	<link rel="stylesheet" href="<?= base_url('assets/css/mystyle.css'); ?>">
</head>

<body>
	<div class="jumbotron jumbotron-fluid pt-0">
		<div class="jumbotron-bg"></div>
		<div class="container">
			<nav class="navbar navbar-expand-lg navbar-dark">
				<a href="<?= base_url('home'); ?>" class="navbar-brand">MYKOST</a>

				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>

				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav ml-auto text-white">
						<li class="nav-item">
							<a class="nav-link text-white" href="#">LOGIN <span class="sr-only">(current)</span></a>
						</li>
					</ul>
				</div>

			</nav>
			<div class="container text-center text-white">
				<h1 class="display-4 font-weight-bold">welcome!</h1>
				<p class="lead">Kini pesan kost jadi lebih mudah...</p>
				<hr class="my-4">
				<a class="btn btn-primary btn-lg" href="#content" role="button">GO</a>
			</div>
		</div>
	</div>

	<div class="container">
		<div class="d-flex justify-content-center flex-wrap" id="content">
			<?php foreach ($produk as $p) : ?>
				<div class="card ml-md-5 my-5">
					<img src=" <?= base_url('uploads/produk/kamar_1.jpg'); ?>" alt="" class="card-image-top">
					<div class="card-body">
						<div class="card-title mt-4 d-flex">
							<a href="">
								<h3 class="text-success"><?= $p['nama_produk']; ?></h3>
							</a>
							<h3 class="text-primary ml-auto"><?= $p['tipe']; ?></h3>
						</div>
						<h4 class="mt-3"><?= 'Rp. ' . number_format($p['harga'], 2, ',', '.'); ?></h4>
						<div class="card-text mt-4">
							<hr class="mt-4 mb-3">
							<p class="card-text">Keterangan : </p>
							<p class="card-text"><?= $p['deskripsi']; ?></p>
						</div>
						<div class="mb-4">
						</div>
						<div class="text-center btn-wrapper p-4">
							<hr class="my-3">
							<?php if ($p['status'] == 1) : ?>
								<button disabled ype="button" class="btn btn-danger booking" data-toggle="modal" data-target="#exampleModalCenter">
									Dipesan
								</button>
							<?php else : ?>
								<button type="button" data-invoice="<?= date('ymd') . $p['produk_id']; ?>" data-tanggal="<?= date('Y-m-d'); ?>" data-harga="<?= 'Rp. ' . number_format($p['harga'], 2, ',', '.'); ?>" data-nama="<?= $p['nama_produk']; ?>" data-id="<?= $p['produk_id']; ?>" class="btn btn-primary booking" data-toggle="modal" data-target="#exampleModalCenter">
									Booking
								</button>
							<?php endif; ?>
						</div>
					</div>
				</div>
			<?php endforeach; ?>

			<!-- Modal -->
			<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" data-backdrop="static">
				<div class="modal-dialog modal-dialog-centered" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title ml-auto" id="exampleModalCenterTitle">Kamar 1</h5>
							<button type="button" class="close ml-auto" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body">
							<h4 class="text-info"></h4>
							<?= $this->session->flashdata('upload_error'); ?>

							<?= form_open_multipart('produk/booking'); ?>

							<input type="text" name="id" class="form-control" id="id">
							<input type="text" name="nama_produk" class="form-control" id="nama_produk">
							<!-- ----------------------------- -->
							<div class="form-group">
								<label for="invoice">Invoice : </label>
								<input type="text" name="invoice" class="form-control" id="invoice" readonly>
							</div>
							<div class="form-group">
								<label for="tanggal">Tanggal : </label>
								<input type="text" name="tanggal" class="form-control" id="tanggal" readonly>
							</div>
							<div class="form-group">
								<label for="nama_pemesan">Nama Pemesan : </label>
								<input type="text" name="nama_pemesan" class="form-control" id="nama_pemesan">
							</div>
							<div class="form-group">
								<label for="alamat">Alamat : </label>
								<input type="text" name="alamat" class="form-control" id="alamat">
							</div>
							<div class="form-group">
								<label for="no_telp">No. Telepon : </label>
								<input type="number" name="no_telp" class="form-control" id="no_telp">
							</div>
							<div class="form-group">
								<label for="jumlah">Jumlah Bayar : </label>
								<input type="number" name="jumlah" class="form-control" id="jumlah">
							</div>
							<div class="form-group mb-4">
								<label for="bukti_tf">Bukti Transfer : </label>
								<input type="file" name="bukti_tf" class="form-control-file" id="bukti_tf">
							</div>
							<!-- ----------------------------- -->
							<div class="form-group modal-footer mb-0">
								<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
								<!-- <button type="submit" class="btn btn-success">Kirim</button> -->
								<input type="submit" class="btn btn-success" value="Kirim">
							</div>
						</div>
						<?= form_close(); ?>
					</div>
				</div>
			</div>
		</div>
	</div>





	<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
	<script src="<?= base_url('assets/js/myscript.js'); ?>"></script>

	<!-- <script src=" https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script> -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="<?= base_url('assets/js/bootstrap.min.js'); ?>"></script>
</body>

</html>