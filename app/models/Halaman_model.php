<?php
class Halaman_model
{
    private $table;
    private $db;
    public function __construct()
    {
        $this->db = new Database;
    }

    public function getHalamanData()
    {
        $query = "SELECT * FROM content";
        $this->db->query($query);
        $this->db->execute();
        return $this->db->resultSet();
    }

    public function UpdateHalaman($data)
    {
        $query = "UPDATE content set
        email=:email,
        notlp=:notlp,
        alamat=:alamat,
        wa=:wa,
        facebook=:facebook,
        instagram=:instagram
        WHERE id=:id
        ";
        $this->db->query($query);
        $this->db->bind('email', $data['email']);
        $this->db->bind('notlp', $data['notlp']);
        $this->db->bind('alamat', $data['alamat']);
        $this->db->bind('wa', $data['wa']);
        $this->db->bind('facebook', $data['facebook']);
        $this->db->bind('instagram', $data['instagram']);
        $this->db->bind('id', $data['id']);
        $this->db->execute();
        return $this->db->RowCount();
    }
}
