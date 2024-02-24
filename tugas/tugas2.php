<html>
<head>
</head>
<body>
<center>
<h2>Masukan BIODATA anda</h2>
<form action="" method="post">
<table>
    <tr>
        <td>Nama</td>
        <td><input type="text" name="nama" placeholder="masukan Nama"></td>
    </tr>
    <tr>
        <td>Tanggal Lahir</td>
        <td><input type="date" name="tl" placeholder="masukan tanggal lahir anda"> </td>
    </tr>
    <tr>
        <td>Jenis kelamin</td>
        <td>
            <input type="radio" name="jk" value="pria">Pria
            <input type="radio" name="jk" value="wanita">Wanita
        </td>
    </tr>
    <tr>
        <td>alamat</td>
        <td><textarea name="alamat"></textarea></td>
    </tr>
    <tr>
        <td>Agama</td>
        <td>
            <select name="agama">
            <option value="Islam">Islam</option>
            <option value="Kristen">Kristen</option>
            <option value="Katholik">Katholik</option>
            <option value="Buddha">Buddha</option>
            <option value="Hindu">Hindu</option>
            <option value="Khonghucu">Khonghucu</option>
            </select>
        </td>
    </tr>
    <tr>
        <td>Pendidikan Terakhir</td>
        <td>
            <!-- <input type="checkbox" name="pt" value="SD">SD
            <input type="checkbox" name="pt" value="SMP">SMP
            <input type="checkbox" name="pt" value="SMA/SMK">SMA/SMK -->
            <select name="pt">
            <option value="TK">TK</option>
            <option value="SD">SD</option>
            <option value="SMP/MTS">SMP/MTS</option>
            <option value="SMA/SMK/MA">SMA/SMK/MA</option>
            </select>
        </td>
    </tr>
    <tr>
        <td>Status</td>
        <td>
            <select name="status">
            <option value="Pelajar">Pelajar</option>
            <option value="Guru">Guru</option>
            <option value="Karyawan">Karyawan</option>
            </select>
        </td>
    </tr>
    <tr>
        <td>Hobi</td>
            <td><textarea name="hobi"></textarea></td>
        <!-- <td>
            <input type="checkbox" name="hobi" value="Futsal">Futsal
            <input type="checkbox" name="hobi" value="Renang">Renang
            <input type="checkbox" name="hobi" value="Hiking">Hiking
        </td> -->
    </tr>
    <!-- <tr>
        <td></td>
        <td>
        <input type="checkbox" name="hobi" value="Ngusep">Ngusep
            <input type="checkbox" name="hobi" value="Main game">Main game
            <input type="checkbox" name="hobi" value="Rebahan">Rebahan
        </td>
    </tr> -->
    <tr>
        <td>Cita-Cita</td>
        <td><textarea name="cc"></textarea></td>
    </tr>
    <tr>
        <td></td>
        <td>
            <input type="submit" name='simpan' value="submit">
            <input type="submit" value="reset">
            </input>
        </td>
    </tr>
</table>
</form>
</body>
</html>

<?php
if (isset($_POST['simpan'])) {
    $nama = $_POST['nama'];
    $tl = $_POST['tl'];
    $jk = $_POST['jk'];
    $alamat = $_POST['alamat'];
    $agama = $_POST['agama'];
    $pt = $_POST['pt'];
    $status = $_POST['status'];
    $hobi = $_POST['hobi'];
    $cc = $_POST['cc'];

    echo "<br><br>============ Biodata Diri ============<br>";
    echo "==================================<br>";
    echo "Nama = $nama </tr><br>";
    echo "Tanggal Lahir = $tl <br>";
    echo "Jenis Kelamin = $jk <br>";
    echo "Alamat = $alamat <br>";
    echo "Agama = $agama <br>";
    echo "Pendidikan Terakhir = $pt <br>";
    echo "Status = $status <br>";
    echo "Hobi = $hobi <br>";
    echo "Cita-cita = $cc <br>";
}
?>


    <!-- <tr>
        <td>Upload Photo anda</td>
        <td><input type="file" name="gambar"/></td>
    </tr> -->