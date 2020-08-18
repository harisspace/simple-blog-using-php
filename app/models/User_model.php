<?php

class User_model {
    private $table_name = 'users';
    private $db;
    private $admin = '0';

    public function __construct()
    {
        $this->db = new Database;
    }

    public function allData() {
        $query = "SELECT * FROM {$this->table_name}";
        $this->db->query($query);
        return $this->db->getAllData();
    }

    public function getDataCond($cond, $value) {
        $query = "SELECT * FROM {$this->table_name} WHERE $cond = ?";
        $this->db->query($query);
        $this->db->bind('s', $value);
        return $this->db->single();
    }

    public function insertUser($email, $username, $password) {
        $query = "INSERT INTO {$this->table_name} (admin, email, username, password) VALUES (?, ?, ?, ?)";
        $admin = $this->admin;
        $this->db->query($query);
        $this->db->bind('ssss', $admin, $email, $username, $password);
        $this->db->execute();
        return $this->db->affected_rows();
    }
}