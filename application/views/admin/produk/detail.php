<h3>Halaman Detail Produk</h3>

<table>
	<thead>
		<th>Nama Kamar</th>
		<th>Fasilitas</th>
		<th>Harga</th>
		<th>Deskripsi</th>
		<th>Gambar</th>
		<th>Status</th>
	</thead>
	<tbody>

		<tr>
			<td><?= $produk['nama_produk']; ?></td>
			<td><?= $produk['fasilitas']; ?></td>
			<td><?= 'Rp. ' . number_format($produk['harga'], 0, ',', '.'); ?></td>
			<td><?= $produk['deskripsi']; ?></td>
			<td><img src="<?= base_url() . '/uploads/produk/' . $produk['gambar']; ?>" alt="" width="100px"></td>
			<td style="color: red;"><?= $produk['status'] == '1' ? "Booked" : "" ?></td>
		</tr>

	</tbody>
</table>