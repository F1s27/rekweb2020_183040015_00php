<?php



 interface InfoProduk{

    public function getInfoProduk();

 }

  abstract class Produk    {               //class parent
    protected $judul,
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

   
    
    abstract public function getInfo();
    
   

    public function setDiskon($diskon){ //memanggil data diskon

        $this->diskon = $diskon;

    }

    public function getDiskon(){

        return $this->diskon;

    }

}

class CetakInfoProduk   {
    public $daftarProduk = array();


    public function tambahProduk( Produk $produk ){

        $this->daftarProduk[] = $produk; 

    }


    public function cetak(){
        $str = "DAFTAR PRODUK : <br> ";

        foreach($this->daftarProduk as $p){

            $str .= "- {$p->getInfoProduk()}  <br>";

        }



        return $str;
    }
}

class Komik extends Produk implements InfoProduk  {       //class child
    public $jmlHalaman;


    public function __construct($judul="judul", $penulis="penulis", $penerbit="penerbit", $harga=0, $jmlHalaman=0){

        parent::__construct($judul, $penulis, $penerbit, $harga );
        
        $this->jmlHalaman = $jmlHalaman;

    }

    public function getInfo(){
        $str = " {$this->judul}| {$this->getLabel()}, (Rp.{$this->harga}) ";
        
        return $str;
    }


    public function getInfoProduk(){
        $str = "Komik : " . $this->getInfo().  "- {$this->jmlHalaman} Halaman  ";
        return $str;
    }
}

class Games extends Produk implements InfoProduk  {       //class child
    public $waktuMain;


    public function __construct($judul="judul", $penulis="penulis", $penerbit="penerbit", $harga=0, $waktuMain=0){

        parent::__construct($judul, $penulis, $penerbit, $harga);
        
        $this->waktuMain = $waktuMain;

    }

    public function getInfo(){
        $str = " {$this->judul}| {$this->getLabel()}, (Rp.{$this->harga}) ";
        
        return $str;
    }


    public function getInfoProduk(){
        $str = "Games : " . $this->getInfo().  "~ {$this->waktuMain} Jam  ";
        return $str;
    }
}


$produk1 = new Games("Rainbow Six", "Tom Clancy", "Ubisoft", 260000, 25 );
$produk2 = new Komik("Tintin", "Herge",  "Gramedia", 98000, 35 );

$cetakProduk = new CetakInfoProduk();
$cetakProduk->tambahProduk( $produk1 ); 
$cetakProduk->tambahProduk( $produk2 ); 
echo $cetakProduk->cetak();
