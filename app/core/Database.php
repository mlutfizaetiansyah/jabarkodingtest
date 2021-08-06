<?php
//membuat Database wraper
class Database
{
    private $host = DB_HOST;
    private $user = DB_USER;
    private $pass = DB_PASS;
    private $dbname = DB_NAME;
    //databse handler
    private $dbh;
    // untuk menyimpan querry
    private $stmt;

    public function __construct()
    {
        //data source name
        $dsn = 'mysql:host=' . $this->host . ';dbname=' . $this->dbname;
        //membuat optimasi agar database terus terkoneksi
        $option = [
            PDO::ATTR_PERSISTENT => true,
            //untuk error
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION


        ];
        //catch error koneksi ke database
        try {
            $this->dbh = new PDO($dsn, $this->user, $this->pass, $option);
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }
    //untuk membuat query
    public function query($query)
    {
        $this->stmt = $this->dbh->prepare($query);
    }
    //binding data sql fungsi
    public function bind($param, $value, $type = null)
    {
        if (is_null($type)) {
            //memgecek value yang masuk ke database apakah int
            switch (true) {
                case is_int($value):
                    # code mengecek isi value apakah int...
                    $type = PDO::PARAM_INT;
                    break;
                case is_bool($value):
                    # code mengecek apakah isi value boolean...
                    $type = PDO::PARAM_BOOL;
                    break;
                case is_null($value):
                    # code mengecek apakah isi valie  null
                    $type = PDO::PARAM_NULL;
                    break;
                default:
                    $type = PDO::PARAM_STR;
            }
        }
        //mengeksekusi query sekaligus membersihkan query agar terhindar sql injection
        $this->stmt->bindValue($param, $value, $type);
    }
    //execute query
    public function execute()
    {
        $this->stmt->execute();
    }
    //cek hasil execute apakah banyak atau tidak
    public function resultSet()
    {
        $this->execute();
        //kalau data banyak
        return $this->stmt->fetchALL(PDO::FETCH_ASSOC);
    }
    public function single()
    {
        $this->execute();
        //kalau data cuma 1
        return $this->stmt->fetch(PDO::FETCH_ASSOC);
    }
    public function RowCount()
    {
        return $this->stmt->rowCount();
    }
}
