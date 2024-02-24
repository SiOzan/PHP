<?php

class contoh{

    public function __construct(){
        echo "Assalamualaikum Ukhti <br>";
    }

    public function perkenalan(){
        echo "Nama saya fakhri SIIUUUUUU..... <br>";
    }

    public function __destruct(){
        echo "Boleh kenalan ga";
    }

}
$cetak = new contoh();

echo $cetak->perkenalan();

?>