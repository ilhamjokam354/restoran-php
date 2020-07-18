<form action="" method="post">
    <label for="kategori"> Kategori:</label>
    <input type="text" name="kategori" id="kategori" >
    <br>
    <input type="submit" name="submit" value="Kirim">
</form>

<?php
    require_once '../function.php';

    if (isset($_POST['submit'])) {
        $kategori = $_POST['kategori'];
        // echo $kategori; 
        $sql = "INSERT INTO tbl_kategori VALUES('', '$kategori')";
        $result = mysqli_query($koneksi, $sql);
        echo '<script>
        alert("DATA TELAH TERSIMPAN");
        document.location.href="select.php";
        </script>
        ';
    }

    


?>