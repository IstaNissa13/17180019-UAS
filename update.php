<?php
$nama=$_POST['nama'];
$jenis_kelamin=$_POST['jenis_kelamin'];
$hobi=$_POST['hobi'];
$alamat=$_POST['alamat'];

include_once("connection.php");
$result=mysqli_query($connect, "UPDATE tabel_siswa SET jenis_kelamin='$jenis_kelamin', hobi='$hobi', alamat='$alamat' where nama_siswa='$nama' ");

if($result){
    echo "<script>alert('Data Successfully Updated'); window.location.href='index.php';</script>";   
}

?>