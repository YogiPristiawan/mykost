<h4>Form Login</h4>

<form action="<?= base_url('auth/login'); ?>" method="POST">
	<label for="email">Email :</label><br>
	<input type="text" name="email">
	<br><br>

	<label for="password">Password :</label><br>
	<input type="password" name="password">
	<br><br>

	<button type="submit" name="submit">Login</button>

</form>