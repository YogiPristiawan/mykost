<div class="container bg-white rounded shadow p-4 mt-4">


	<!-- ALERT -->
	<?php if ($this->session->flashdata() != NULL) : ?>
		<?= $this->session->flashdata('message'); ?>
	<?php endif; ?>

	<div class="text-center">
		<h3>Daftar Produk</h3>
	</div>
	<hr class="my-3">
	<a href="<?= base_url('produk/tambah'); ?>" class="btn btn-primary mt-4">
		<span class="font-weight-bold">+</span> Tambah data produk
	</a>
	<div class="table-responsive">
		<table class="table table-striped mt-4">
			<thead class="text-center thead-dark">
				<tr>
					<th class="align-middle">Nama Kamar</th>
					<th class="align-middle">Fasilitas</th>
					<th class="align-middle">Harga</th>
					<th class="align-middle">Deskripsi</th>
					<th class="align-middle">Gambar</th>
					<th class="align-middle">Status</th>
					<th class="align-middle">Aksi</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($produk as $p) : ?>
					<tr>
						<td class="align-middle"><?= $p['nama_produk']; ?></td>
						<td class="align-middle"><?= $p['fasilitas']; ?></td>
						<td class="align-middle"><?= 'Rp. ' . number_format($p['harga'], 0, ',', '.'); ?></td>
						<td class="align-middle"><?= $p['deskripsi']; ?></td>
						<td class="align-middle"><img src="<?= base_url() . '/uploads/produk/' . $p['gambar']; ?>" alt="" width="100px"></td>
						<td class="align-middle font-weight-bold <?= $p['status'] == '1' ? 'text-danger' : 'text-success'; ?>"><?= $p['status'] == '1' ? "Booked" : "Kosong" ?></td>
						<td class="d-flex">
							<a href="<?= base_url('produk/edit/') . $p['produk_id']; ?>" class="btn btn-warning btn-sm mr-2">Edit</a>
							<a href="<?= base_url('produk/detail/') . $p['produk_id']; ?>" class="btn btn-info btn-sm mr-2">Detail</a>
							<?php if ($p['status'] == '0') : ?>
								<a href="<?= base_url('produk/delete/') . $p['produk_id']; ?>" onclick="return confirm('Konfirmasi hapus?');" class="btn btn-danger btn-sm mr-2">Hapus</a>
							<?php endif; ?>

						</td>


					</tr>
				<?php endforeach; ?>
			</tbody>
		</table>
	</div>
</div>