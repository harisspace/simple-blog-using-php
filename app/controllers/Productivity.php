<?php

class Productivity extends Controller {
    protected $topic = 'productivity';

    public function index() {
        // data
        
        $data["articles"] = $this->model('Article_model')->getArticleByTopic($this->topic);

        // view
        $this->view('templates/header');
        if (empty($data["articles"])) {
            $this->view('error/empty_article');
        } else {
            $this->view('articles/productivity', $data["articles"]);
        }
        $this->view('templates/footer');
    }
}