<?php
class Admin extends Controller
{
    public function index()
    {
        $data['judul'] = 'Login';

        // $this->model('Login_model')->cekUser();
        $this->view('Admin/login/index', $data);
    }
    // login
    public function login()
    {
        // echo "login";
        // header('location:' . BASEURL . PORT . LOCATION . '/Admin/adminpage');
        // $data['judul'] = 'Login';
        if ($this->model('Login_model')->cek_login($_POST) == 0) {
            Flasher::setFlash('User tidak di temukan', ' Silahkan periksa Username dan Password ', 'alert-danger');
            header('location:' . BASEURL . PORT . LOCATION . '/Admin');
            exit();
        }
    }

    public function logout()
    {
        $this->model('Login_model')->logout();
    }
    public function adminpage()
    {
        $this->model('Login_model')->cekUser();
        $data['judul'] = 'Admin';
        $data['jumlahproduk'] = $this->model('Product_model')->jumlahproduk();
        $data['jumlahtoko'] = $this->model('Frencise_model')->jumlahtoko();
        $data['jumlahadmin'] = $this->model('User_model')->jumlahadmin();
        $this->view('Admin/header/header');
        $this->view('Admin/index', $data);
        $this->view('Admin/footer/footer');
    }


    public function inputform()
    {
        $this->model('Login_model')->cekUser();
        $data['judul'] = 'Admin';
        $data['wilayah'] = $this->model('Product_model')->getWilayah();
        // $data['kabupaten'] = $this->model('Wilayah_model')->kabupaten($_POST);


        $this->view('Admin/header/header');
        $this->view('Admin/pages/forms/general', $data);
        $this->view('Admin/footer/footer');
    }
    public function Datatable()
    {
        $this->model('Login_model')->cekUser();

        $data['judul'] = 'Admin';
        $data['produk'] = $this->model('Product_model')->getprodukall();

        $this->view('Admin/header/header');
        $this->view('Admin/pages/tables/data', $data);
        $this->view('Admin/footer/footer');
    }
    // data fanchise
    public function Franchise()
    {
        $this->model('Login_model')->cekUser();
        $data['judul'] = 'Franchise';
        $data['Franchise'] = $this->model('Frencise_model')->Franchiseall();
        $data['wilayah'] = $this->model('Product_model')->getWilayah();

        $this->view('Admin/header/header');
        $this->view('Admin/pages/tables/datatoko', $data);
        $this->view('Admin/footer/footer');
    }
    public function page()
    {

        //mengisi data 
        //$data['data1'] = $data1;
        //$data['data2'] = $data2;
        //$data['data3'] = $data3;
        $data['judul'] = 'page';
        $this->view('templates/header', $data);
        $this->view('about/page');
        $this->view('templates/footer');
    }
    // dalete produk
    public function delete($id)
    {
        if ($this->model('Product_model')->Deleteproduk($id) > 0) {
            Flasher::setFlash('berhasil', ' dihapus ', 'alert-success');
            header('location:' . BASEURL . PORT . LOCATION . '/admin/Datatable');
            exit();
        } else {
            Flasher::setFlash('gagal', 'dihapus', 'alert-danger');
            header('location:' . BASEURL . PORT . LOCATION . '/admin/Datatable');
            exit();
        }
    }


    public function ubahproduk()
    {
        if ($this->model('Product_model')->UpdateProduk($_POST, $_FILES) > 0) {
            Flasher::setFlash('berhasil', ' Diupdate ', 'alert-success');
            header('location:' . BASEURL . PORT . LOCATION . '/admin/Datatable');
            exit();
        } else {
            Flasher::setFlash('gagal', 'update', 'alert-danger');
            header('location:' . BASEURL . PORT . LOCATION . '/admin/Datatable');
            exit();
        }
    }


    public function TambahProduk()
    {
        // var_dump($_POST);
        // var_dump($_FILES);
        // $this->model('Product_model')->InputProduk($_POST, $_FILES);
        if ($this->model('Product_model')->InputProduk($_POST, $_FILES) > 0) {
            Flasher::setFlash('berhasil', ' ditambah ', 'alert-success');
            header('location:' . BASEURL . PORT . LOCATION . '/admin/inputform');
            exit();
        } else {
            Flasher::setFlash('gagal', 'ditambah pastikan yang anda upload adalah gambar dengan format jpg,jpeg,png dan ukuran gambar tidak lebih dari 3MB', 'alert-danger');
            header('location:' . BASEURL . PORT . LOCATION . '/admin/inputform');
            exit();
        }
    }

