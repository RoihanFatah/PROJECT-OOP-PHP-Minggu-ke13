<form action="" method="post">
    <label for="">Kategori : </label>
    <input type="text" name="kategori" autocomplete="off">
    <input type="submit" name="submit" value="simpan">
</form>


<?php 

require_once "../function.php";

if (isset ($_POST['submit'])) {
    $kategori = $_POST['kategori'];

    $sql = "INSERT INTO tblkategori VALUES ('', '$kategori')";

    $result = mysqli_query($koneksi, $sql);

    header("location :http://localhost/Pem.%20Web%20Minggu-10.%20PHP-MYSQL/restoran/kategori/select.php");
    
}


?>