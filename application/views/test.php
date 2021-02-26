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
			<div class="card ml-md-5 my-5">
				<img src=" <?= base_url('uploads/produk/kamar_1.jpg'); ?>" alt="" class="card-image-top">
				<div class="card-body">
					<div class="card-title mt-4">
						<a href="">
							<h3 class="text-success">Kamar 1</h3>
						</a>
					</div>
					<h4 class="mt-3">Rp. 500.000,-</h4>
					<div class="card-text mt-4">
						<hr class="mt-4 mb-3">
						<p class="card-text">Keterangan : </p>
						<p class="card-text">Lokasi berada di lam, AC, Lemari pakaian, meja belajar.</p>
					</div>
					<div class="mb-4">
					</div>
					<div class="text-center btn-wrapper p-4">
						<hr class="my-3">
						<button data-whatever="satu" type="button" class="btn btn-primary booking" data-toggle="modal" data-target="#exampleModalCenter">
							Launch demo modal
						</button>
					</div>
				</div>
			</div>
			<div class="card ml-md-5 my-5">
				<img src=" <?= base_url('uploads/produk/kamar_1.jpg'); ?>" alt="" class="card-image-top">
				<div class="card-body">
					<div class="card-title mt-4">
						<a href="">
							<h3 class="text-success">Kamar 1</h3>
						</a>
					</div>
					<h4 class="mt-3">Rp. 500.000,-</h4>
					<div class="card-text mt-4">
						<hr class="mt-4 mb-3">
						<p class="card-text">Keterangan : </p>
						<p class="card-text">Lokasi berada di lam, AC, Lemari pakaian, meja belajar.</p>
					</div>
					<div class="mb-4">
					</div>
					<div class="text-center btn-wrapper p-4">
						<hr class="my-3">
						<button data-whatever="dua" type="button" class="btn btn-primary button" data-toggle="modal" data-target="#exampleModalCenter">
							Launch demo modal
						</button>
					</div>
				</div>
			</div>
			<div class="card ml-md-5 my-5">
				<img src=" <?= base_url('uploads/produk/kamar_1.jpg'); ?>" alt="" class="card-image-top">
				<div class="card-body">
					<div class="card-title mt-4">
						<a href="">
							<h3 class="text-success">Kamar 1</h3>
						</a>
					</div>
					<h4 class="mt-3">Rp. 500.000,-</h4>
					<div class="card-text mt-4">
						<hr class="mt-4 mb-3">
						<p class="card-text">Keterangan : </p>
						<p class="card-text"> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore quisquam, facere eligendi excepturi magni, velit provident cupiditate maxime iusto minima animi ducimus sit unde asperiores? Fugit eligendi ullam perferendis dolorem!locale_filter_matches Lokasi berada di lam, AC, Lemari pakaian, meja belajar.</p>
					</div>
					<div class="mb-4">
					</div>
					<div class="text-center btn-wrapper p-4">
						<hr class="my-3">
						<button data-whatever="tiga" type="button" class="btn btn-primary button" data-toggle="modal" data-target="#exampleModalCenter">
							Launch demo modal
						</button>
					</div>
				</div>
			</div>
			<div class="card ml-md-5 my-5">
				<img src=" <?= base_url('uploads/produk/kamar_1.jpg'); ?>" alt="" class="card-image-top">
				<div class="card-body">
					<div class="card-title mt-4">
						<a href="">
							<h3 class="text-success">Kamar 1</h3>
						</a>
					</div>
					<h4 class="mt-3">Rp. 500.000,-</h4>
					<div class="card-text my-4">
						<hr class="mt-4 mb-3">

						<p class="card-text">Keterangan : </p>
						<p class="card-text">lorem lpremlorem Lorem ipsum dolor sit, amet consectetur adipisicing elit. Repellat natus autem dolores magnam debitis rerum. Veritatis inventore provident magni laborum quae earum unde commodi minus sed necessitatibus, fugit reprehenderit perspiciatis? Lokasi berada di lam, AC, Lemari pakaian, meja belajar.</p>
					</div>
					<div class="text-center btn-wrapper p-4">
						<hr class="my-3">
						<button data-whatever="empat" type="button" class="btn btn-primary button" data-toggle="modal" data-target="#exampleModalCenter">
							Launch demo modal
						</button>
					</div>
				</div>


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
								<input type="text" class="form-control" id="recipient-name">
								<!-- ----------------------------- -->

								<!-- ----------------------------- -->
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
								<a href="" class="btn btn-success">Kirim</a>
							</div>
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