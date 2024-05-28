<?php

//enkapsulasi


//privat

// class Komputer {
//     private $merk = 'HP : SAMSUNG';

//     public function get_merk(){
//         return $this->merk;
//     }
// }


// $komputer = new Komputer;
// echo $komputer->get_merk();
//tidak akak error walaupun isi dari method tersebut memanggil property private, karena di tampilkan melalui public method
// echo $komputer->merk;
//bakal error karena memanggil property merk yang bersifat private








echo "<hr>";


//protected

// class Komputer {
//     protected $merk = 'HP : SAMSUNG';

//     public function get_merk(){
//         return $this->merk;
//     }
// }

// class Laptop extends Komputer {
//     public function nama_merk(){
//         return $this->merk;
//     }

//     protected function merk_lagi(){
//         return $this->get_merk();
//     }
// }



// $komputer =  new Komputer;
// $laptop = new Laptop;
// echo $laptop->nama_merk();
//echo $laptop->merk_lagi();
// echo '<br>';
// echo $laptop->get_merk();





echo "<hr>";




//public

// class Komputer {
//     public $merk;
//     public function processor(){
//         echo 'i7';
//     }
//     public function get_merk(){
//         return $this->merk;
//     }
// }

// class Laptop extends Komputer {
//     public function get_processor(){
//         return $this->processor();
//     }
// }


// $komputer = new Komputer;
// $laptop = new Laptop; 
// $komputer->merk = 'MOBIL';
// $laptop->merk = 'ADVAN';
// echo $komputer->merk;
// echo "<br>";
// echo $komputer->processor();
// echo "<br>";
// echo $laptop->get_merk();
// echo "<br>";
// echo $laptop->get_processor();



echo "<br>";






//private and public



// class Barang {

//     public $harga;
//     public $namaBarang;

//     public function set_harga($namaBarang, $harga = 1500000) {
//         $this->namaBarang = $namaBarang;
//         $this->harga = $harga;
//     }

//     public function get_harga(){
//         return "Harga dari " . $this->namaBarang . " tersebut adalah Rp"  . $this->harga;
//     }
// }

// $barang = new barang;
// $barang->set_harga("MOBIL");
// echo $barang->get_harga();






echo "<hr>";

//abstract


//class yang tidak bisa di instansiasi (tidak bisa dibuat menjadi objek) dan berperan sebagai 'kerangka dasar' turunannya

abstract class Komputer{
    abstract public function lihat_spec();
    public static function hidupkan_komputer(){
        echo "hidupkan komputer";
    }
}


class Laptop extends Komputer {
    //harus ada method = abstrak method
    public function lihat_spec(){
        return "Lihat Spec Laptop....";
    }

    public function beli_laptop(){
        return "Beli Laptop....";
    }
}

$laptop_baru = new Laptop();
echo $laptop_baru->lihat_spec();
echo "<br>";
echo $laptop_baru->beli_laptop();
echo "<br>";
echo Komputer::hidupkan_komputer();









?>