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
            'users' => $this->model("User_model")->getAllUsers(),
            'totalUsers' => $this->model("User_model")->totalUsers(),
            'totalOperator' => $this->model("User_model")->totalOperators(),
            'totalPendingOrders' => $this->model("Ticket_model")->countPendingOrders(),
            'levels' => $this->model("Level_model")->getAllLevel(),
            'orders' => $this->model("Ticket_model")->getAllOrders(),
            'todayOrders' => $this->model("Ticket_model")->getOrderDataByDate()
        ];
        return $this->data;
    }

    public function index()
    {
        $addition = [
            'title' => "Dashboard",
            'show' => false
        ];
        $this->view("templates/header");
        $this->view("admin/index", $this->setData(), $addition);
        $this->view("templates/footer");
    }

    public function users()
    {
        $addition = [
            'title' => "Dashboard | Users",
            'show' => 'menu_1'
        ];
        $this->view("templates/header");
        $this->view("admin/users", $this->setData(), $addition);
        $this->view("templates/footer");
    }

    public function operator(){ 
        $addition = [
            'title' => "Dashboard | Operators",
            'show' => 'menu_1'
        ];
        $this->view("templates/header");
        $this->view("admin/operator", $this->setData(), $addition);
        $this->view("templates/footer");
    }

    public function ticket(){
        $addition = [
            'title' => "Dashboard | Tickets",
            'show' => 'menu_2'
        ];

        $this->view("templates/header");
        $this->view("admin/ticket", $this->setData(), $addition);
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

    public function blockUser(){
        var_dump($_POST);
        if ($this->model("User_model")->blockUser($_POST) > 0) {
            Redirect::to("admin/users");
        } else{
            Redirect::to("admin/users");
        }
    }

    public function activateUser(){
        if($this->model("User_model")-> activateUser($_POST) > 0 ){
            Redirect::to("admin/users");
        } else{
            Redirect::to("admin/users");
        }
    }

    public function ticketDetail(){
        if($this->model("Ticket_model")->getOrderById($_POST) > 0){
            $addition = [
            'title' => "Dashboard | Tickets",
            'show' => 'menu_2',
            'ticketData' => $this->model("Ticket_model")->getOrderDataById($_POST)
        ];

        $this->view("templates/header");
        $this->view("admin/ticketDetail", $this->setData(), $addition);
        $this->view("templates/footer");
        } else{
            $addition = [
            'title' => "Dashboard | Tickets",
            'show' => 'menu_2',
            'ticketData' => $this->model("Ticket_model")->getOrderDataById($_POST)
            ];

        $this->view("templates/header");
        // $this->view("admin/ticketDetail");
        $this->view("templates/footer");    
        }
    }

    public function unAccept(){
        if($this->model("Ticket_model")->unAccept($_POST) > 0){
            Redirect::to("admin/ticket");
        } else{
            Redirect::to("admin/ticket");
        }
    }

    public function accept(){
        if($this->model("Ticket_model")->accept($_POST) > 0){
            Redirect::to("admin/ticket");
        } else{
            Redirect::to("admin/ticket");
        }
    }


}
