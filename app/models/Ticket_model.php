<?php

class Ticket_model{
    private $table = "pemesanan";
    private $db;

    public function __construct(){
        $this->db = new Database();
    }

    public function getAllOrders(){
        $this->db->query("SELECT * FROM $this->table");
        return $this->db->resultAll();
    }

    public function countPendingOrders(){
        $this->db->query("SELECT * FROM $this->table WHERE status = '0'");
        return $this->db->rowCount();
    }

    public function getOrderById($data){
        $this->db->query("SELECT * FROM $this->table WHERE id = :id");
        $this->db->bind('id', $data['id']);
        return $this->db->rowCount();
    }
    
    public function getOrderDataById($data){
        $this->db->query("SELECT * FROM $this->table WHERE id = :id");
        $this->db->bind('id', $data['id']);
        return $this->db->result();
    }

    public function getOrderDataByDate(){
        $this->db->query("SELECT * FROM $this->table WHERE tanggal_pemesanan = :today");
        $this->db->bind("today", date('Y-m-d'));
        return $this->db->resultAll();
    }

    public function unAccept($data){
        $this->db->query("UPDATE $this->table SET status = '0' WHERE id = :id ");
        $this->db->bind("id", $data['id']);
        return $this->db->rowCount();
    }

    public function accept($data){
        $this->db->query("UPDATE $this->table SET status = '1' WHERE id = :id ");
        $this->db->bind("id", $data['id']);
        return $this->db->rowCount();
    }
}