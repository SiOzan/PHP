<?php

$nama = "Paujan Hikmah Rohman";
$umur = 17;
$nilai = 89.5;
$status = true;

echo "<h1><pre>Nama : $nama <br>";
echo "Umur : $umur <br>";
printf("Nilai : %.3f <br>", $nilai);
if ($status) {
    echo "Status siswa aktif";
}   else {
    echo "Status siswa tidak aktif";
}

?>