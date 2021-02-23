<h3>Halaman Edit Produk</h3>

<?= form_open_multipart('produk/edit/' . $produk['produk_id']); ?>
<input type="hidden" name="produk_id" value="<?= $produk['produk_id']; ?>">

<label for="nama_produk">Nama Produk :</label><br>
<input type="text" name="nama_produk" value="<?= $produk['nama_produk']; ?>">
<?= form_error('nama_produk'); ?>
<br><br>

<label for="tipe">Tipe :</label><br>
<select name="tipe" id="tipe">
	<?php foreach ($tipe as $t) :  ?>

		<?php if ($t['tipe_id'] == $produk['tipe']) : ?>
			<option value="<?= $t['tipe_id']; ?>" selected><?= $t['tipe_id']; ?></option>
		<?php else : ?>
			<option value="<?= $t['tipe_id']; ?>"><?= $t['tipe_id']; ?></option>
		<?php endif; ?>
	<?php endforeach; ?>
</select>
<br><br>

<label for="harga">Harga :</label><br>
<input type="number" name="harga" value="<?= $produk['harga']; ?>">
<?= form_error('harga'); ?>
<br><br>

<label for="deskripsi">Deskripsi :</label><br>
<input type="text" name="deskripsi" value="<?= $produk['deskripsi']; ?>"><br>
<?= form_error('deskripsi'); ?>
<br><br>

<label for="gambar">Gambar :</label><br>
<img src="<?= base_url('uploads/produk/') . $produk['gambar']; ?>" width="100px" alt="">
<input type="file" name="gambar">
<?= $this->session->flashdata('upload_error'); ?>

<button type="submit">Ubah</button>

<?= form_close(); ?>