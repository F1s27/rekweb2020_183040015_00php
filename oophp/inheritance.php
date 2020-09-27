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
            $waktuMain = 0;
            

    public function __construct($judul, $penulis, $penerbit, $harga, $jmlHalaman, $waktuMain) {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
        $this->jmlHalaman = $jmlHalaman;
        $this->waktuMain = $waktuMain;
        


    }


    public function getLabel(){
        return "$this->penulis, $this->penerbit";
    }

    public function getinfoProduk(){
        $str = " {$this->judul}| {$this->getLabel()}, (Rp.{$this->harga}) ";
        
        return $str;
    }

}

class CetakInfoProduk   {
    public function cetak(produk $produk){
        $str = "{$produk->judul}| {$produk->getLabel()}, (Rp.{$produk->harga})";
        return $str;
    }
}

class Komik extends Produk  {
    public function getinfoProduk(){
        $str = "Komik : {$this->judul}| {$this->getLabel()}, (Rp.{$this->harga}), - {$this->jmlHalaman} Halaman  ";
        return $str;
    }
}

class Games extends Produk  {
    public function getinfoProduk(){
        $str = "Games : {$this->judul}| {$this->getLabel()}, (Rp.{$this->harga}), ~ {$this->waktuMain} jam  ";
        return $str;
    }
}


$produk1 = new Games("Rainbow Six", "Tom Clancy", "Ubisoft", 260000, 0, 25, );
$produk2 = new Komik("Tintin", "Herge",  "Gramedia", 98000, 35, 0, );



echo $produk1->getinfoProduk();
echo "<br>";
echo $produk2->getinfoProduk();