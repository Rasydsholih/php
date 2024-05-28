<?php

class Laptop {
    public static $merk;

    public static function hidupkan_laptop() {
        //static method => membuat method bisa di panggil oleh method yang berada di class yang sama tanpa perlu instansiasi
        echo "Hidupkan laptop";
    }

    public function matikan_laptop() {
        self::hidupkan_laptop();  //  self:: => kata kunci untuk memanggil property atau method static
    }
}

$laptop_anto = new Laptop();
Laptop::$merk = "Asus";
echo "dengan merek <b>" . Laptop::$merk . "</b> <br>";
echo $laptop_anto->matikan_laptop() . "<br>";
echo Laptop::hidupkan_laptop();//memanggil method static yang mana mmanggil method tanpa perluinstansiasi class menjadi object













?>