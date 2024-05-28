<?php


//conts

// class Web {
//     const NAMA_WEB = "myweb.com";
//     const NAMA_WEB1 = "panasea.com";

//     public function getWeb(){
//         return self::NAMA_WEB;
//     }


// }


// $b = new Web();//instansiasi
// echo $b->NAMA_WEB = 'wikramaschool.com';
// echo "<br>";
// echo Web::NAMA_WEB;
// echo "<br>";
// echo Web::NAMA_WEB1;
 




















echo "<hr>";
//static

// class Stac {
//     public static $title = "my page";

// }

// echo Stac::$title;






//static method

// class Web {
//     public static $title = "my page";

//     public function changeTitle() {
//         self::$title = 'My page2';
//         return self::$title;
//     }

//     public function changeTitle2() {
//         return self::$title;
//     }
    
    
// }

// class yourWeb extends Web {
//     public function changeTitle() {
//         self::$title = 'Your Page';
//         return self::$title;
//     }
// }


// echo Web::$title . "<br>";
// $myweb = new Web;
// echo $myweb->changeTitle() . "<br>" . $myweb->changeTitle2();
// echo "<br>";
// $yourweb = new YourWeb();
// echo $yourweb->changeTitle() . "<br>" . $myweb->changeTitle2();







//-----------------------------------------------------------------------------------------------------------------------------------------------------


//contoh ke dua





class Web {
    protected static $title = "First Page";

    public static function getTitlePage() {
    echo "Nama Halaman ini adalah" . self::$title . 
    "'";}
}

class OtherWeb extends Web {
    public function __construct() {
    Web::getTitlePage();
    }
    public function getTitle() {
    return Web::$title;
    }
}

    $otherweb = new OtherWeb;
    echo "<br>";
    echo $otherweb->getTitle();
?>