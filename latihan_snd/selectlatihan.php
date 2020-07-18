
<?php
    require_once 'function.php';

    $sql = "SELECT id_pelanggan FROM tbl_pelanggan ";
    $result = mysqli_query($koneksi, $sql);

    $jumlahdata = mysqli_num_rows($result);
    
    $mulai = 0;
    $banyak = 2;
    
    echo '<div align="center">';
    echo '<h2 align="center"><a href="insertlatihan.php">Tambah Data </a> </h2>';
    $halaman = ceil($jumlahdata / $banyak) ;
    

    for ($i=1; $i <=$halaman ; $i++) { 
        echo '<a href="?p='.$i.'">'.$i.'</a>';
        echo '&nbsp';
        

    }

    if (isset($_GET['p'])) {
        $p = $_GET['p'];
        // echo $p;
        $mulai = ($p * $banyak) - $banyak;
    }else {
        $mulai = 0;
    }
    

    echo '</div>';

    

    $sql = "SELECT * FROM tbl_pelanggan LIMIT $mulai, $banyak";
    $result = mysqli_query($koneksi, $sql);

    $hasil = mysqli_num_rows($result);
    

    echo '<table border="1" align="center">
    
        <tr>
            <th>NO </th>
            <th>Pelanggan </th>
            <th>Alamat </th>
            <th>Telepon </th>
        </tr>
    ';

    $no =$mulai + 1;

    if ($hasil > 0 ) {
        while ($row = mysqli_fetch_assoc($result)) {
            echo '<tr>';
            echo  '<td>'. $no++.'</td>';
            echo '<td>'.$row['pelanggan'].'</td>';
            echo '<td>'.$row['alamat'].'</td>';
            echo '<td>'.$row ['telp'].'</td>';
            echo '</tr>';
        }
    }
    echo '</table>';
    
    


?>