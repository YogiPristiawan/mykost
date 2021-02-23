<h3>Halaman Detail Pembayaran</h3>

<table>
	<thead>
		<tr>
			<th>Invoice</th>
			<th>tanggal</th>
			<th>Nama Kamar</th>
			<th>Nama Pemesan</th>
			<th>Alamat</th>
			<th>No. Telp</th>
			<th>Jumlah</th>
			<th>Bukti Transfer</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td><?= $payment['invoice']; ?></td>
			<td><?= $payment['tanggal']; ?></td>
			<td><?= $payment['nama_produk']; ?></td>
			<td><?= $payment['nama_pemesan']; ?></td>
			<td><?= $payment['alamat']; ?></td>
			<td><?= $payment['no_telp']; ?></td>
			<td><?= $payment['jumlah']; ?></td>
			<td><img src="<?= base_url('uploads/payment/' . $payment['bukti_tf']); ?>" width="100px" alt="">
		</tr>
	</tbody>
</table>