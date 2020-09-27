<?php

//jualan produk
//Komik
//Game

class Produk    {
    public $judul = "judul",
            $penulis = "penulis",
            $penerbit = "penerbit",
            $harga = 0;

    public function __construct($judul, $penulis, $penerbit, $harga) {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;

    }


    public function getLabel(){
        return "$this->judul, $this->harga";
    }

}

$produk1 = new Produk("Rainbow Six", "Tom Clancy", "Ubisoft", 260000);
$produk2 = new Produk("Tintin", "Herge",  "Gramedia", 98000);


echo "Games :" . $produk1->getLabel();
echo "<br>";
echo "Comic :" . $produk2->getLabel();