<div class="container">

	<!-- tampilkan jika upload gambar error -->
	<?php if ($this->session->flashdata('upload_error') !== NULL) : ?>
		<div class="alert alert-danger m-auto" role="alert">
			<?= $this->session->flashdata('upload_error'); ?>
		</div>
	<?php endif; ?>

	<!-- alert jika sukses atau gagal -->
	<?php if ($this->session->flashdata() != NULL) : ?>
		<?= $this->session->flashdata('message'); ?>
	<?php endif; ?>

	<div class="d-flex justify-content-center flex-wrap" id="content">
		<?php foreach ($produk as $p) : ?>
			<div class="card ml-md-5 my-5">
				<img src=" <?= base_url('uploads/produk/' . $p['gambar']); ?>" alt="" class="card-image-top">
				<div class="card-body">
					<div class="card-title mt-4 d-flex">
						<a href="<?= base_url('produk/detail/' . $p['produk_id']); ?>">
							<h3 class="text-success font-weight-bold"><?= $p['nama_produk']; ?></h3>
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
							<button disabled ype="button" class="btn btn-success booking" data-toggle="modal" data-target="#exampleModalCenter">
								Dipesan
							</button>
						<?php else : ?>
							<button type="button" data-invoice="<?= date('ymds') . $p['produk_id']; ?>" data-tanggal="<?= date('Y-m-d'); ?>" data-harga="<?= 'Rp. ' . number_format($p['harga'], 2, ',', '.'); ?>" data-nama="<?= $p['nama_produk']; ?>" data-id="<?= $p['produk_id']; ?>" class="btn btn-primary booking" data-toggle="modal" data-target="#exampleModalCenter">
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
						<?= form_open_multipart('produk/booking'); ?>

						<input type="hidden" name="produk_id" class="form-control" id="id">
						<input type="hidden" name="nama_produk" class="form-control" id="nama_produk">
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
							<input type="text" name="nama_pemesan" class="form-control" id="nama_pemesan" required>
						</div>
						<div class="form-group">
							<label for="alamat">Alamat : </label>
							<input type="text" name="alamat" class="form-control" id="alamat" required>
						</div>
						<div class="form-group">
							<label for="no_telp">No. Telepon : </label>
							<input type="number" name="no_telp" class="form-control" id="no_telp" required>
						</div>
						<div class="form-group">
							<label for="jumlah">Jumlah Bayar : </label>
							<input type="number" name="jumlah" class="form-control" id="jumlah" required>
						</div>
						<div class="form-group mb-4">
							<label for="bukti_tf">Bukti Transfer : </label>
							<input type="file" name="bukti_tf" class="form-control-file" id="bukti_tf" required>
						</div>
						<!-- ----------------------------- -->
						<div class="form-group modal-footer mb-0">
							<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
							<button type="submit" class="btn btn-success">Kirim</button>
						</div>
					</div>
					<?= form_close(); ?>
				</div>
			</div>
		</div>
	</div>
</div>