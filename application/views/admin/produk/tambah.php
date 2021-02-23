<h3>Halaman Tambah Produk</h3>

<?= form_open_multipart('produk/tambah'); ?>

<label for="nama_produk">Nama Produk</label><br>
<input type="text" name="nama_produk">
<?= form_error('nama_produk'); ?>
<br><br>

<select name="tipe" id="">
	<?php foreach ($tipe as $t) : ?>
		<option value="<?= $t['tipe_id']; ?>" required><?= $t['tipe_id']; ?></option>
	<?php endforeach; ?>
</select>
<br><br>

<label for="harga">Harga</label><br>
<input type="number" name="harga">
<?= form_error('harga'); ?>
<br><br>

<label for="deskripsi">Deskripsi</label><br>
<input type="text" name="deskripsi">
<?= form_error('deskripsi'); ?>
<br><br>

<label for="gambar">Gambar</label><br>
<input type="file" name="gambar">
<br><br>

<button type="submit">Tambah</button>
<?= form_close(); ?>