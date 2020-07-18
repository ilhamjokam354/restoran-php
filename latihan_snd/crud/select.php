<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<?php
    require_once '../function.php';


    if (isset($_GET['update'])) {
        $id = $_GET['update'];
        require_once 'update.php';
    }
    if (isset($_GET['hapus'])) {

        $id = $_GET['hapus'];
        echo '<script>
        confirm("Apakah Anda Yakin Akan Menghapus");
        </script>';
        require_once 'delete.php';
    }

    $sql = "SELECT id_kategori FROM tbl_kategori"; //mulai paging
    $result = mysqli_query($koneksi, $sql);

    $jumlahdata = mysqli_num_rows($result);
    echo '<div align="center"><h3><a href="insert.php">Tambah Data </a></h3></div>';
    echo '<div align="center">';


   
    $banyak = 8;

    $halaman = ceil($jumlahdata / $banyak); //ceil digunakan untuk pembulatan keatas
    
    for ($i=1; $i <= $halaman ; $i++) { 
        echo '<a href="?p='.$i.'">'.$i.'</a>';
        echo '&nbsp &nbsp';
    }

    if (isset($_GET['p'])) {
        $p = $_GET['p'];
        //echo $p;
        $mulai = ($p * $banyak) - $banyak;
    }else {
        $mulai = 0;
    }
    

    echo '</div>';

    $sql = "SELECT * FROM tbl_kategori LIMIT $mulai, $banyak "; //selesai paging

    $result = mysqli_query($koneksi, $sql);

    // var_dump($result);

    // echo '<br>';
      
    $jumlah = mysqli_num_rows($result);
    // echo $jumlah;
    $no = $mulai+1;
    
    //echo '<center>';
    echo '
        <table border="1" align="center" width="400" height="50" cellspacing="0" cellpadding="5">
        <tr >
            <th style="background-color:#3b7dc4; ">No </th>
            <th style="background-color:#3b7dc4; "> Kategori </th>
            <th style="background-color:#3b7dc4; " width="100"> Aksi </th>
        </tr>
    ';

    if ($jumlah > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            echo '<tr>';
            echo '<td >'.$no++.'</td>';
            echo '<td>'.$row['kategori'].'</td>';
            echo '<td width="200" height="30"><div ><a href="?hapus='.$row['id_kategori'].'">'.'Hapus'.'</a>| <a href="?update='.$row['id_kategori'].'">'.'Update'.'</a> </td>';
            echo '</tr>';
        }
    }

    echo '</table>';
    echo '<br>';
    //echo '<div><a href="insert.php">Tambah Data </a></div>';
    //echo '</center>';

    
?>