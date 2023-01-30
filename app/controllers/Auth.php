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
        if ($this->model("User_model")->loginPetugas($_POST) > 0){
            Redirect::to("admin");
        } else if($this->model("User_model")->loginPenumpang($_POST) > 0){
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
