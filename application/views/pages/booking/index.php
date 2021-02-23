<h3>Halaman Booking</h3>

<h4>Nama Kamar :</h4>
<p style="color: red;"><?= $produk['nama_produk']; ?></p>

<h4>Harga :</h4>
<p style="color: red;"><?= 'Rp. ' . number_format($produk['harga'], 2, ',', '.'); ?></p>

<?= form_open_multipart('produk/booking/' . $produk['produk_id']); ?>

<input type="hidden" name="produk_id" value="<?= $produk['produk_id']; ?>">
<input type="hidden" name="nama_produk" value="<?= $produk['nama_produk']; ?>">

<label for="invoice">Invoice:</label><br>
<input type="text" name="invoice" value="<?= $invoice; ?>" readonly>
<br><br>

<label for="tanggal">Tanggal</label><br>
<input type="text" name="tanggal" value="<?= date('Y-m-d'); ?>" readonly>
<br><br>

<label for="nama_pemesan">Nama Pemesan</label><br>
<input type="text" name="nama_pemesan">
<?= form_error('nama_pemesan'); ?>
<br><br>

<label for="alamat">Alamat</label><br>
<input type="text" name="alamat">
<?= form_error('alamat'); ?>
<br><br>

<label for="no_telp">No. Telepon</label><br>
<input type="number" name="no_telp">
<?= form_error('no_telp'); ?>
<br><br>

<label for="jumlah">Jumlah Bayar</label><br>
<input type="number" name="jumlah">
<?= form_error('jumlah'); ?>
<br><br>

<label for="bukti_tf">Upload Bukti Transfer</label><br>
<input type="file" name="bukti_tf">
<?= $this->session->flashdata('upload_error'); ?>
<br><br>

<button type="submit" name="submit">Kirim</button>

<?= form_close(); ?>