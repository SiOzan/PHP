<?php

class bangunDatar{

    public $p = "<h2>Mengitung Luas Persegi</h2>";
    public $pp = "<h2>Menghitung Luas Persegi Panjang</h2>";
    public $s = "<h2>Menghitung Luas Segitiga</h2>";
    public $l = "<h2>Menghitung Luas Lingkaran</h2>";

    public function persegi(){
        echo "$this->p";
        echo "Rumus : sisi x sisi <br>";
        $sisi = 5;
        $hasil = $sisi * $sisi;
        echo "Sisi : $sisi <br>";
        echo "Luasnya : $hasil <br>";
    }
    
    public function persegiPanjang(){
        echo "$this->pp";
        echo "Rumus : Panjang x Lebar <br>";
        $panjang = 5;
        $lebar = 10;
        $hasil = $panjang * $lebar;
        echo "Panjang : $panjang <br>";
        echo "Lebar : $lebar <br>";
        echo "Hasilnya : $hasil <br>";
    }
    
    public function segitiga(){
        echo "$this->s";
        echo "Rumus : Alas x Tinggi x 1/2(setengah) <br>";
        $alas = 5;
        $tinggi = 10;
        $hasil = $alas * $tinggi * 0.5;
        echo "Alas : $alas <br>";
        echo "Tinggi : $tinggi <br>";
        echo "Hasilny : $hasil <br>";
    }
    
    public function lingkaran(){
        echo "$this->l";
        echo "Rumus : r x r <br>";
        $r = 5;
        $hasil = $r * $r * 3.14;
        echo "Jari-jari : $r <br>";
        echo "Hasilnya : $hasil <br>";
    }
}

$cetak = new bangunDatar();

echo $cetak->persegi();
echo "<br>";
echo $cetak->persegiPanjang();
echo "<br>";
echo $cetak->segitiga();
echo "<br>";
echo $cetak->lingkaran();

?>