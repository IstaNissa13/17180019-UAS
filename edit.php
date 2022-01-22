<?php 
include_once("connection.php");
 $id=$_GET['nama_siswa'];
 $data=mysqli_query($connect, "SELECT * from tbl_siswa where nama_siswa='$id' ");
 while($datauser=mysqli_fetch_array($data)){
    $nama=$datauser['nama_siswa'];
    $jenis_kelamin=$datauser['jenis_kelamin'];
    $hobi=$datauser['hobi'];
    $alamat=$datauser['alamat'];
 }

?>

<form action="update.php" method="post">
    <table>
        <tr>
            <td>Nama Siswa</td>
            <td>:</td>
            <td><input type="text" value="<?php echo $nama ?>" name="nama" readonly></td>
        </tr>

        <tr>
            <td>Jenis Kelamin</td>
            <td>:</td>
            <td><input type="radio" value="<?php echo $jenis_kelamin ?>" name="jenis_kelamin">
                <label>Laki-laki</label>
                <input type="radio" value="<?php echo $jenis_kelamin ?>" name="jenis_kelamin">
                <label>Perempuan</label>
            </td>
        </tr>

        <tr>
            <td>Hobi</td>
            <td>:</td>
            <td><input type="text" value="<?php echo $hobi ?>" name="hobi"></td>
        </tr>

        <tr>
            <td>Alamat</td>
            <td>:</td>
            <td><input type="text" value="<?php echo $alamat ?>" name="alamat"></td>
        </tr>

        <tr>
            <td><input type="submit" value="Update" name="update"></td>
        </tr>
    </table>
</form>