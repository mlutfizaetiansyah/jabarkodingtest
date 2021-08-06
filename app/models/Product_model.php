<?php
//membuat model untuk menampilkan data
class Product_model
{
    // memnuat objek nama table
    private $table = 'product';
    //membuat penampung data
    private $db;
    public function __construct()
    {
        $this->db = new Database;
    }
    public function getprodukall()
    {
        $this->db->query('Select * from ' . $this->table);
        return $this->db->resultSet();
    }
    public function getMahasiswaById($id)
    {
        $hash = base64_decode($id);
        $this->db->query('Select * from ' . $this->table . ' where id=:id ');
        $this->db->bind('id', $hash);
        return $this->db->single();
    }
    // select wilayah
    public function getWilayah()
    {
        $this->db->query('SELECT kode,nama FROM wilayah_2020 WHERE CHAR_LENGTH(kode)=2 ORDER BY nama');
        return $this->db->resultSet();
    }
    public function getLogin($data)
    {
        var_dump($data);
    }
    // upload
    function upload($gambar)
    {
        // var_dump($gambar);
        $namafile = $gambar['gambar']['name'];
        $ukuranfile = $gambar['gambar']['size'];
        $error = $gambar['gambar']['error'];
        $tmpName = $gambar['gambar']['tmp_name'];
        // cek apakah ada gambar yg di upload
        if ($error === 4) {
            echo 'pilih gambar dahulu';
            return false;
        }
        $extensifilevalid = ['jpg', 'jpeg', 'png'];
        $extensigambar = explode('.', $namafile);
        $extensigambar = strtolower(end($extensigambar));

        if (!in_array($extensigambar, $extensifilevalid)) {
            $error = 'yang anda upload bukan gambar';
            // $result = json_encode($error, true);
            echo $error;
            // echo $result;
            return false;
        }

        if ($ukuranfile > 3000000) {
            echo "gambar terlalu besar";
            return false;
        }
        //upload data
        $namafilebaru = uniqid();
        $namafilebaru .= '.';
        $namafilebaru .= $extensigambar;
        move_uploaded_file($tmpName,  $_SERVER["DOCUMENT_ROOT"] . LOCATION . '/img/' . $namafilebaru);
        return $namafilebaru;
    }
    public function Inputproduk($data, $gambar)
    {
        // var_dump($gambar);
        $datagambar = $this->upload($gambar);
        if ($datagambar == false) {
            return false;
        } else {
            $query = ("INSERT into product (nama_produk,deskripsi,harga,gambar,link,tokopedia,shoppe,bukalapak) values (:nama_produk,:deskripsi,:harga,:gambar,:link,:tokopedia,:shoppe,:bukalapak)");
            $linkwa = "https://wa.me/" . $data['link'] . "?text=Saya ingin memesan " . $data['nama_produk'];
            $this->db->query($query);
            $this->db->bind('nama_produk', $data['nama_produk']);
            $this->db->bind('deskripsi', $data['deskripsi']);
            $this->db->bind('harga', $data['harga']);
            $this->db->bind('gambar', $datagambar);
            $this->db->bind('link', $linkwa);
            $this->db->bind('tokopedia', $data['tokopedia']);
            $this->db->bind('shoppe', $data['shoppe']);
            $this->db->bind('bukalapak', $data['bukalapak']);
            $this->db->execute();
            return $this->db->RowCount();
        }
    }
    public function DeleteMahasiswa($id)
    {
        $query = "DELETE FROM mahasiswa where id = :id";
        $this->db->query($query);
        $this->db->bind('id', $id);
        //echo var_dump($id);
        $this->db->execute();
        return $this->db->RowCount();
    }
    public function UpdateProduk($data, $gambar)
    {
        $datagambar = $this->upload($gambar);
        //UPDATE `mahasiswa` SET `npm` = '21231232' WHERE `mahasiswa`.`id` = 1; 
        $linkwa = "https://wa.me/" . $data['link'] . "?text=Saya ingin memesan " . $data['nama_produk'];

        $query = "UPDATE product SET
            nama_produk = :nama_produk,
            deskripsi=:deskripsi,
            harga=:harga,
            gambar=:gambar,
            link=:link

            WHERE id =:id ";
        $this->db->query($query);
        $this->db->bind('nama_produk', $data['nama_produk']);
        $this->db->bind('deskripsi', $data['deskripsi']);
        $this->db->bind('harga', $data['harga']);
        $this->db->bind('gambar', $datagambar);
        $this->db->bind('link', $linkwa);
        $this->db->bind('id', $data['id']);
        $this->db->execute();
        return $this->db->RowCount();
    }

    public function jumlahproduk()
    {
        $query = "SELECT COUNT(id) FROM product";
        $this->db->query($query);
        $this->db->execute();
        return $this->db->resultSet();
    }
    // delete produk
    public function Deleteproduk($id)
    {
        $query = "DELETE FROM product where id = :id";
        $this->db->query($query);
        $this->db->bind('id', $id);
        //echo var_dump($id);
        $this->db->execute();
        return $this->db->RowCount();
    }

    // produk terbaru 
    public function getNewProduct()
    {
        $query = "SELECT * FROM product ORDER BY created_at DESC limit 5";
        $this->db->query($query);
        $this->db->execute();
        return $this->db->resultSet();
    }
}
