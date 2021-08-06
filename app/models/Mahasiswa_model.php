<?php
//membuat model untuk menampilkan data
class Mahasiswa_model{
    // memnuat objek nama table
    private $table = 'mahasiswa';
    //membuat penampung data
    private $db;
    public function __construct(){
        $this->db = new Database;
    }
    public function getAllMahasiswa(){
        $this->db->query('Select * from '.$this->table);
        return $this->db->resultSet();
    }
    public function getMahasiswaById($id){
        $hash = base64_decode($id);
        $this->db->query('Select * from '.$this->table.' where id=:id ');
        $this->db->bind('id',$hash);
        return $this->db->single();
    }
    public function getLogin($data){
        var_dump($data);
    }
    public function InputMahasiswa($data){
        $query= ("Insert into mahasiswa (nama,npm,email) values (:nama,:npm,:email)");
        $this->db->query($query);
        $this->db->bind('nama',$data['nama']);
        $this->db->bind('npm',$data['npm']);
        $this->db->bind('email',$data['email']);
        $this->db->execute();
        return $this->db->RowCount();

    }
    public function DeleteMahasiswa($id){
        $query= "DELETE FROM mahasiswa where id = :id";
        $this->db->query($query);
        $this->db->bind('id',$id);
        //echo var_dump($id);
        $this->db->execute();
        return $this->db->RowCount();

    }
    public function ubahMahasiswa($data){
        //UPDATE `mahasiswa` SET `npm` = '21231232' WHERE `mahasiswa`.`id` = 1; 
        $query= "UPDATE mahasiswa SET
            nama = :nama,
            npm=:npm,
            email=:email
            WHERE id =:id "; 
        $this->db->query($query);
        $this->db->bind('nama',$data['nama']);
        $this->db->bind('npm',$data['npm']);
        $this->db->bind('email',$data['email']);
        $this->db->bind('id',$data['id']);
        $this->db->execute();
        return $this->db->RowCount();

    }
}