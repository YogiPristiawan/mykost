<h3>Halaman Admin Produk</h3>

<a href="<?= base_url('produk/tambah'); ?>">
	<h4>Tambah Data Produk</h4>
</a>

<table>
	<thead>
		<th>Nama Kamar</th>
		<th>Fasilitas</th>
		<th>Harga</th>
		<th>Deskripsi</th>
		<th>Gambar</th>
		<th>Status</th>
		<th></th>
		<th></th>
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
					<a href="<?= base_url('produk/edit/') . $p['produk_id']; ?>">
						<button>Edit</button>
					</a>
				</td>
				<td>
					<a href="<?= base_url('produk/detail/') . $p['produk_id']; ?>">
						<button>Detail</button>
					</a>
				</td>
				<?php if ($p['status'] == '0') : ?>
					<td>
						<a href="<?= base_url('produk/delete/') . $p['produk_id']; ?>" onclick="return confirm('Konfirmasi hapus?');">
							<button>Delete</button>
						</a>
					</td>
				<?php endif; ?>
			</tr>
		<?php endforeach; ?>
	</tbody>
</table>