    public function Daftarfrencise()
    {
        // var_dump($_POST);
        // var_dump($_FILES);
        // $this->model('Product_model')->InputProduk($_POST, $_FILES);
        if ($this->model('Frencise_model')->Inputfrencise($_POST) > 0) {
            Flasher::setFlash('berhasil', ' Menambah data Freanchise ', 'alert-success');
            header('location:' . BASEURL . PORT . LOCATION . '/admin/inputform');
            exit();
        } else {
            Flasher::setFlash('gagal', 'Menambah data Freanchise', 'alert-danger');
            header('location:' . BASEURL . PORT . LOCATION . '/admin/inputform');
            exit();
        }
    }


    function uplad()
    {
        $namafile = $_FILES['gambar']['name'];
        $ukuranfile = $_FILES['gambar']['size'];
        $error = $_FILES['gambar']['error'];
        $tmpName = $_FILES['gambar']['tmp_name'];
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
        move_uploaded_file($tmpName, BASEURL . PORT . LOCATION, '/img' . $namafilebaru);
        return $namafilebaru;
    }

    public function kabupaten()
    {
        $data['kabupaten'] = $this->model('Wilayah_model')->kabupaten($_POST);
    }
    public function kecamatan()
    {
        $data['kecamatan'] = $this->model('Wilayah_model')->kecamatan($_POST);
    }

    public function deletefrenchise($id)
    {
        if ($this->model('Frencise_model')->Deletetoko($id) > 0) {
            Flasher::setFlash('berhasil', ' dihapus ', 'alert-success');
            header('location:' . BASEURL . PORT . LOCATION . '/admin/Franchise');
            exit();
        } else {
            Flasher::setFlash('gagal', 'dihapus', 'alert-danger');
            header('location:' . BASEURL . PORT . LOCATION . '/admin/Franchise');
            exit();
        }
    }

    public function ubahtoko()
    {
        // var_dump($_POST);
        if ($this->model('Frencise_model')->updatetoko($_POST) > 0) {
            Flasher::setFlash('berhasil', ' Diupdate ', 'alert-success');
            header('location:' . BASEURL . PORT . LOCATION . '/admin/Franchise');
            exit();
        } else {
            Flasher::setFlash('gagal', 'update', 'alert-danger');
            header('location:' . BASEURL . PORT . LOCATION . '/admin/Franchise');
            exit();
        }
    }

    public function user()
    {
        $this->model('Login_model')->cekUser();

        $data['judul'] = 'Data User Admin';
        $data['useradmin'] = $this->model('User_model')->getuserall();
        $this->view('Admin/header/header');
        $this->view('Admin/pages/tables/datauseradmin', $data);
        $this->view('Admin/footer/footer');
    }

    public function InputUser()
    {
        if ($this->model('User_model')->InputUser($_POST) > 0) {
            Flasher::setFlash('berhasil', ' ditambah ', 'alert-success');
            header('location:' . BASEURL . PORT . LOCATION . '/admin/inputform');
            exit();
        } else {
            Flasher::setFlash('gagal', 'ditambah pastikan yang anda upload adalah gambar dengan format jpg,jpeg,png dan ukuran gambar tidak lebih dari 3MB', 'alert-danger');
            header('location:' . BASEURL . PORT . LOCATION . '/admin/inputform');
            exit();
        }
    }

    public function ubahuser()
    {
        if ($this->model('User_model')->Update($_POST) > 0) {
            Flasher::setFlash('berhasil', ' Diupdate ', 'alert-success');
            header('location:' . BASEURL . PORT . LOCATION . '/admin/User');
            exit();
        } else {
            Flasher::setFlash('gagal', 'update', 'alert-danger');
            header('location:' . BASEURL . PORT . LOCATION . '/admin/User');
            exit();
        }
    }

    public function deleteuser($id)
    {
        if ($this->model('User_model')->deleteuser($id) > 0) {
            Flasher::setFlash('berhasil', ' dihapus ', 'alert-success');
            header('location:' . BASEURL . PORT . LOCATION . '/admin/User');
            exit();
        } else {
            Flasher::setFlash('gagal', 'dihapus', 'alert-danger');
            header('location:' . BASEURL . PORT . LOCATION . '/admin/User');
            exit();
        }
    }
    // halaman depan
    public function HalamanDepan()
    {
        $this->model('Login_model')->cekUser();

        $data['judul'] = 'Data User Admin';
        $data['content'] = $this->model('Halaman_model')->getHalamanData();
        $this->view('Admin/header/header');
        $this->view('Admin/pages/tables/datahalamanhome', $data);
        $this->view('Admin/footer/footer');
    }
    // update halaman depan
    public function updateHalamandepan()
    {
        if ($this->model('Halaman_model')->UpdateHalaman($_POST) > 0) {
            Flasher::setFlash('berhasil', ' Diupdate ', 'alert-success');
            header('location:' . BASEURL . PORT . LOCATION . '/admin/HalamanDepan');
            exit();
        } else {
            Flasher::setFlash('gagal', 'update', 'alert-danger');
            header('location:' . BASEURL . PORT . LOCATION . '/admin/HalamanDepan');
            exit();
        }
    }
}
