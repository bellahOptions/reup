<?php
	require 'includes/header.php';
	?>
	<link rel="stylesheet" type="text/css" href="./assets/styles/login.css">
	<div id="login-body">
		<div class="page-conent container">
				<div class="login-content">
					<img src="assets/images/reup-03.svg" width="100px">
	<h3 class="mt-4">Create an account</h3>
	<form action="login_process.php" method="post">
		<input type="text" class="reup-login-input" name="fname" placeholder="Your Full name" required=""><br><small class="text-danger">Please enter your correct government name for KYC reasons</small><br>
		<input type="email" class="reup-login-input" name="email" placeholder="Email Address" required=""><br>
		<input type="password" class="reup-login-input" name="password" placeholder="password"><br>
		<input type="password" class="reup-login-input" name="re-password" placeholder="onfirm password"><br>
		<button type="submit" class="btn reup-login-submit">Login</button>
		<p class="mt-2"><a href="#">Resset Password</a></p>
		<p class="mt-2">Don't have an account yet? <a href="register.php">Create an account</a></p>
	</form>
</div>
</div>
<?php	require 'includes/footer.php';	?>