<?php
// no 1

// class Laptop {
//     private $pemilik = "Andi";
//     private $merk = "Lenovo";

//     public function __construct(){
//         echo "Ini berasal dari Construct Laptop";
//     }

//     public  function hidupkan_laptop(){
//         return "Hidupkan Laptop $this->merk punya $this->pemilik";
//     }

//     public function __destruct(){
//         echo "Ini berasal dari Destruct Laptop";
//     }
// }


// $laptop_andi = new Laptop();

// echo "<br />";
// echo $laptop_andi->hidupkan_laptop();
// echo "<br />";


// echo "<hr />";



//no 2

//buat class komputer

class komputer {

    private $jenis_processor  = "intel core 7i-504";

    public function tampilkanprocessor() {
        echo $this->jenis_processor;
    }

    public function gettampilkankedua(){
        echo $this->jenis_processor;
    }


}

$komputer_baru =  new komputer();

echo $komputer_baru->tampilkanprocessor();
echo "<br>";
echo $komputer_baru->gettampilkankedua();

echo "<hr/>";

//no3


class Laptop {
    protected $pemilik="anto";
    public function akses_pemilik() {
        return $this->pemilik;
    }

    protected function hidupkan_laptop() {
        return "Hidupkan Laptop";
    }

    protected function paksa_hidup() {
        return $this->hidupkan_laptop();
    }
}

$laptop_anto = new Laptop();

echo $laptop_anto->akses_pemilik();
echo "<br>";
echo $laptop_anto->pemilik;
echo $laptop_anto->paksa_hidup();
echo "<br>";
echo $laptop_anto->hidupkan_laptop();


?>