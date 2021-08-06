<?php
class Login_model
{
    private $db;
    public function __construct()
    {
        $this->db = new Database;
    }

    public function cek_login($data)
    {
        // $username = $_POST['username'];
        // $password = $_POST['password'];
        $query = "SELECT * from user where username=:username and password=:password";
        $this->db->query($query);
        $this->db->bind('username', $data['username']);
        $this->db->bind('password', base64_encode($data['password']));
        $this->db->execute();
        $datalogin = $this->db->single();
        if (!empty($datalogin)) {
            session_start();
            $_SESSION['username'] = $data['username'];
            $_SESSION['level'] = $datalogin['level'];
            header('location:' . BASEURL . PORT . LOCATION . '/Admin/adminpage');
        }
        return $datalogin;
    }
    public function cekUser()
    {
        // session_start();
        if (!isset($_SESSION['username'])) {
            header('location:' . BASEURL . PORT . LOCATION . '/admin');
            // echo "sesion tidak ada";
            exit();
        }
    }

    public function logout()
    {
        //echo "logout";
        session_start();
        unset($_SESSION['username']);
        unset($_SESSION['password']);
        session_destroy();
        header('location:' . BASEURL . PORT . LOCATION . '/admin');
        exit();
    }
}
