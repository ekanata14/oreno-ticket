<?php

class Penumpang_model{
    private $table = "penumpang";
    private $db;

    public function __construct(){
        $this->db = new Database;
    }

    public function getAllPenumpang(){
        $this->db->query("SELECT * FROM {$this->table}");
        return $this->db->resultAll();
    }
}