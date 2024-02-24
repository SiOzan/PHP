<?php

//class
class Manusia{
    //property
    public $nama = "Azmi";
    public $nama2 = "Fadhil";

    //method
    public function makan(){
        echo " $this->nama suka makan Ayam";
    }
    public function minum(){
        echo " $this->nama2 suka minum susu";
    }
}

//object
$cetak = new Manusia();

echo $cetak->makan();
echo "<br>";
echo $cetak->minum();

?>