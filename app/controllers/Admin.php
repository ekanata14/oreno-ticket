<?php

class Admin extends Controller
{
    protected $data;
    public function setData(){
        if(str_contains($_GET['url'], "admin/setData")){
            Redirect::to("admin");
        }

        $this->data = [
            'operator' => $this->model("User_model")->getAllPetugas(),
            'totalUsers' => $this->model("User_model")->totalUsers(),
            'totalOperator' => $this->model("User_model")->totalOperators(),
            'levels' => $this->model("Level_model")->getAllLevel()
        ];
        return $this->data;
    }

    public function index()
    {
        $this->view("templates/header");
        $this->view("admin/index", $this->setData());
        $this->view("templates/footer");
    }

    public function penumpang()
    {
        $this->view("templates/header");
        $this->view("admin/penumpang", $this->setData());
        $this->view("templates/footer");
    }

    public function operator(){ 
        $this->view("templates/header");
        $this->view("admin/petugas", $this->setData());
        $this->view("templates/footer");
    }

    public function addOperator(){
        if($this->model("User_model")->addOperator($_POST) > 0){
            echo "Data Berhasil Masuk";
        } else{
            echo "Data gagal masuk";
        }
    }

    public function editOperator(){
        if($this->model("User_model")->editOperator($_POST) > 0){
            echo "Data Berhasil diedit";
        } else{
            echo "Data Gagal diedit";
        }
    }

    public function deleteOperator(){
        if($this->model("User_model")->deleteOperator($_POST) > 0){
            echo "Data berhasil dihapus";
        } else{
            echo "Data gagal dihapus";
        }
    }
}
