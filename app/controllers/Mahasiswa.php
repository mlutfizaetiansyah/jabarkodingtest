<?php
//controler untuk menamilkan view 
class Mahasiswa extends Controller{
    public function index(){
        $data['judul'] = 'Mahasiswa';
        $data['mhs'] = $this->model('Mahasiswa_model')->getAllMahasiswa();
        $this->view('templates/header',$data);
        $this->view('Mahasiswa/index',$data);
        $this->view('templates/footer');
    }
    public function login(){
        if($this->model('Mahasiswa_model')->getLogin($_POST)>0){

        
        header('location:'.BASEURL.PORT.LOCATION.'/Mahasiswa');
        }
    }
    public function detail($id){
        $data['judul'] = 'Detail Mahasiswa';
        $data['mhs'] = $this->model('Mahasiswa_model')->getMahasiswaById($id);
        $this->view('templates/header',$data);
        $this->view('Mahasiswa/detail',$data);
        $this->view('templates/footer');
    }
    public function tambah(){
        if( $this->model('Mahasiswa_model')->InputMahasiswa($_POST)>0){
            Flasher::setFlash('berhasil',' ditambah ','alert-success');
            header('location:'.BASEURL.PORT.LOCATION.'/Mahasiswa');
            exit();
        }else{
            Flasher::setFlash('gagal','ditambah','alert-danger');
            header('location:'.BASEURL.PORT.LOCATION.'/Mahasiswa');
            exit();
        }
    }
    public function delete($id){
        if($this->model('Mahasiswa_model')->DeleteMahasiswa($id)>0){
            Flasher::setFlash('berhasil',' dihapus ','alert-success');
            header('location:'.BASEURL.PORT.LOCATION.'/Mahasiswa');
            exit();
        }else{
            Flasher::setFlash('gagal','dihapus','alert-danger');
            header('location:'.BASEURL.PORT.LOCATION.'/Mahasiswa');
            exit();
        }
    }
    public function ubah(){
        echo json_encode($this->model('Mahasiswa_model')->getMahasiswaById($_POST['id']));
    }
    public function udahData($data){
        
        if( $this->model('Mahasiswa_model')->ubahMahasiswa($_POST)>0){
            Flasher::setFlash('berhasil',' diubah ','alert-success');
            header('location:'.BASEURL.PORT.LOCATION.'/Mahasiswa');
            exit();
        }else{
            Flasher::setFlash('gagal','diubah','alert-danger');
            header('location:'.BASEURL.PORT.LOCATION.'/Mahasiswa');
            exit();
        }
        
    }
}