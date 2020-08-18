<?php 
if(!isset($_SESSION["login"])) {
    header("Location:" . BASE_URL . "/login");
    exit;
}

class Admin extends Controller{
    public function index() {

        if(isset($_POST["publish"])) {
            $data["article"] = $_POST;
            $title = htmlspecialchars($data["article"]["title"]);
            $thumb = htmlspecialchars($data["article"]["thumb"]);
            $article = htmlspecialchars($data["article"]["editor"]);
            $topic = htmlspecialchars($data["article"]["topic"]);
            $image = htmlspecialchars($data["article"]["image"]);
            $admin_id = $_SESSION["user"]["id"];
            $admin_name = $_SESSION["user"]["username"];

            if ($this->model('Article_model')->insertArticle($title, $topic, $thumb, $article, $image, $admin_id, $admin_name) > 0) {
                Flasher::setFlash('success', 'berhasil', 'menambahkan');
            }else {
                Flasher::setFlash('danger', 'gagal', 'menambahkan');
            };
        }

        $this->view('admin/header');
        $this->view('admin/dashboard');
        $this->view('admin/footer');
    }
}