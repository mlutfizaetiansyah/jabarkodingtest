<?php
class Wilayah_model
{
    private $table = "wilayah_2020";
    private $db;
    public function __construct()
    {
        $this->db = new Database;
    }
    public function n($data)
    {
        return strlen($data['kode']);
    }
    public function m($data)
    {
        $n = $this->n($data);
        return ($n == 2 ? 5 : ($n == 5 ? 8 : 13));
    }
    public function kabupaten($data)
    {
        $n = $this->n($data);
        $m = $this->m($data);
        // $n = strlen($data['kode']);
        // $m = ($n == 2 ? 5 : ($n == 5 ? 8 : 13));
        $this->db->query("SELECT kode,nama FROM wilayah_2020 WHERE LEFT(kode,'$n')=:kode AND CHAR_LENGTH(kode)=$m ORDER BY nama");
        $this->db->bind('kode', $data['kode']);
        $this->db->execute();
        $results =  $this->db->resultSet();
        echo  json_encode($results);
    }
    public function kecamatan($data)
    {
        $n = $this->n($data);
        $m = $this->m($data);
        // $n = strlen($data['kode']);
        // $m = ($n == 2 ? 5 : ($n == 5 ? 8 : 13));
        $this->db->query("SELECT kode,nama FROM wilayah_2020 WHERE LEFT(kode,'$n')=:kode AND CHAR_LENGTH(kode)=$m ORDER BY nama");
        $this->db->bind('kode', $data['kode']);
        $this->db->execute();
        $results =  $this->db->resultSet();
        echo  json_encode($results);
    }
}
