<?php
	require 'includes/header.php';
	?>
	<link rel="stylesheet" type="text/css" href="./assets/styles/login.css">
	<div id="login-body">
		<div class="page-conent container">
			<div class="row">
				<div class="col-sm-12 col-md-6 col-lg-6 slide-content">
					<!--Slide show here hide on mobile -->
					<div id="slideshow">
  						<img src="assets/images/reup-banners-01.png" class="active" alt="Image 1">
  						<img src="assets/images/reup-banners-02.png" alt="Image 2">
					</div>
					<script>
  						const images = document.querySelectorAll('#slideshow img');
  						let current = 0;

  						setInterval(() => {
  						  images[current].classList.remove('active');
  						  current = (current + 1) % images.length;
  						  images[current].classList.add('active');
  						}, 3000); // 3 seconds
					</script>
				</div>
				<div class="col-sm-12 col-md-6 col-lg-6 login-content">
					<img src="assets/images/reup-03.svg" width="100px">
	<h3 class="mt-4">Login to Reup</h3>
	<form action="login_process.php" method="post">
		<input type="email" class="reup-login-input" name="email" placeholder="Email Address" required=""><br>
		<input type="password" class="reup-login-input" name="password" placeholder="password"><br>
		<button type="submit" class="btn reup-login-submit">Login</button>
		<p class="mt-2"><a href="forgot-password.php">Resset Password</a></p>
		<p class="mt-2">Don't have an account yet? <a href="register.php">Create an account</a></p>
	</form>
</div>
</div>
</div>
<?php	require 'includes/footer.php';	?>