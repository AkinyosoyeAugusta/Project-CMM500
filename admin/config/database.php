<?php
class Database
{

    // put in the database credentials to connect the application to the database
    private $host = 'localhost'; // server name her
    private $db_name = 'gamification'; // database name here
    private $username = 'root';  // the database username
    private $password = ''; // database password
    private $charset = 'utf8mb4';  // encoding type 
    private $dsn;
    public $conn;

    public function connect()
    {
        $this->dsn = "mysql:host={$this->host};dbname={$this->db_name};charset={$this->charset}";

        try {
            $this->conn = new PDO($this->dsn, $this->username, $this->password);
            // Set the PDO error mode to exception
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
        } catch (PDOException $e) {
           
            echo "Connection failed: " . $e->getMessage();
        }
        return $this->conn;
    }

    public function closeConnection() {
        $this->conn = null;
    }
}

?>
