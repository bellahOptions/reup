<?php
require_once __DIR__ . '/../config/Database.php';

class User {
    private $conn;
    private $table = "users";

    public function __construct() {
        $db = new Database();
        $this->conn = $db->connect();
    }

public function register($fullName, $email, $password)
{
	$checkSql = "SELECT * FROM users WHERE email = :email LIMIT 1";
	$checkStmt = $this->conn->prepare($checkSql);
	$checkStmt->bindParam(":email", $email);
	$checkStmt->execute();

	if ($checkStmt->rowCount() > 0) {
		echo "❌ Email already registered.";
		return false;
	}
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
    $token = bin2hex(random_bytes(16)); // Secure token

    $sql = "INSERT INTO users (full_name, email, password, verification_token) 
            VALUES (:full_name, :email, :password, :token)";
    $stmt = $this->conn->prepare($sql);
    $stmt->bindParam(":full_name", $fullName);
    $stmt->bindParam(":email", $email);
    $stmt->bindParam(":password", $hashedPassword);
    $stmt->bindParam(":token", $token);

    if ($stmt->execute()) {
        $verifyLink = "http://localhost/reup.app/verify.php?token=$token";
        echo "<p><strong>Verification Link:</strong> <a href='$verifyLink'>$verifyLink</a></p>";
        return true;
    }

    return false;
}

private function sendVerificationEmail($email, $token)
{
    $subject = "Verify Your Email - Reup";
    $verifyLink = "http://localhost/fastbill/verify.php?token=$token";

    $message = "Hi,\n\nPlease click the link below to verify your email:\n$verifyLink\n\nThank you.";

    $headers = "From: no-reply@reup.ng";

    mail($email, $subject, $message, $headers);
}


    public function login($email, $password) {
        $query = "SELECT * FROM " . $this->table . " WHERE email = ? OR phone = ? LIMIT 1";
        $stmt = $this->conn->prepare($query);
        $stmt->execute([$email, $email]);
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($user && password_verify($password, $user['password'])) {
        	if ($user['email_verified'] != 1) {
        		echo "❌ Please verify your email before logging in.";
        		return false;
    		}
        	session_start();
        	$_SESSION['user_id'] = $user['id'];
        	$_SESSION['user_name'] = $user['full_name'];
        	$_SESSION['wallet_balance'] = $user['wallet_balance'];
            return true;
        }
        return false;
    }

    public function getUserById($user_id) {
        $query = "SELECT * FROM " . $this->table . " WHERE id = ?";
        $stmt = $this->conn->prepare($query);
        $stmt->execute([$user_id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function updateWallet($user_id, $amount) {
        $query = "UPDATE " . $this->table . " SET wallet_balance = ? WHERE id = ?";
        $stmt = $this->conn->prepare($query);
        return $stmt->execute([$amount, $user_id]);
    }
}
