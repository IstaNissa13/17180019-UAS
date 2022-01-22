<!DOCTYPE html>
<html>

<head>
    <title> UAS-WEB </title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <h2>LIST DATA SISWA </h2>

    <table>
        <thead>
            <tr>
                <th> Nama Siswa </th>
                <th> Jenis Kelamin </th>
                <th> Hobi </th>
                <th> Alamat </th>
                <th> Action </th>
            </tr>
        </thead>


        <?php 
    include_once("connection.php");
    $data=mysqli_query($connect, "SELECT * FROM tabel_siswa");
    while($datauser=mysqli_fetch_array($data)){
    ?>
        <tr>
            <td><?php echo $datauser['nama_siswa']; ?></td>
            <td><?php echo $datauser['jenis_kelamin'] ;?></td>
            <td><?php echo $datauser['hobi']; ?></td>
            <td><?php echo $datauser['alamat']; ?></td>
            <td><a href="edit.php?nama_siswa=<?php echo $datauser['nama_siswa']; ?>"> Edit </a> |
                <a href="delete.php?nama_siswa=<?php echo $datauser['nama_siswa']; ?>"> Delete </a>
            </td>
        </tr>

        <?php
    }
    ?>

    </table>

    <a href=" input_data.php">Add Data</a>
</body>

</html>