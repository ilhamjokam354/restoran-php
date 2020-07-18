<form action="" method='post'>
    <label for="pelanggan">Pelanggan</label>
    <input type="text" name="pelanggan" id="pelanggan" required><br>
    <label for="alamat">Alamat</label>
    <input type="text" name="alamat" id="alamat"><br>
    <label for="telp">Telepon</label>
    <input type="text " name="telp" id="telp"><br>
    <input type="submit" name="submit" value="Kirim">
</form>

<?php
    require_once 'function.php';

    if (isset($_POST['submit'])) {
        $pelanggan = $_POST['pelanggan'];
        $alamat = $_POST['alamat'];
        $telepon = $_POST['telp'];

        $result = mysqli_query($koneksi, "INSERT INTO tbl_pelanggan VALUES('', '$pelanggan', '$alamat', '$telepon')");
        echo '<script>
        alert("Data Berhasil Dikirim");
        document.location.href="selectlatihan.php";
        </script>';
    }
   

?>
