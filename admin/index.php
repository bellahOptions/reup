<?php
require_once '../	config/Database.php';
//$db = new Database();
//$connect = $db->connect();

$password = password_hash("admin123", PASSWORD_DEFAULT);

//$stmt = $connect->prepare("INSERT INTO admins (full_name, email, password, role) VALUES (?, ?, ?, ?)");
//$stmt->execute(["Ahmed Bello", "admin@reup.com", $password, "super_admin"]);

echo "Admin created!";
?>
