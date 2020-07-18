<?php
    require_once '../function.php';

    $sql = "SELECT * FROM  tbl_kategori WHERE id_kategori = $id";
    $result = mysqli_query($koneksi, $sql);

    $row = mysqli_fetch_assoc($result);


    //echo $row['kategori'];


    //$kategori = 'Buah Buah an';
    //$id = 2;
    
    //echo $result;
    //echo $sql;




?>
<form action="" method="post">
    <label for="kategori"> Kategori</label>
    <input type="text" name="kategori" id="kategori" value="<?php  echo$row['kategori'];?>">
    <br>
    <input type="submit" name="simpan" value="Simpan">
</form>

<?php
    if (isset($_POST['simpan'])) {
        $kategori = $_POST['kategori'];
        
        echo '<script>
        confirm("Apakah Anda Yakin Akan Mengubah");
        document.location.href="select.php";
        </script>';
        
        $sql = "UPDATE tbl_kategori SET kategori ='$kategori' WHERE id_kategori = $id  ";
        $result = mysqli_query($koneksi, $sql);
        
    }


?>