<?php


// interface Hewan {
//     public function suara();
//     public function makanan();
// }

// class Harimau implements Hewan {
//     public function suara(){
//         return "Roar";
//     }

//     public function makanan(){
//         return "Daging";
//     }
// }

// $harimau =new Harimau;
// echo $harimau->suara();
// echo "<br>";
// echo $harimau->makanan();  




echo "<hr>";

interface Hewan {
    public function suara();
    public function makanan();
}


class MakhlukHidup {
    public function intro() {
        return "Termasuk Makhluk Hidup";
    }
}


class Harimau extends MakhlukHidup implements Hewan {
    public function suara() {
        return "Roar";
    }

    public function makanan() {
        return "Daging";
    }
}


$harimau = new Harimau;
echo $harimau->suara();
echo "<br>";
echo $harimau->makanan();
echo "<br>";
echo $harimau->intro();


?>