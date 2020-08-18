<?php 

class Database {
    private $host = DB_HOST;
    private $db_name = DB_NAME;
    private $db_pass = DB_PASS;
    private $db_user = DB_USERNAME;

    private $stmt;
    private $conn;

    public function __construct()
    {
        $this->conn = new mysqli($this->host, $this->db_user, $this->db_pass, $this->db_name);
        if($this->conn->connect_errno) {
            echo "connect error: " . $this->conn->connect_error; 
        }
    }

    public function query($query) {
        $this->stmt = $this->conn->prepare($query);
    }

    public function bind($type, ...$values) {
        $this->stmt->bind_param($type, ...$values);
    }

    public function execute() {
        return $this->stmt->execute();
    }

    public function getAllData() {
        $this->execute();
        $result = $this->stmt->get_result();
        $rows = [];
        while($row = $result->fetch_assoc()) {
            array_push($rows, $row);
        }
        return $rows;
    }

    public function single() {
        $this->execute();
        $result = $this->stmt->get_result();
        return $result->fetch_assoc();
    }

    public function affected_rows() {
        return $this->stmt->affected_rows;
    }

    public function showError() {
        return $this->stmt->error;
    }

}