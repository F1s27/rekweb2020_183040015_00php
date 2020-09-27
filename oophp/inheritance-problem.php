<?php

//jualan produk
//Komik
//Game

class Produk    {
    public $judul = "judul",
            $penulis = "penulis",
            $penerbit = "penerbit",
            $harga = 0,
            $jmlHalaman = 0,
            $waktuMain = 0,
            $tipe = "tipe";

    public function __construct($judul, $penulis, $penerbit, $harga, $jmlHalaman, $waktuMain, $tipe) {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
        $this->jmlHalaman = $jmlHalaman;
        $this->waktuMain = $waktuMain;
        $this->tipe = $tipe;


    }


    public function getLabel(){
        return "$this->penulis, $this->penerbit";
    }

    public function getinfo(){
        $str = "{$this->tipe} : {$this->judul}| {$this->getLabel()}, (Rp.{$this->harga}) ";
        if( $this->tipe == "Komik"){
            $str .= "- {$this->jmlHalaman} Halaman";
        }else if ($this->tipe == "Games") {
            $str .= "~ {$this->waktuMain} Jam";
        }    
        return $str;
    }

}

class CetakInfoProduk   {
    public function cetak(produk $produk){
        $str = "{$produk->judul}| {$produk->getLabel()}, (Rp.{$produk->harga})";
        return $str;
    }
}

$produk1 = new Produk("Rainbow Six", "Tom Clancy", "Ubisoft", 260000, 0, 25, "Games");
$produk2 = new Produk("Tintin", "Herge",  "Gramedia", 98000, 35, 0, "Komik");



echo $produk1->getinfo();
echo "<br>";
echo $produk2->getinfo();