<?php
    require_once 'dblatihan.php';
    $db = new DB;
?>
<form action="" method="post">
    <label for="">latihan</label>
    <input type="text" name="latihan"><br>
    <label for="">no latihan</label>
    <input type="number" name="nolatihan" id=""><br>
    <label for="">nama </label>
    <input type="text" name="nama"><br>
    <label for="">alamat</label>
    <input type="text" name="alamat"><br>
    <label for="">telepon</label>
    <input type="text" name="telepon"><br>
    <input type="submit" name="simpan" value="SIMPAN">

</form>
<?php
    if (isset($_POST['simpan'])) {
        $latihan = $_POST['latihan'];
        $nolatihan = $_POST['nolatihan'];
        $nama = $_POST['nama'];
        $alamat = $_POST['alamat'];
        $telepon = $_POST['telepon'];
        
        $sql = "INSERT INTO tbl_latihan VALUES('', '$latihan', $nolatihan, '$nama', '$alamat', '$telepon')";
        $db->runSql($sql);
        echo '<script>
        alert("Data Berhasi Ditambahkan");
        document.location.href="select2.php";
        </script>';
    }

?>