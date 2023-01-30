<?php

class User_model{
    private $penumpang = "penumpang";
    private $petugas = "petugas";
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function getAllPenumpang(){
        $query = "SELECT * FROM {$this->penumpang}";
        $this->db->query($query);
        return $this->db->resultAll();
    }

    public function getAllPetugas(){
        $query = "SELECT * FROM {$this->petugas}";
        $this->db->query($query);
        return $this->db->resultAll();
    }

    public function addPenumpang($data){
        $this->db->query("INSERT INTO {$this->penumpang} VALUES(NULL, :username, :password, :nama_penumpang, :alamat_penumpang, :tanggal_lahir, :jenis_kelamin, :telefon)");
        $this->db->bind("username", $data['username']);
        $this->db->bind("password", $data['password']);
        $this->db->bind("nama_penumpang", $data['nama_penumpang']);
        $this->db->bind("alamat_penumpang", $data['alamat_penumpang']);
        $this->db->bind("tanggal_lahir", $data['tanggal_lahir']);
        $this->db->bind("jenis_kelamin", $data['jenis_kelamin']);
        $this->db->bind("telefon", $data['telefon']);
        return $this->db->rowCount();
    }

    public function loginPenumpang($data){
        $this->db->query("SELECT * FROM {$this->penumpang} WHERE username = :username AND password = :password");
        $this->db->bind("username", $data['username']);
        $this->db->bind("password", $data['password']); 
        return $this->db->rowCount();
    }

    public function loginPetugas($data){
        $this->db->query("SELECT * FROM {$this->petugas} WHERE username = :username AND password = :password");
        $this->db->bind("username", $data['username']);
        $this->db->bind("password", $data['password']);
        return $this->db->rowCount();
    }


}