<?php
    require_once '../function.php';
    //$id = 24;
    $sql = "DELETE FROM tbl_kategori WHERE id_kategori= $id ";
    $result = mysqli_query($koneksi, $sql);
    //echo $sql;


?>