<?php

//jualan produk
//Komik
//Game

class Produk    {
    public $judul = "judul",
            $penulis = "penulis",
            $penerbit = "penerbit",
            $harga = 0;

    


    public function getLabel(){
        return "$this->judul, $this->harga";
    }

}

$produk1 = new Produk();
$produk1 ->judul = "Rainbow six";
$produk1 ->penulis = "Tom Clancy";
$produk1 ->penerbit = "Ubisoft";
$produk1 ->harga = 260000;
var_dump($produk1);

echo "Game : $produk1->judul,$produk1->harga";
echo $produk1->getLabel();

$produk2 = new Produk();
$produk2 ->judul = "Tintin";
$produk2 ->penulis = "Herge";
$produk2 ->penerbit = "Gramedia";
$produk2 ->harga = 98000;
var_dump($produk2);

echo "Games :" . $produk1->getLabel();
echo "<br>";
echo "Comic :" . $produk2->getLabel();