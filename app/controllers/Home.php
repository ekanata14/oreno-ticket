<?php

class Home extends controller{
    public function index(){
        $data['penumpang'] = $this->model("User_model")->getAllPenumpang();
        $this->view('templates/header');
        $this->view('home/index', $data);
        $this->view('templates/footer');
    }
}