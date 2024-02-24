<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center>
        <h2>form Biodata Diri</h2>
        <form method="POST" action="">
        <table>
            <tr>
                <td>Nama</td>
                <td> : </td>
                <td><input type="text" name="nama"></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><input type="submit" name="simpan" value="kirim"></td>
            </tr>
        </table>
        </form>
    </center>
</body>
</html>

<?php
if (isset($_POST['simpan'])) {
    $nama = $_POST['nama'];

    echo "<br><br><br><br><center>============ Biodata Diri ============<br>";
    echo "==================================<br>";
    echo "Nama = $nama <br>";
}
?>