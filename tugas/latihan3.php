<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
        <center>
            <table>
                <h2>==> Daftar SMK ASSALAAM <==</h2>

                <tr>
                    <td>Nama</td>
                    <td> : </td>
                    <td><input type="text" name="nama" placeholder="masukan nama"></td>
                </tr>
                <tr>
                    <td>Tanggal Lahir</td>
                    <td> : </td>
                    <td><input type="date" name="tl"></td>
                </tr>
                <tr>
                    <td>Jenis Kelamin</td>
                    <td> : </td>
                    <td>
                        <input type="radio" name="jk" value="Laki-laki">Laki-laki
                        <input type="radio" name="jk" value="Perempuan">Perempuan
                    </td>
                </tr>
                <tr>
                    <td>Biaya Register</td>
                    <td> : </td>
                    <td><input type="number" name="br"></td>
                </tr>
                <tr>
                    <td>Jurusan</td>
                    <td> : </td>
                    <td>
                        <select name="jurusan">
                            <option value="RPL">RPL</option>
                            <option value="TKRO">TKRO</option>
                            <option value="TBSM">TBSM</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>
                        <input type="submit" name="kirim" placeholder="kirim">
                        <input type="reset" >
                    </td>
                </tr>
            </table>
        </center>
    </form>
</body>
</html>

<?php

if (isset($_POST['kirim'])){
    $nama = $_POST['nama'];
    $tl = $_POST['tl'];
    $jk = $_POST['jk'];
    $br = $_POST['br'];
    $jurusan = $_POST['jurusan'];
    $harga = 0;

    if ($jurusan == "RPL") {
        $harga = 2500000;
    }   elseif ($jurusan == "TKRO") {
        $harga = 3000000;
    }   elseif ($jurusan == "TBSM") {
        $harga = 3500000;
    }   else {
        echo "Silahkan pilih jurusan terlebbih dahulu";
    }

    $total = $br + $harga;

    echo "<center><br><br><h2>======>Struk Register<======</h2>";
    echo "<h2><pre><table><tr> <td>Nama</td> <td> : </td> <td>$nama</td> </tr>";
    echo "<tr> <td>Tanggal Lahir</td> <td> : </td> <td>$tl</td> </tr>";
    echo "<tr> <td>Jenis Kelamin</td> <td> : </td> <td>$jk<td> </tr>";
    echo "<tr> <td>Biaya registrasi</td> <td> : </td> <td>$br<td> </tr>";
    echo "<tr> <td>Jurusan</td> <td> : </td> <td>$jurusan<td> </tr>";
    echo "<tr> <td>Biaya jurusan</td> <td> : </td> <td>$harga</td> </tr>";
    echo "<tr> <td>Total pembayaran</td> <td> : </td> <td>$total</td> </tr></table>";
}

?>