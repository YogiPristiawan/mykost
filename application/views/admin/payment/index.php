<div class="container bg-white rounded shadow p-4 mt-4">


	<?php if ($this->session->flashdata('message') == 'gagal') : ?>
		<div class="alert alert-danger m-auto" role="alert">
			<?= "Booking " . $this->session->flashdata('message') . " dibatalkan."; ?>
		</div>
	<?php elseif ($this->session->flashdata('message') == 'berhasil') : ?>
		<div class="alert alert-success m-auto" role="alert">
			<?= "Booking " . $this->session->flashdata('message') . " dibatalkan."; ?>
		</div>
	<?php endif; ?>
	<div class="text-center">
		<h3>Daftar Riwayat Pembayaran</h3>
	</div>
	<hr class="my-3">
	<div class="table-responsive">
		<table class="table table-striped mt-4 text-center">
			<thead class="thead-dark">
				<tr>
					<th class="align-middle">Invoice</th>
					<th class="align-middle">Tanggal</th>
					<th class="align-middle">Nama Kamar</th>
					<th class="align-middle">Nama Pemesan</th>
					<th class="align-middle">Jumlah</th>
					<th></th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($payment as $p) : ?>
					<tr>
						<td><?= $p['invoice']; ?></td>
						<td><?= $p['tanggal']; ?></td>
						<td><?= $p['nama_produk']; ?></td>
						<td><?= $p['nama_pemesan']; ?></td>
						<td><?= 'Rp. ' . number_format($p['jumlah'], 2, ',', '.'); ?></td>
						<td>
							<a href="<?= base_url('payment/detail/' . $p['invoice']); ?>" class="btn btn-info">Detail</a>
						</td>
					</tr>
				<?php endforeach; ?>
			</tbody>
		</table>
	</div>
</div>