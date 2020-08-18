<?php

class Registration extends Controller {
    public function index() {
        $data["users"] = $this->model('User_model')->allData();
        
        
        if(isset($_POST["registration"])) {
            // prevent html injection
            $username = htmlspecialchars($_POST["username"]);
            $email = htmlspecialchars($_POST["email"]);
            $password = htmlspecialchars($_POST["password"]);
            $passwordVerify = htmlspecialchars($_POST["password-verify"]);

            
            // cek email
            foreach ($data["users"] as $user) {
                if ($email === $user["email"]) {
                    Flasher::setFlash('danger', 'email telah terdaftar', '');
                    $error = ['email'];
                }
            }

            // cek password verify
            if ($password !== $passwordVerify) {
                // send flash massage
                Flasher::setFlash('danger', 'gagal',
                    'password verifikasi berbeda'
                );
            } else {
                // hash password
                $password = password_hash($password, PASSWORD_DEFAULT);
            }

            if(empty($error)) {
                // insert to db
                if ($this->model('User_model')->insertUser($email, $username, $password) > 0) {
                    Flasher::setFlash('success', 'berhasil', 'menambahkan akun');
                } else {
                    Flasher::setFlash('danger', 'gagal', 'menambahkan akun');
                    header('Location:' . BASE_URL . '/registration');
                    exit;
                }
            }

        }
        $this->view('admin/header');
        $this->view('login/registration');
        $this->view('admin/footer');
        
    }
}