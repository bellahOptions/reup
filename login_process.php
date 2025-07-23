<?php
	require_once "classes/User.php";

	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		$email = $_POST['email'];
		$password = $_POST['password'];

		$user = new User();

		if ($user->login($email,$password)) {
			echo "<script>alert('Login success')</script>";
			header("location:dashboard.php");
			exit;
		}else{
			echo "<script>alert('Invalid Login')</script>";
			header("location:login.php");
			exit;
		}
	}
?>