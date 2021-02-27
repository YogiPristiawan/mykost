<div class="container bg-white rounded shadow p-4 mt-4 clearfix">
	<div class="container border p-5">
		<div class="text-center">
			<h3>Edit Produk</h3>
		</div>
		<hr class="my-4">
		<?= form_open_multipart('produk/edit/' . $produk['produk_id']); ?>
		<input type="hidden" name="produk_id" value="<?= $produk['produk_id']; ?>">

		<div class="row">

			<div class="form-group col-md-6">
				<label for="nama_produk">Nama Produk :</label>
				<input type="text" name="nama_produk" value="<?= $produk['nama_produk']; ?>" class="form-control">
				<?= form_error('nama_produk'); ?>
			</div>

			<div class="form-group col-md-6">
				<label for="tipe">Tipe :</label>
				<select name="tipe" id="tipe" class="form-control">
					<?php foreach ($tipe as $t) :  ?>
						<?php if ($t['tipe_id'] == $produk['tipe']) : ?>
							<option value="<?= $t['tipe_id']; ?>" selected><?= $t['tipe_id']; ?></option>
						<?php else : ?>
							<option value="<?= $t['tipe_id']; ?>"><?= $t['tipe_id']; ?></option>
						<?php endif; ?>
					<?php endforeach; ?>
				</select>
			</div>

		</div>

		<div class="form-group">

			<label for="harga">Harga :</label>
			<input type="number" name="harga" value="<?= $produk['harga']; ?>" class="form-control">
			<?= form_error('harga'); ?>

		</div>

		<div class="form-group">
			<label for="deskripsi">Deskripsi :</label><br>
			<textarea name="deskripsi" id="deskripsi" cols="30" rows="6" class="form-control"><?= $produk['deskripsi']; ?></textarea>
			<?= form_error('deskripsi'); ?>
		</div>

		<div class="form-group">

			<label for=" gambar">Gambar :</label><br>
			<img src="<?= base_url('uploads/produk/') . $produk['gambar']; ?>" width="150px" alt="">
			<input type="file" name="gambar" class="form-control-file mt-4">
			<?= $this->session->flashdata('upload_error'); ?>

		</div>

		<hr class="my-4">

		<button type="submit" class="btn btn-success float-right m-auto">Ubah</button>

		<?= form_close(); ?>
	</div>
</div>