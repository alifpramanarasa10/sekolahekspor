<?php

//class manusia
class manusia{
    //property
    public $nama;
    private $warna = "merah";
    
    //1. method construct di jalankan pertama kali
    function __construct(){
        $this->nama = "Foo";
        $example = "Bar";
        echo $example." ini adalah isi method construct <br/>";
    }
    
    //3. method destruct di jalankan terakhir
    function __destruct(){
        $this->nama = "John";
        echo $this->nama." ini adalah isi method destruct <br/>";
    }
    
    //2. method manusia
    function tampilkan_nama(){
        return $this->nama .' adalah nama saya,<br> saya suka warna '. $this->warna . '<br>';
    }
    
}
//instansiasi class manusia
$manusia = new manusia();

//memanggil method tampilkan_nama dari class manusia
echo $manusia->tampilkan_nama();