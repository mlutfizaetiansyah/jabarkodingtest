<?php
class Home extends Controller
{
    public function index()
    {
        //echo'home/index';
        $data['judul'] = 'home';
        $data['nama'] = $this->model('User_model')->getUser();
        $data['produk'] = $this->model('Product_model')->getNewProduct();
        $data['content'] = $this->model('Halaman_model')->getHalamanData();
        $this->view('home/index2', $data);
    }
    public function Beranda()
    {
        $data['judul'] = 'home';
        $data['nama'] = $this->model('User_model')->getUser();
        $this->view('templates/header', $data);
        $this->view('home/Beranda', $data);
        $this->view('templates/footer');
    }

    public function Produk()
    {
        // $data = json_encode($this->model('Product_model')->getprodukall());

        $this->view('home/Produk');
    }

    public function Produkjson()
    {
        $data['data'] = $this->model('Product_model')->getprodukall();
        $json = json_encode($data);

        echo $json;
    }
}
