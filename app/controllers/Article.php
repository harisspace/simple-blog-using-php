<?php

class Article extends Controller{
    public function index($id) {
        // data
        $data["article"] = $this->model('Article_model')->getArticleById($id);

        // view
        $this->view('templates/header');
        $this->view('articles/index', $data["article"]);
        $this->view('templates/footer');
    }
}