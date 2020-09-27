<?php
require_once 'Apps/init.php';

//$produk1 = new Games("Rainbow Six", "Tom Clancy", "Ubisoft", 260000, 25 );
//$produk2 = new Komik("Tintin", "Herge",  "Gramedia", 98000, 35 );

//$cetakProduk = new CetakInfoProduk();
//$cetakProduk->tambahProduk( $produk1 ); 
//$cetakProduk->tambahProduk( $produk2 ); 
//echo $cetakProduk->cetak();


use Apps\Service\User as ServiceUser;
use Apps\Produk\User as ProdukUser;


new  ServiceUser;       //pemanggilan class php menggunakan namespace
echo "<br>";
new ProdukUser;
