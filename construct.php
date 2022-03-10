<?php

//class manusia
class manusia{
    //property
    public $nama = "John";
    public $warna = "Merah";
    
    function __construct(){
        echo "ini adalah isi method construct <br/>";
    }
    
    //method manusia
    public function tampilkan_nama(){
        return $this->warna;
    }
    
}
//instansiasi class manusia
$manusia = new manusia();

//memanggil method tampilkan_nama dari class manusia
echo $manusia->tampilkan_nama();