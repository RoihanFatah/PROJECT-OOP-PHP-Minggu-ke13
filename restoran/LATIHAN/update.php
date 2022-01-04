<?php 

require_once "../function.php";


$sql = "SELECT * FROM tblkategori WHERE idkategori = $id";
$result = mysqli_query($koneksi, $sql);

$row = mysqli_fetch_assoc($result);



// $kategori = 'rujak';
// $id = 7;
// $sql = "UPDATE tblkategori SET kategori = '$kategori' WHERE idkategori = $id";

// mysqli_query($koneksi, $sql);

// echo $sql;

?>

<form action="" method="post">
    <label for="">Kategori : </label>
    <input type="text" name="kategori" value ="<?php echo $row['kategori'] ?>">
    <input type="submit" name="submit" value="simpan">
</form>

<?php 

if (isset ($_POST['simpan'])) {
    $kategori = $_POST['kategori'];

    $sql = "UPDATE tblkategori SET kategori = '$kategori' WHERE idkategori = $id";

    mysqli_query($koneksi, $sql);

    echo $sql;
}

?>