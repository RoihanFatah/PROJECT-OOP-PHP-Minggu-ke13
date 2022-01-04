<?php 

require_once "../function.php";



$sql = "DELETE FROM tblkategori WHERE idkategori = $id";

$result = mysqli_query($koneksi, $sql);

header("location:http://localhost/Pem.%20Web%20Minggu-10.%20PHP-MYSQL/restoran/kategori/select.php");


?>