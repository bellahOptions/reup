<?php
class Admin {
    private $conn;
    private $table = "admins";

    public function __construct($db) {
        $this->conn = $db;
    }

    public function login($email, $password) {
        $query = "SELECT * FROM " . $this->table . " WHERE email = :email AND status = 'active' LIMIT 1";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(":email", $email);
        $stmt->execute();

        if ($stmt->rowCount() == 1) {
            $admin = $stmt->fetch(PDO::FETCH_ASSOC);
            if (password_verify($password, $admin['password'])) {
                $_SESSION['admin_id'] = $admin['id'];
                $_SESSION['admin_name'] = $admin['full_name'];
                $_SESSION['admin_role'] = $admin['role'];

                // Update last login
                $update = $this->conn->prepare("UPDATE " . $this->table . " SET last_login = NOW() WHERE id = :id");
                $update->bindParam(":id", $admin['id']);
                $update->execute();

                return true;
            }
        }

        return false;
    }

    public function isLoggedIn() {
        return isset($_SESSION['admin_id']);
    }

    public function logout() {
        session_destroy();
        return true;
    }
}
?>
