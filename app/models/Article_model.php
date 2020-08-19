<?php 

class Article_model {
    private $table_name = 'articles';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function insertArticle($title, $topic, $thumb, $text, $image, $admin_id, $admin_name) {
        $query = "INSERT INTO {$this->table_name} (title, topic, thumbs, text, image, admin_id, admin_name) VALUES (?, ?, ?, ?, ?, ?, ?)";
        $this->db->query($query);
        $this->db->bind('sssssss', $title, $topic, $thumb, $text, $image, $admin_id, $admin_name);
        $this->db->execute();
        return $this->db->affected_rows();
    }

    public function getAllArticle() {
        $query = "SELECT * FROM {$this->table_name}";
        $this->db->query($query);
        return $this->db->getAllData();
    }

    public function getArticleById($id) {
        $query = "SELECT * FROM {$this->table_name} WHERE id=?";
        $this->db->query($query);
        $this->db->bind('i', $id);
        return $this->db->single();
    }

    public function getArticleByTopic($topic) {
        $query = "SELECT * FROM {$this->table_name} WHERE topic=?";
        $this->db->query($query);
        $this->db->bind('s', $topic);
        return $this->db->getAllData();
    }

    public function getArticleByAjax($keyword) {
        $query = "SELECT * FROM {$this->table_name} WHERE title LIKE ? OR topic LIKE ? OR text LIKE ?";
        $this->db->query($query);
        $this->db->bind('sss', '%' . $keyword . '%', '%' . $keyword . '%', '%' . $keyword . '%');
        return $this->db->getAllData();
    }
}