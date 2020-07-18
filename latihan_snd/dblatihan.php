<?php
    class DB{
        private $server = "localhost";
        private $user = "root";
        private $password = "";
        private $database = "latihan";
        private $koneksi;

        public function __construct(){
            $this->koneksi = $this->koneksiDb();

        }
        public function koneksiDb(){
            $koneksi = mysqli_connect($this->server, $this->user, $this->password, $this->database);
            return $koneksi;
        }
        public function getItem($sql){
            $result = mysqli_query($this->koneksi, $sql);
            $row = mysqli_fetch_assoc($result);
            return $row;
        }
        public function getAll($sql){
            $result = mysqli_query($this->koneksi, $sql);
            while ($row = mysqli_fetch_assoc($result)) {
                $data[]= $row;
            }
            return $data;
        }
        public function runSql($sql){
            $result = mysqli_query($this->koneksi,$sql );
            
        }
        public function rowCount($sql){
            $result = mysqli_query($this->koneksi, $sql);
            $count = mysqli_num_rows($result);
            return $count;
        }

    }
    $db = new DB;
    

?>