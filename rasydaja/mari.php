<?php

$a = 5;
$b = 2;

//penjumlahan
$c = $a + $b;
echo "$a + $b = $c";
echo "<hr>";



//pengurangan
$c = $a - $b;
echo "$a - $b = $c";
echo "<hr>";

//perkalian
$c = $a * $b;
echo "$a * $b = $c";
echo "<hr>";

//pembagian
$c = $a / $b;
echo "$a / $b = $c";
echo "<hr>";

//sisa bagi 
$c = $a % $b;
echo "$a % $b = $c";
echo "<hr>";


//pangkat
$c = $a ** $b;
echo "$a ** $b = $c";
echo "<hr>";

//aritmatika
$x = 83;
$x = $x + 10;//maka nilai a akan menjadi 83 + 10 = 93
echo "$x + 10";
echo "<hr>";

//penugasan
$y = 10;
$y += 10;//sekarang nilai b akan menjadi 10 + 10 = 20
echo "$y += 10";
echo "<hr>";

//no 1
$a = 20;
$a = $a + 20;
echo $a;
echo "<hr>";



//no 2
$a = 30;
$a += 30;
echo $a;
echo "<hr>";
//operator increment dan decrement

/*increment*/
// $goal = 4;

// $goal++;
// $goal++;
// $goal++;

// echo $goal;
// echo "<hr>";

/* decrement */
// $value = 20;

// $value--;
// $value--;
// $value--;
// $value--;

// echo $value;


/*incrumentt*/
$goal = 4;

$goal++;
$goal++;
$goal++;

echo $goal;
echo "<hr>";


/*penugasan*/
$goal = 4;
$goal += 3;
echo $goal;
echo "<hr>";



















$a = 6;
$b = 2;

//menggunakan operator relasi lebih besar
$c = $a > $b;
echo "$a > $b: $c";
echo "<hr>";

//menggunakan operator relasi lebih kecil
$c = $a < $b;
echo "$a < $b: $c";
echo "<hr>";


1 > 10 ;


//menggunakan operator relasi lebih sama dengan
$c = $a == $b;
echo "$a == $b: $c";
echo "<hr>";

//menggunakan operator relasi lebih tidak sama dengan
$c = $a != $b;
echo "$a != $b: $c";
echo "<hr>";


//menggunakan operator relasi lebih besar sama dengan
$c = $a >= $b;
echo "$a >= $b: $c";
echo "<hr>";


//menggunakan operaot relasi lebih kecil sama dengan
$c = $a <= $b;
echo "$a <= $b: $c";
echo "<hr>";




//latihan lagi
$nilai1 = 17;
$nilai2 = 20;
$nilai3 = $nilai1 > $nilai2;
echo "$nilai1 > $nilai2 : $nilai3";
echo "<hr>";

$nilai3 = $nilai1 < $nilai2;
echo "$nilai1 < $nilai2 : $nilai3";
echo "<hr>";

$nilai3 = $nilai1 == $nilai2;
echo "$nilai1 == $nilai2 : $nilai3";
echo "<hr>";


$nilai3 = $nilai1 != $nilai2;
echo "$nilai1 != $nilai2 : $nilai3";
echo "<hr>";



$nilai4 = "20";
$nilai5 = 20;

$nilai6 = $nilai4 == $nilai5;
echo "$nilai4 == $nilai5: $nilai6";
echo "<hr>";

$nilai6 = $nilai4 === $nilai5;
echo "$nilai4 === $nilai5: $nilai6";
echo "<hr>";

$nilai6 = $nilai4 != $nilai5;
echo "$nilai4 != $nilai5: $nilai6";
echo "<hr>";

$nilai6 = $nilai4 !== $nilai5;
echo "$nilai4 !== $nilai5: $nilai6";
echo "<hr>";







$frist = true;
$second = false;
$heart = $frist && $second ;
echo $heart;
echo "<br>";



$heart = $frist || $second ;
echo $heart;
echo "<hr>"


// $suka = true;

// menggunakan operator ternaty
// $jawab = $suka ? "iya": "tidak";

// //menampilkan jawaban 
// echo $jawab;
// echo "<br>";


// $ayo = true;



// $result = $ayo ? "semangat": "lemas";

// echo $result;
// echo "<hr>";


// $alas = 10;
// $tinggi = 24;

// $luassegitga = (10 * 24)/2;

// echo "luas segi tiga nya adalah $luassegitiga";

?>