<?php
if (!isset($_SESSION["login"])) {
    header("Location:" . BASE_URL . "/login");
    exit;
}

class Manage_article extends Controller{
    public function index() {
        $this->view('admin/header');
        $this->view('admin/manage_article');
        $this->view('admin/footer');
    }
}