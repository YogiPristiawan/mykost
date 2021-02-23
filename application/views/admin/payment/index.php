<h3>Halaman Riwayat Pembayaran</h3>

<table>
	<thead>
		<tr>
			<th>Invoice</th>
			<th>tanggal</th>
			<th>Nama Kamar</th>
			<th>Nama Pemesan</th>
			<th>Jumlah</th>
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
				<td><?= $p['jumlah']; ?></td>
				<td>
					<a href="<?= base_url('payment/detail/' . $p['invoice']); ?>"><button>Detail</button></a>
				</td>
			</tr>
		<?php endforeach; ?>
	</tbody>
</table>