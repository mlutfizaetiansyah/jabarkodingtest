<?php
class  Soal extends Controller{
    public function index(){
        $data['judul'] = 'Soal';
        $data['soal'] = $this->model('Soal_model')->getAllSoal();
        $this->view('templates/header',$data);
        $this->view('Soal/index',$data);
        $this->view('templates/footer');
    }
    public function tambah(){
        if( $this->model('Soal_model')->InputSoal($_POST)>0){
            Flasher::setFlash('berhasil',' ditambah ','alert-success');
            header('location:'.BASEURL.PORT.LOCATION.'/Soal');
            exit();
        }else{
            Flasher::setFlash('gagal','ditambah','alert-danger');
            header('location:'.BASEURL.PORT.LOCATION.'/Soal');
            exit();
        }
    }
}