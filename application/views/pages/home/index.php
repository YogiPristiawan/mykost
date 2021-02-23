<h3>Halaman Home</h3>

<table>
	<thead>
		<th>Nama Kamar</th>
		<th>Fasilitas</th>
		<th>Harga</th>
		<th>Deskripsi</th>
		<th>Gambar</th>
		<th>Status</th>
		<th></th>
	</thead>
	<tbody>
		<?php foreach ($produk as $p) : ?>
			<tr>
				<td><?= $p['nama_produk']; ?></td>
				<td><?= $p['fasilitas']; ?></td>
				<td><?= 'Rp. ' . number_format($p['harga'], 0, ',', '.'); ?></td>
				<td><?= $p['deskripsi']; ?></td>
				<td><img src="<?= base_url() . '/uploads/produk/' . $p['gambar']; ?>" alt="" width="100px"></td>
				<td style="color: red;"><?= $p['status'] == '1' ? "Booked" : "" ?></td>
				<td>
					<?php if ($p['status'] == '0') : ?>
						<a href="<?= base_url('produk/booking/' . $p['produk_id']); ?>">
							<button>Booking Sekarang</button>
						</a>
					<?php endif; ?>
				</td>
			</tr>
		<?php endforeach; ?>
	</tbody>
</table>