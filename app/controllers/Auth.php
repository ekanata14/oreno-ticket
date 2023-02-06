<?php

class Auth extends Controller
{
    public function index()
    {
        $this->view("templates/header");
        $this->view("auth/login");
        $this->view("templates/footer");
    }

    public function register()
    {
        $this->view("templates/header");
        $this->view("auth/register");
        $this->view("templates/footer");
    }

    public function regisPenumpang()
    { 
        if ($this->model("User_model")->addPenumpang($_POST) > 0) {
            Redirect::to("auth");
        } else {
            Redirect::to("auth/register");
        }
    }

    public function login()
    {
        $operator = $this->model("User_model")->getOperatorDataByUsername($_POST);
        $user = $this->model("User_model")->getUserDataByUsername($_POST);
        if ($this->model("User_model")->loginPetugas($_POST) > 0){
            if(password_verify($_POST['password'], $operator['password'])){
                $_SESSION['operator'] = [
                    'id' => $operator['id'],
                    'username' => $operator['username'],
                    'name' => $operator['nama_petugas'],
                    'level' => $operator['id_level'],
                    'login' => true
                ];
            }
            Redirect::to("admin");
        } else if($this->model("User_model")->loginPenumpang($_POST) > 0){
            if(password_verify($_POST['password'], $user['password'])){
                $_SESSION['user'] = [
                    'id' => $user['id'],
                    'username' => $user['username'],
                    'nama' => $user['nama_penumpang'],
                    'tgl_lahir' => $user['tanggal_lahir'],
                    'jenis_kelamin' => $user['jenis_kelamin'],
                    'login' => true
                ];
            }
            Redirect::to("home");
        } else{
            Redirect::to("auth");
        }
    }

    public function logout()
    {
        session_destroy();
        session_unset();
        Redirect::to("auth");
    }
}
