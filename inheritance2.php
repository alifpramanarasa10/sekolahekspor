<?php

class Car
{
    public $brand = "Honda";
    public $model = "Brio";

    protected $productionDate = '10 - February - 2022';
	public $type = 'Type V';

    public $source = 'Indonesia';

    public function showBrand(){
        echo "Hello, my car brand is $this->brand <br/>";
    }

    public function showSource($source){
        echo "Hello, my car brand is $source <br/>";   
    }

    public function showProduction($prod){
        echo "Hello, my car brand is $prod <br/>";
    }
}


class Detail extends car
{
    protected $productionDate = '05 - February - 2022';
    public $model = "Brio";

    public function showCar(){
        echo "Model : $this->model <br/>";
        echo "Production Date : $this->productionDate <br/>";
        echo "Type : $this->type <br/>";
    }

    public function showSource($source){
        echo "Source : $source";
    }
}

class Design extends Detail
{
    public $color = "Black";
}

class Tire extends Design
{
    public $tire = "Dunlop";
}

// membuat object myCar
$myCar = new Tire();

echo "Mobil saya merk $myCar->brand ". $myCar->model ." Warnanya $myCar->color Dengan Ban $myCar->tire<br>";
echo $myCar->showSource("Indonesia");
// memberikan nilai kepada property
// $myCar->brand = 'Toyota';

// tidak bisa memberikan nilai:
// Cannot access protected property
// karena property type adalah protected
// hanya boleh diakses dari dalam class itu sendiri
// dan dari dalam extended class
// $myCar->type = 'Type G';

// memanggil property
// kode ini tidak error
// echo $myCar->model . '<br/>';

// Undefined property.
// karena property type adalah protected
// echo $myCar->type;

// dalam class User property productionDate adalah protected
// tapi setelah di extends di class Bio
// diubah public dan di ganti nilainya
// jadi 05 - February - 2022
// echo $myCar->productionDate . '<br/>';

// memanggil method
// kode ini tidak error
// $myCar->showBrand();
// $myCar->showCar();

// PHP Notice:  Undefined property.
// Karena source adalah private
// $myCar->showSource();