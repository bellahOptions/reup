<?php
session_start();
require_once '../config/database.php'; // adjust path as needed

// Check if user is logged in
if (!isset($_SESSION['user_id'])) {
    header("Location: ../login.php");
    exit;
}

// Update user's last active timestamp
try {
    $update = $connect->prepare("UPDATE users SET last_active = NOW() WHERE id = :id");
    $update->bindParam(":id", $_SESSION['user_id']);
    $update->execute();
} catch (PDOException $e) {
    // Log or handle error silently
}
?>
