<div class="col box">
	<div class="mx-auto border col-md-6 col-sm-10 shadow p-4 bg-white">
		<?php if ($this->session->flashdata()) : ?>
			<div class="alert alert-warning m-auto" role="alert">
				<?= $this->session->flashdata('message'); ?>
			</div>
		<?php endif; ?>
		<form action="" method="POST">
			<div class="form-group">
				<label for="username">Email : </label>
				<input type="text" name="email" class="form-control" id="username">
			</div>
			<div class="form-group">
				<label for="password">Password : </label>
				<input type="password" name="password" class="form-control" id="password">
			</div>

			<button type="submit" name="submit" class="btn btn-block btn-primary mt-5">Login</button>

		</form>
	</div>
</div>