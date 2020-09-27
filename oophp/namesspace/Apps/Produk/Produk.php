<?php

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