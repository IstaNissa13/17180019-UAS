<?php
$nama=$_POST['nama'];
$jenis_kelamin=$_POST['jenis_kelamin'];
$hobi=$_POST['hobi'];
$alamat=$_POST['alamat'];

include_once("connection.php");
$result=mysqli_query($connect, "INSERT INTO tabel_siswa VALUES ('$nama', '$jenis_kelamin', '$hobi', '$alamat')");

if($result){
    echo "<script>alert('Data Successfully Added'); window.location.href='index.php';</script>";   
}

?>