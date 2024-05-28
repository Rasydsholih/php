<?php
class Contoh {
    // Constructor
    public function __construct() {
        echo "Constructor dipanggil\n";
    }

    // Destructor
    public function __destruct() {
        echo " . Destructor dihentikan\n";
    }
}

$obj = new Contoh();
// Destructor akan dipanggil ketika $obj dihapus dari memori






?>