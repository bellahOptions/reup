<?php
require_once "config/Database.php";

$db = new Database();
$conn = $db->connect();

if (isset($_GET['token'])) {
    $token = $_GET['token'];

    $sql = "SELECT * FROM users WHERE verification_token = :token LIMIT 1";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(":token", $token);
    $stmt->execute();

    if ($stmt->rowCount() > 0) {
        $update = "UPDATE users SET email_verified = 1, verification_token = NULL WHERE verification_token = :token";
        $stmt = $conn->prepare($update);
        $stmt->bindParam(":token", $token);
        $stmt->execute();

        echo "✅ Email verified successfully. You can now <a href='login.php'>login</a>.";
    } else {
        echo "❌ Invalid or expired token.";
    }
} else {
    echo "No token provided.";
}
