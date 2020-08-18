<?php

class Experience extends Controller
{
    protected $topic = 'experience';

    public function index()
    {
        // data

        $data["articles"] = $this->model('Article_model')->getArticleByTopic($this->topic);

        // view
        $this->view('templates/header');
        if(empty($data["articles"])) {
            $this->view('error/empty_article');
        }else {
            $this->view('articles/experience', $data["articles"]);
        }
        $this->view('templates/footer');
    }
}
