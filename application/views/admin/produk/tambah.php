<div class="container bg-white rounded shadow p-4 mt-4 clearfix">
	<div class="container border p-5">
		<div class="text-center">
			<h3>Tambah Produk</h3>
		</div>
		<hr class="my-4">
		<?= form_open_multipart('produk/tambah'); ?>

		<div class="row">

			<div class="form-group col-md-6">
				<label for="nama_produk">Nama Produk :</label>
				<input type="text" name="nama_produk" class="form-control">
				<?= form_error('nama_produk'); ?>
			</div>

			<div class="form-group col-md-6">
				<label for="tipe">Tipe</label>
				<select name="tipe" id="tipe" class="form-control">
					<?php foreach ($tipe as $t) : ?>
						<option value="<?= $t['tipe_id']; ?>" required><?= $t['tipe_id']; ?></option>
					<?php endforeach; ?>
				</select>
			</div>
		</div>

		<div class="form-group">
			<label for="harga">Harga :</label>
			<input type="number" name="harga" class="form-control">
			<?= form_error('harga'); ?>
		</div>

		<div class="form-group">
			<label for="deskripsi">Deskripsi :</label><br>
			<textarea name="deskripsi" id="deskripsi" cols="30" rows="6" class="form-control"></textarea>
			<?= form_error('deskripsi'); ?>
		</div>

		<div class="form-group">
			<label for=" gambar">Gambar :</label><br>
			<input type="file" name="gambar" class="form-control-file mt-4" id="gambar">
			<?= $this->session->flashdata('upload_error'); ?>
		</div>

		<hr class="my-4">

		<button type="submit" class="btn btn-success float-right m-auto">Ubah</button>

		<?= form_close(); ?>
	</div>
</div>