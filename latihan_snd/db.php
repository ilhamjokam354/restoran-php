<?php
    // yang perlu kita pahami belajar OOP adalah public private kalo public kita memanggilnya harus buat object 
    //dahulu  baru kita bisa panggil kalo private kita buat funtion publiya dahilu baru kita bisa panggil dan
    // harus membuat objectnya
    class DB{
        //data yang ada didalam kelas disebut property
        public  $host = 'localhost';
        private $user = 'root';
        private $password = '';
        private $database = 'db_restoran';

        public function __construct(){ // function __construct ini dia akan langsung jalan ketika object sudah dipanggil atau dibuat
            echo 'function construct';
        }

        // function yg da di kelas di sebut method
        public function selectData(){
            echo 'objek function';
        }

        //contoh mengambil private database
        // keyword $this itu memanggil dari luar dirinya sendiri atau dari class nya 
        public function getDatabase(){
            echo $this->database; //kalau memakai return di outputan kita jangan lupa memakai echo kalau tidak akan tidak keluar outputannya 
        }

        //contoh kita memanggil function dari class sendiri
        public function tampil(){
            echo $this->selectData(); // setelah panah pastikan tidak boleah ada tanda $ atau dolar(variabel)
        }
        public static function insertData(){ // untuk funtion static kita tidak usah memanggil object cukup memnaggil nama class nya
            echo 'ini adalah funtion static tanpa harus memanggil object';
        }
    }
    DB::insertData(); //untuk funtion static tidak perlu memanggil object nya cukup nama class nya dan nama funtion yg dibuat

    echo '<br>';
    $db = new DB; //ini adalah cara membuat  object

    echo '<br>';

    $db->selectData();
    echo '<br>';
    echo $db->host; // untuk memanggil property private yg ada dikelas DB kita tidak bisa mengambil secara gampang harus mempunyai function kemudian harus memakai syntax $this
    echo '<br>';
    //kemudian kita outputkan hasil private databasenya
    $db->getDatabase(); // kalau di function memakai echon kita tidak usah lagi memakai echo pada waktu memangil nya

    echo '<br>';
    //kemudian coba kita outputkan hasil function selectData
    $db->tampil();
    

?>