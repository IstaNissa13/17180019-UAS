<a href="index.php"> Go to home </a> <br>
<form action="submit.php" method="post">
    <table width="25%" border="0">
        <tr>
            <td>Nama Siswa</td>
            <td>:</td>
            <td><input type="text" name="nama"></td>
        </tr>

        <tr>
            <td>Jenis Kelamin</td>
            <td>:</td>
            <td><input type="radio" value="Laki-laki" name="jenis_kelamin">
                <label>Laki-laki</label>
                <input type="radio" value="Perempuan" name="jenis_kelamin">
                <label>Perempuan</label>
            </td>
        </tr>

        <tr>
            <td>Hobi</td>
            <td>:</td>
            <td><input type="text" name="hobi"></td>
        </tr>

        <tr>
            <td>Alamat</td>
            <td>:</td>
            <td><input type="text" name="alamat"></td>
        </tr>

        <tr>
            <td><input type="submit" value="Save"></td>
        </tr>
    </table>
</form>