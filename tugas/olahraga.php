<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center><h1>FORM PENDAFTARAN</h1>
    <form action="proses-or.php" method="post">
        <table>
            <tr>
                <td>Nama</td>
                <td> : </td>
                <td><input type="text" name="nama" placeholder="masukan Nama"></td>
            </tr>
            <tr>
                <td>Jenis kelamin</td>
                <td> : </td>
                <td>
                    <select name="jk">
                        <option value="laki-laki">Laki-laki</option>
                        <option value="Perempuan">Perempuan</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Tanggal Lahir</td>
                <td> : </td>
                <td><input type="date" name="tl"></td>
            </tr>
            <tr>
                <td>Kategori Olaraga</td>
                <td> : </td>
                <td>
                    <input type="radio" name="ko" value="Sepak Bola">Sepak Bola
                    <input type="radio" name="ko" value="Bulu Tangkis">Bulu tangkis<br>
                    <input type="radio" name="ko" value="Renang">Renang
                </td>
            </tr>
            <tr>
                <td>Kelas Pelatihan</td>
                <td> : </td>
                <td>
                    <input type="checkbox" name="kelas" value="Pemula"> Pemula
                    <input type="checkbox" name="kelas" value="Menengah"> Menengah <br>
                    <input type="checkbox" name="kelas" value="Lanjutan"> Lanjutan
                </td>
            </tr>
            <tr>
                <td>Kemampuan Fisik</td>
                <td> : </td>
                <td><textarea name="kf"></textarea></td>
            </tr>
            <tr>
                <td>Pembayaran</td>
                <td> : </td>
                <td>
                    <select name="pembayaran">
                        <option value="Transfer Bank">Transfer Bank</option>
                        <option value="Kartu Kredit">Kartu Kredit</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td>
                    <input type="submit" name="simpan" value="submit">
                    <input type="submit" value="reset">
                </td>
            </tr>
        </table>
    </form>
</body>
</html>