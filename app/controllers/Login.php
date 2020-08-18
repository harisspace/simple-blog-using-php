<?php

class Login extends Controller{
    public function index() {
        if(isset($_POST["login"])) {

            $username = htmlspecialchars($_POST["username"]);
            $password = htmlspecialchars($_POST["password"]);

            // query
            $user = $this->model('User_model')->getDataCond('username', $username);

            // password verify
            if(password_verify($password, $user["password"])) {
                $_SESSION["user"] = $user;
                $_SESSION["login"] = true;
                header("Location:". BASE_URL . "/admin");
                exit;
            }else {
                Flasher::setFlash('danger', 'password atau username salah', '');
            }

        }

        $this->view('admin/header');
        $this->view('login/login');
        $this->view('admin/footer');
    }
}