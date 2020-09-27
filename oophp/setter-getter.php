<?php

//jualan produk
//Komik
//Game

class Produk    {               //class parent
    private $judul,
            $penulis,
            $harga,
            $penerbit,
            $diskon = 0;

                      

    public function __construct($judul="judul", $penulis="penulis", $penerbit="penerbit", $harga=0) {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
        

    }

    public function getJudul(){

        return $this->judul;

    }

    public function setJudul($judul){

       // if(!is_string($judul) ){
         //   throw new Exception("Judul Harus String");
        //}

        $this->judul = $judul;

    }

    public function getPenulis(){

        return $this->penulis;

    }

    public function setPenulis($penulis){
 
         $this->penulis = $penulis;
 
     }

     public function getPenerbit(){

        return $this->penulis;

    }

    public function setPenerbit($penerbit){
 
         $this->penerbit = $penerbit;
 
     }

  
    public function setHarga($harga){
 
         $this->harga = $harga;
 
     }


    public function getHarga(){     //menamplikan harga

        return $this->harga - ($this->harga * $this->diskon / 100);

    }


    public function getLabel(){
        return "$this->penulis, $this->penerbit";
    }

    public function getinfoProduk(){
        $str = " {$this->judul}| {$this->getLabel()}, (Rp.{$this->harga}) ";
        
        return $str;
    }

    public function setDiskon($diskon){ //memanggil data diskon

        $this->diskon = $diskon;

    }

    public function getDiskon(){

        return $this->diskon;

    }

}

class CetakInfoProduk   {
    public function cetak(produk $produk){
        $str = "{$produk->judul}| {$produk->getLabel()}, (Rp.{$produk->harga})";
        return $str;
    }
}

class Komik extends Produk  {       //class child
    public $jmlHalaman;


    public function __construct($judul="judul", $penulis="penulis", $penerbit="penerbit", $harga=0, $jmlHalaman=0){

        parent::__construct($judul, $penulis, $penerbit, $harga );
        
        $this->jmlHalaman = $jmlHalaman;

    }


    public function getinfoProduk(){
        $str = "Komik : " . parent::getinfoProduk().  "- {$this->jmlHalaman} Halaman  ";
        return $str;
    }
}

class Games extends Produk  {       //class child
    public $waktuMain;


    public function __construct($judul="judul", $penulis="penulis", $penerbit="penerbit", $harga=0, $waktuMain=0){

        parent::__construct($judul, $penulis, $penerbit, $harga);
        
        $this->waktuMain = $waktuMain;

    }

   

    public function getinfoProduk(){
        $str = "Games : " . parent::getinfoProduk().  "~ {$this->waktuMain} Jam  ";
        return $str;
    }
}


$produk1 = new Games("Rainbow Six", "Tom Clancy", "Ubisoft", 260000, 25 );
$produk2 = new Komik("Tintin", "Herge",  "Gramedia", 98000, 35 );



echo $produk1->getinfoProduk();
echo "<br>";
echo $produk2->getinfoProduk();
echo"<hr>";

$produk1->setDiskon(50);
echo $produk1->getHarga();              //memanggil harga dari funtion getHarga 
echo"<hr>";

$produk1->setJudul("Assasin Creed");
echo $produk1->getJudul();