<?php

class User_model{
    private $penumpang = "penumpang";
    private $operator = "petugas";
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function getAllUsers(){
        $query = "SELECT * FROM {$this->penumpang}";
        $this->db->query($query);
        return $this->db->resultAll();
    }

    public function totalUsers(){
        $query = "SELECT * FROM {$this->penumpang}";
        $this->db->query($query);
        return $this->db->rowCount();
    } 

    public function getAllPetugas(){
        $query = "SELECT * FROM {$this->operator}";
        $this->db->query($query);
        return $this->db->resultAll();
    }

    public function totalOperators(){
        $query = "SELECT * FROM {$this->operator}";
        $this->db->query($query);
        return $this->db->rowCount();
    }

    public function getOperatorDataByUsername($data){
        $this->db->query("SELECT * FROM {$this->operator} WHERE username = :username");
        $this->db->bind("username", $data['username']);
        return $this->db->result();
    }

    public function getUserDataByUsername($data){
        $this->db->query("SELECT * FROM {$this->penumpang} WHERE username = :username");
        $this->db->bind("username", $data['username']);
        return $this->db->result();
    }


    public function addPenumpang($data){
        $this->db->query("INSERT INTO {$this->penumpang} VALUES(NULL, :username, :password, :nama_penumpang, :alamat_penumpang, :tanggal_lahir, :jenis_kelamin, :telefon)");
        $this->db->bind("username", $data['username']);
        $this->db->bind("password", password_hash($data['password'], PASSWORD_DEFAULT));
        $this->db->bind("nama_penumpang", $data['nama_penumpang']);
        $this->db->bind("alamat_penumpang", $data['alamat_penumpang']);
        $this->db->bind("tanggal_lahir", $data['tanggal_lahir']);
        $this->db->bind("jenis_kelamin", $data['jenis_kelamin']);
        $this->db->bind("telefon", $data['telefon']);
        return $this->db->rowCount();
    }

    public function loginPenumpang($data){
        $this->db->query("SELECT * FROM {$this->penumpang} WHERE username = :username");
        $this->db->bind("username", $data['username']);
        return $this->db->rowCount();
    }

    public function loginPetugas($data){
        $this->db->query("SELECT * FROM {$this->operator} WHERE username = :username");
        $this->db->bind("username", $data['username']);
        return $this->db->rowCount();
    }

    public function addOperator($data){
        $this->db->query("CALL insertOperator(:username, :operatorName, :password, :level)");
        $this->db->bind("username", $data['username']);
        $this->db->bind("operatorName", $data['operatorName']);
        $this->db->bind("password", password_hash($data['password'], PASSWORD_DEFAULT));
        $this->db->bind("level", $data['level']);
        return $this->db->rowCount();
    }

    public function updateOperator($data){
        $this->db->query("CALL updateOperator(:id, :username, :password, :operatorName, :level");
        $this->db->bind("id", $data['id']);
        $this->db->bind("username", $data['username']);
        $this->db->bind("password", $data['password']);
        $this->db->bind("operatorName", $data['operatorName']);
        $this->db->bind("level", $data['level']);
        return $this->db->rowCount();
    }

    public function deleteOperator($data){
        $this->db->query("CALL deleteOperator(:id)");
        $this->db->bind("id", $data['id']);
        return $this->db->rowCount();
    }

    public function blockUser($data){
        $this->db->query("UPDATE {$this->penumpang} SET status = '1' WHERE id = :id");
        $this->db->bind("id", $data['id']);
        return $this->db->rowCount();
    }

    public function activateUser($data){
        $this->db->query("UPDATE {$this->penumpang} SET status = '0' WHERE id = :id");
        $this->db->bind("id", $data['id']);
        return $this->db->rowCount();
    }


}