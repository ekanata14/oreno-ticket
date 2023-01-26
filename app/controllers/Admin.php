<?php

class Admin extends Controller
{
    public function index()
    {
        $this->view("templates/header");
        $this->view("admin/index");
        $this->view("templates/footer");
    }

    public function penumpang()
    {
        $data['penumpang'] = $this->model("Penumpang_model")->getAllPenumpang();
        $this->view("templates/header");
        $this->view("admin/penumpang", $data);
        $this->view("templates/footer");
    }
}
