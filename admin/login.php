<?php
session_start();
require_once '../config/Database.php';
require_once '../classes/Admin.php';

$db = new Database();
$connect = $db->connect();
$admin = new Admin($connect);

$error = "";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = trim($_POST['email']);
    $password = $_POST['password'];

    if ($admin->login($email, $password)) {
        header("Location: dashboard.php");
        exit;
    } else {
        $error = "Invalid credentials or suspended account.";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Admin Login</title>
</head>
<body>
  <h2>Admin Login</h2>
  <?php if ($error): ?>
    <p style="color:red;"><?php echo $error; ?></p>
  <?php endif; ?>
  <form method="post">
    <input type="email" name="email" placeholder="Email" required><br>
    <input type="password" name="password" placeholder="Password" required><br>
    <button type="submit">Login</button>
  </form>
</body>
</html>
