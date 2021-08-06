<?php
class Soal_model{
    private string $nama = 'dais';
    private string $table = 'soal';
    private $db;
    public function __construct(){
        $this->db = new Database;
    }
    public function getSoal(){
        return $this->nama;
    }
    public function getAllSoal(){
        $this->db->query('Select * from '.$this->table);
        return $this->db->resultSet();
    }
    public function InputSoal($data){
        $query= ("Insert into soal (judul,pil1,pil2,pil3,pil4,jawaban) values (:judul,:pil1,:pil2,:pil3,:pil4,:jawaban)");
        $this->db->query($query);
        $this->db->bind('judul',$data['judul']);
        $this->db->bind('pil1',$data['pil1']);
        $this->db->bind('pil2',$data['pil2']);
        $this->db->bind('pil3',$data['pil3']);
        $this->db->bind('pil4',$data['pil4']);
        $this->db->bind('jawaban',$data['jawaban']);
        $this->db->execute();
        return $this->db->RowCount();

    }
}