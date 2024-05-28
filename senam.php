<?php

$suka = true;

//menggunakan operator ternary
$jawab = $suka ? "iya": "tidak";

//menampilkan jawaban 
echo $jawab;
echo "<br>";


$ayo = true;

$result = $ayo ? "semangat": "lemas";

echo $result;
echo "<hr>";



//segitiga di papantulis
$a = 10;
$t = 24;

$luas = (10 * 24)/2;
echo "maka luas nya adalah $luas cm";
echo " alas nya adalah $a cm";
echo "<br>";
echo "tinggi nya adalah $t ";
echo "<hr>";







//no 1
$a = 4;
$e = $a * $a;
echo "luas persegi nya adalah $e cm";
echo "<br>";

//no2
$jari = 8 ;
$luas = $jari * $jari;
echo "jari jari nya adalah $jari";
echo "<br>";
echo "maka luas nya adalah $luas";
echo "<br>";



$angka = 19;
$angka2 = 20;

$angka3 = $angka == $angka2;
echo "$angka == $angka2 : $angka3";
echo "<hr>";



$age = 23 ;
$jawab = $age >= 17 ? "boleh buat ktp" : "tidak boleh buat ktp";
echo $jawab;
echo "<br>";

//no 3
$umur = 45;
$dewasa = 25;
$remaja = 12;
$anak = 5;



if($umur >= $dewasa){
    $maka = "dewasa";
} else if ($umur >= $remaja ){
    $maka = "remaja";
} else if ($umur >= $anak ){
    $maka = "anak-anak";
} else {
    $maka = "balita";
}

echo $maka;
echo "<br>";



// $maka = ($umur >= $dewasa) ? "dewasa" : ($umur >= $remaja ? "remaja" : ($umur >= $anak ? "anak-anak" : "balita"));
$maka = $umur >= $dewasa ? "dewasa" : (($umur >= $remaja) ? "remaja" : (($maka >= $anak) ? "anak-anak":"balita"));
echo $maka;
echo "<br>";


//no 4
$nilai = 85;
$jadi = $nilai > 90 ? "grade A" : ($nilai > 80 ? "grade B" : ($nilai > 70 ? "grade c" : ($nilai <= 70 ? "grade D" : "perlu di isolasi")));
echo $jadi;
echo"<br>";

$dpk = 70;
$mtk = 87;
$agama = 80;
$hsl = "$dpk + $mtk + $agama/3";
$rata = $hsl >= 90 ? "sangat bagus" :($hsl >= 85 ? "bagus": ($hsl >= 80 ? "sangat baik" : ($hsl >= 70 ? "baik" : ($hsl < 70 ? "kurang" : "makanya belajar"))));
echo $rata;
echo "<br>";

//no5
$x = 30;
$y = 20;

$jadi = ($x == $y) ? "sama" : (($x > $y) ? "lebih besar X" : "lebih besar y");
echo $jadi;

?>
