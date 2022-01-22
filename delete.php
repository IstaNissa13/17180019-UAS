<?php
$nama=$_GET['nama_siswa'];

include_once("connection.php");
$result=mysqli_query($connect, "DELETE FROM tabel_siswa where nama_siswa='$nama' ");
if($result){
    echo "<script>alert('Data Successfully Deleted'); window.location.href='index.php';</script>";   
}


?>