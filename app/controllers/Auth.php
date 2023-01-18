<?php

class Auth extends Controller{
    public function index(){
        $this->view("templates/header");
        $this->view("auth/login");
        $this->view("templates/footer");
    }

    public function register(){
        $this->view("templates/header");
        $this->view("auth/register");
        $this->view("templates/footer");
    }

    public function regisPenumpang(){
        $data = [
            'username' => $_POST['username'],
            'password' => $_POST['password'],
            'nama_penumpang' => $_POST['nama_penumpang'],
            'alamat_penumpang' => $_POST['alamat_penumpang'],
            'tanggal_lahir' => $_POST['tanggal_lahir'],
            'jenis_kelamin' => $_POST['jenis_kelamin'],
            'telefon' => $_POST['telefon'],
        ];
        
        if($this->model("Auth_model")->addPenumpang($data) > 0){
            header("Location: " . BASE_URL . "/auth");
        } else{
            header("Location: " . BASE_URL . "/auth/register");
        }
    }

    public function loginPenumpang(){
        $data = [
            'username' => $_POST['username'],
            'password' => $_POST['password']
        ];

        if($this->model("Auth_model")->loginPenumpang($data)){
            header("Location: " . BASE_URL . "/home");
        } else{
            header("Location: " . BASE_URL . "/home");
        }
    }

    public function logout(){
        session_destroy();
        session_unset();
        header("Location: " . BASE_URL . "/auth/login");
    }
}