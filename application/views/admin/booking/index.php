<div class="container bg-white rounded shadow p-4 mt-4">

	<?php if ($this->session->flashdata() != NULL) : ?>
		<?= $this->session->flashdata('message'); ?>
	<?php endif; ?>

	<div class="text-center">
		<h3>Daftar Booking</h3>
	</div>
	<hr class="my-3">

	<div class="table-responsive">
		<table class="table table-striped mt-4">
			<thead class="text-center thead-dark">
				<tr>
					<th class="align-middle">Tanggal</th>
					<th class="align-middle">Nama Produk</th>
					<th class="align-middle">Gambar</th>
					<th class="align-middle">Bukti Pembayaran</th>
					<th class="align-middle">Aksi</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($booking as $b) : ?>
					<tr>
						<td class="align-middle"><?= $b['booking_at']; ?></td>
						<td class="align-middle"><?= $b['nama_produk']; ?></td>
						<td class="align-middle"><img src="<?= base_url() . '/uploads/produk/' . $b['gambar']; ?>" alt="" width="100px"></td>
						<td class="align-middle"><a href="<?= base_url('payment/detail/' . $b['pay_invoice']); ?>"><?= $b['pay_invoice']; ?></td>
						<td class="d-flex">
							<a href="<?= base_url('booking/delete/' . $b['produk_id'] . "/" . $b['booking_id']); ?>" onclick="return confirm('Konfirmasi hapus?');" class="btn btn-danger btn-sm mr-2">Hapus</a>
						</td>
					</tr>
				<?php endforeach; ?>
			</tbody>
		</table>
	</div>
</div>