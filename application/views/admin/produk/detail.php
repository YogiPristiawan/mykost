<div class="container box">
	<div class="m-auto bg-white rounded shadow p-4 mt-4">
		<div class="text-center">
			<img src="<?= base_url() . '/uploads/produk/' . $produk['gambar']; ?>" class="mw-100">
		</div>

		<hr class="my-5">


		<table class="table table-striped col-md-10 m-auto">

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

	</div>
</div>