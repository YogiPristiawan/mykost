<h3>Daftar booking produk</h3>

<table>
	<thead>
		<th>Tanggal</th>
		<th>Nama Produk</th>
		<th>Gambar</th>
		<th>Bukti Pembayaran</th>
		<th></th>
	</thead>
	<tbody>
		<?php foreach ($booking as $b) : ?>
			<tr>
				<td><?= $b['booking_at']; ?></td>
				<td><?= $b['nama_produk']; ?></td>
				<td><img src="<?= base_url('uploads/produk/' . $b['gambar']); ?>" width="100px" alt=""></td>
				<td><a href="<?= base_url('payment/detail/' . $b['pay_invoice']); ?>"><?= $b['pay_invoice']; ?></a></td>
				<td>
					<form action="<?= base_url('booking/delete'); ?>" method="POST">
						<input type="hidden" name="produk_id" value="<?= $b['produk_id']; ?>">
						<input type="hidden" name="booking_id" value="<?= $b['booking_id']; ?>">
						<button type="submit" name="submit" onclick="return confirm('Konfirmasi Hapus?');">Hapus</button>
					</form>
				</td>
			</tr>
		<?php endforeach; ?>
	</tbody>
</table>