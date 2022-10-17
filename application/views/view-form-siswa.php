<html>
<head>
    <title>Form Input Data Siswa</title>
</head>
<body>
    <center>
        <form action="<?= base_url('datasiswa/cetak'); ?>"
        method="post">
            <table>
                <tr>
                    <th colspan="3">
                    Form Input Data Siswa
                    </th>
                </tr>
                <tr>
                    <td colspan="3">
                        <hr>
                    </td>
                </tr>
                <tr>
                    <th>Nama Siswa</th>
                    <th>:</th>
                    <td>
                        <input type="text" name="nama" id="nama">
                    </td>
                </tr>
                <tr>
                    <th>NIS</th>
                    <td>:</td>
                    <td>
                        <input type="text" name="nis" id="nis">
                    </td>
                </tr>
                <tr>
                    <th>Kelas</th>
                    <td>:</td>
                    <td>
                        <input type="text" name="kelas" id="kelas">
                    </td>
                </tr>
                <tr>
                    <th>Tanggal Lahir</th>
                    <td>:</td>
                    <td>
                        <input type="text" name="tanggallahir" id="tanggallahir">
                    </td>
                </tr>
                <tr>
                    <th>Tempat Lahir</th>
                    <td>:</td>
                    <td>
                        <input type="text" name="tempatlahir" id="tempatlahir">
                    </td>
                </tr>
                <tr>
                    <th>Alamat</th>
                    <td>:</td>
                    <td>
                        <input type="text" name="alamat" id="alamat">
                    </td>
                </tr>
                <tr>
                    <th>Jenis Kelamin</th>
                    <td>:</td>
                    <td>
                        <input type="radio" id="laki" name="jeniskelamin" value="Laki-Laki">
                        <label for="laki">Laki-Laki</label>
                        <input type="radio" id="perempuan" name="jeniskelamin" value="Perempuan">
                        <label for="perempuan">Perempuan</label>
                    </td>
                </tr>
                <tr>
                    <th>Agama</th>
                    <td>:</td>
                    <td>
                        <select name="agama" id="agama">
                            <option value="">Pilih Agama</option>
                            <option value="2">Islam</option>
                            <option value="3">Kristen Katholik</option>
                            <option value="4">Kristen Protestan</option>
                            <option value="5">Budha</option>
                            <option value="6">Hindu</option>
                            <option value="7">Khonghucu</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td colspan="3" align="center">
                        <input type="submit" value="Submit">
                    </td><br>
                </tr>
            </table>
        </form>
    </center>
</body>
</html>