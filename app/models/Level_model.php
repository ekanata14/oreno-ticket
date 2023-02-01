<?php

class Level_model{
    private $table = 'level';
    private $db;

    public function __construct(){
        $this->db = new Database();
    }

    public function getAllLevel(){
        $this->db->query("SELECT * FROM {$this->table}");
        return $this->db->resultAll();
    }
}