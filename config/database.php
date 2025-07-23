<?php
class Database {
    private $host = "localhost";
    private $db_name = "reup_main_db"; // ✅ Must be EXACT
    private $username = "root";
    private $password = "";
    public $conn;

    public function connect() {
        $this->conn = null;
        try {
            // Make sure the db_name is included here
            $this->conn = new PDO("mysql:host={$this->host};dbname={$this->db_name}", 
                                  $this->username, 
                                  $this->password);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch(PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }

        return $this->conn;
    }
}
