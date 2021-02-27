<div class="container box">
	<div class="m-auto bg-white rounded shadow p-4 mt-4">
		<div class="text-center">
			<img src="<?= base_url() . '/uploads/payment/' . $payment['bukti_tf']; ?>" class="mw-100">
		</div>

		<hr class="my-5">


		<table class="table table-striped col-md-10 m-auto">

			<tr>
				<td>Invoice</td>
				<td>:</td>
				<td><?= $payment['invoice']; ?></td>
			</tr>
			<tr>
				<td>Tanggal</td>
				<td>:</td>
				<td><?= $payment['tanggal']; ?></td>
			</tr>
			<tr>
				<td>Nama Kamar</td>
				<td>:</td>
				<td><?= $payment['nama_produk']; ?></td>
			</tr>

			<tr>
				<td>Nama Pemesan</td>
				<td>:</td>
				<td><?= $payment['nama_pemesan']; ?></td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td>:</td>
				<td><?= $payment['alamat'] ?></td>
			</tr>
			<tr>
				<td>No. Telp</td>
				<td>:</td>
				<td><?= $payment['no_telp'] ?></td>
			</tr>
			<tr>
				<td>Jumlah</td>
				<td>:</td>
				<td><?= 'Rp. ' . number_format($payment['jumlah'], 2, ',', '.'); ?></td>
			</tr>

		</table>

	</div>
</div>