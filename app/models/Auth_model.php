<?php

class Auth_model{
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
        $username = $data['username'];
        $password = $data['password'];
        $nama_penumpang = $data['nama_penumpang'];
        $alamat = $data['alamat_penumpang'];
        $tanggal_lahir = $data['tanggal_lahir'];
        $jenis_kelamin = $data['jenis_kelamin'];
        $telefon = $data['telefon'];

        $this->db->query("INSERT INTO {$this->penumpang} VALUES(NULL, '$username', '$password', '$nama_penumpang', '$alamat', '$tanggal_lahir', '$jenis_kelamin', '$telefon')");

        return $this->db->rowCount();
    }

    public function loginPenumpang($data){
        $username = $data['username'];
        $password = $data['password'];

        $query = "SELECT username, password FROM {$this->penumpang} WHERE username = '$username' AND password = '$password'";
        
        $this->db->query($query);
        return $this->db->rowCount();
    }


}