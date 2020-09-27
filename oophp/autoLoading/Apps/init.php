<?php

//cara memanggil class di file php lain secara manual

//require_once 'Produk/InfoProduk.php';
//require_once 'Produk/Produk.php';
//require_once 'Produk/Komik.php';
//require_once 'Produk/Games.php';
//require_once 'Produk/CetakInfoProduk.php';



spl_autoload_register(function( $class ){   //pemanggilan class php dengan cepat

    require_once __DIR__ . '/Produk/' . $class . '.php';

});