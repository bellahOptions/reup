<?php
if (!isset($_SESSION['admin_id'])) {
    header("Location: login.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Admin Panel - ReUp</title>
  <link rel="stylesheet" href="styles.css"> <!-- Optional for styling -->
</head>
<body>
<header>
  <h2>ReUp Admin Panel</h2>
  <p>Welcome, <?= $_SESSION['admin_name']; ?> (<?= $_SESSION['admin_role']; ?>)</p>
  <a href="logout.php">Logout</a>
</header>
