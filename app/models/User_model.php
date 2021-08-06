<?php
//membuat model untuk menampilkan data
class User_model
{
    private string $nama = 'dais';
    private $table = "user";
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getuserall()
    {
        $this->db->query('Select * from ' . $this->table);
        return $this->db->resultSet();
    }
    public function getUser()
    {
        return $this->nama;
    }

    public function jumlahadmin()
    {
        $query = "SELECT COUNT(id) FROM user";
        $this->db->query($query);
        $this->db->execute();
        return $this->db->resultSet();
    }

    public function InputUser($data)
    {
        $query = ("Insert into user (nama,username,password,level) values (:nama,:username,:password,:level)");
        $this->db->query($query);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('username', $data['username']);
        $this->db->bind('password', base64_encode($data['password']));
        $this->db->bind('level', $data['level']);
        $this->db->execute();
        return $this->db->RowCount();
    }

    public function Update($data)
    {
        $query = "UPDATE user SET
        nama=:nama,
        username=:username,
        password=:password,
        level=:level
        WHERE id =:id ";
        $this->db->query($query);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('username', $data['username']);
        $this->db->bind('password', base64_encode($data['password']));
        $this->db->bind('level', $data['level']);
        $this->db->bind('id', $data['id']);
        $this->db->execute();
        return $this->db->RowCount();
    }

    public function deleteuser($id)
    {
        $query = "DELETE FROM user where id = :id";
        $this->db->query($query);
        $this->db->bind('id', $id);
        //echo var_dump($id);
        $this->db->execute();
        return $this->db->RowCount();
    }
}
