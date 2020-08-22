<?php
if (!isset($_SESSION["login"])) {
    header("Location:" . BASE_URL . "/login");
    exit;
}

class Manage_article extends Controller{
    public function index() {
        $data["articles"] = $this->model('Article_model')->getAllArticle();

        $this->view('admin/header');
        if(!empty($data["articles"])) {
            $this->view('admin/manage_article', $data["articles"]);
        }else {
            $this->view('error/empty_article');
        }
        
        $this->view('admin/footer');
    }

    public function delete($id) {
        if($this->model('Article_model')->deleteArticle($id) > 0) {
            Flasher::setFlash('success', 'berhasil', 'menghapus article');
            header('Location: ' . BASE_URL . '/manage_article');
        }else {
            Flasher::setFlash('danger', 'gagal', 'menghapus article');
        }
    }

    public function edit($id) {
        $article =  $this->model('Article_model')->getArticleById($id);

        if(isset($_POST["publish"])) {
            $title = htmlspecialchars($_POST["title"]);
            $text = htmlspecialchars($_POST["editor"]);
            $thumb = htmlspecialchars($_POST["thumb"]);
            $topic = htmlspecialchars($_POST["topic"]);
            $image = htmlspecialchars($_POST["image"]);

            if ($this->model('Article_model')->editArticle($id, $title, $topic, $thumb, $text, $image) > 0) {
                Flasher::setFlash('success', 'berhasil', 'mengedit article');
                header('Location: ' . BASE_URL . '/manage_article');
            } else {
                Flasher::setFlash('danger', 'gagal', 'mengedit article');
            };
        }

        $this->view('admin/header');
        $this->view('admin/edit_article', $article);
        $this->view('admin/footer');
    }
}