<?php 

class Database {
    private $host = DB_HOST;
    private $db_name = DB_NAME;
    private $db_pass = DB_PASS;
    private $db_user = DB_USERNAME;

    public function __construct()
    {
        $conn = new mysqli($this->host, $this->db_user, $this->db_pass, $this->db_name);
        if($conn->connect_errno) {
            echo "connect error: " . $conn->connect_error; 
        }
    }
}