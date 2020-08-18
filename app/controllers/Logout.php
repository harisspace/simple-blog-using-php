<?php
if (!isset($_SESSION["login"])) {
    header("Location:" . BASE_URL . "/login");
    exit;
}

class Logout extends Controller {
    public function index() {
        session_destroy();
        session_unset();

        // redirect to login
        header("Location: " . BASE_URL . "/login");
    }
}