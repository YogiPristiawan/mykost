<div class="container box">
	<div class="m-auto bg-white rounded shadow p-4 mt-4">
		<div class="text-center">
			<img src="<?= base_url() . '/uploads/produk/' . $produk['gambar']; ?>" class="mw-100">
		</div>

		<hr class="my-5">

		<h4 class="col-md-10 mx-auto my-3">Detail Produk : </h4>
		<table class="table table-light col-md-9 mx-auto">

			<tr>
				<td>Nama</td>
				<td>:</td>
				<td><?= $produk['nama_produk']; ?></td>
			</tr>
			<tr>
				<td>Tipe</td>
				<td>:</td>
				<td><?= $produk['tipe']; ?></td>
			</tr>
			<tr>
				<td>Harga</td>
				<td>:</td>
				<td><?= 'Rp. ' . number_format($produk['harga'], 2, ',', '.'); ?></td>
			</tr>
			<tr>
				<td>Fasilitas</td>
				<td>:</td>
				<td><?= $produk['fasilitas']; ?></td>
			</tr>
			<tr>
				<td>Keterangan</td>
				<td>:</td>
				<td><?= $produk['deskripsi']; ?></td>
			</tr>
			<tr>
				<td>Status</td>
				<td>:</td>
				<td><?= $produk['status'] == '1' ? "BOOKED" : "KOSONG"; ?></td>
			</tr>
		</table>

		<?php if (isset($booking)) : ?>
			<hr class="my-5">
			<h4 class="col-md-10 mx-auto my-3">Dipesan oleh : </h4>
			<table class="table table-light col-md-9 mx-auto">

				<tr>
					<td>Nama</td>
					<td>:</td>
					<td><?= $booking['nama_pemesan']; ?></td>
				</tr>
				<tr>
					<td>Alamat</td>
					<td>:</td>
					<td><?= $booking['alamat']; ?></td>
				</tr>
				<tr>
					<td>No. Telp</td>
					<td>:</td>
					<td><?= $booking['no_telp']; ?></td>
				</tr>
				<tr>
					<td>Jumlah</td>
					<td>:</td>
					<td><?= 'Rp. ' . number_format($booking['jumlah'], 2, ',', '.'); ?></td>
				</tr>
				<tr>
					<td>Bukti Transfer</td>
					<td>:</td>
					<td><img src="<?= base_url('uploads/payment/' . $booking['bukti_tf']); ?>" alt="" width="200px"></td>
				</tr>
			</table>
		<?php endif; ?>

	</div>
</div>