<?php
class App{
    //membuat property 
    protected $controller = 'Home';
    protected $method = 'index';
    protected $params = [];
    public function __construct(){
        $url = $this->parseURL();
        //mengecek apakah ada controler selain index
        if(file_exists('../app/controllers/'.ucfirst($url[0]).'.php')){
            //menjadikan url menjadi kontroler
            $this->controller = $url[0];
            //menghapus controler
            unset($url[0]);
        }
        //mengabungkan konroler yang telah di cek
        require_once'../app/controllers/'. ucfirst($this->controller).'.php';
        $this->controller = new $this->controller;
        
        //method
        
        if(isset($url[1])){
            if(method_exists($this->controller,$url[1])){
                //mengarahkan ke method yang ada pada url
                $this->method = $url[1];
                //menghapus method agar yang tersisa hanya parameter url
                unset($url[1]);
            }
        }
        
        //parameter
        if(!empty($url)){
            $this->params = array_values($url);
            //var_dump($url);
        }
         //jalankan controler dan method serta kirimkan params jika ada
        call_user_func_array([$this->controller,$this->method],$this->params);
    }

    //mengambil url
    public function parseURl(){
        //pengecekan url
        if(isset($_GET['url'])){
            //membuang '/' diakhir url
            $url = rtrim($_GET['url'],'/');
            //untuk membersihkan dari karakter aneh
            $url = filter_var($url, FILTER_SANITIZE_URL);
            //memecah url menjadi array
            $url = explode('/',$url);
            return $url;
        }

    }
}