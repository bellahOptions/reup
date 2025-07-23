<?php
require_once '../../config/Database.php';

$db = new Database();
$connect = $db->connect();

$minutes = 5; // Define "active" time frame (last 5 minutes)
$sql = "SELECT full_name, email, last_active FROM users WHERE last_active >= (NOW() - INTERVAL $minutes MINUTE)";
$stmt = $connect->prepare($sql);
$stmt->execute();

$users = $stmt->fetchAll(PDO::FETCH_ASSOC);
echo json_encode($users);
