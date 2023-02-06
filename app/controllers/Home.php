<?php

class Home extends controller{
    public function index(){
        Middleware::auth();
        $data['penumpang'] = $this->model("User_model")->getAllUsers();
        $this->view('templates/header');
        $this->view('home/index', $data);
        $this->view('templates/footer');
    }
}