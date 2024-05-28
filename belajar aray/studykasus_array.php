<?php
$nilai = [80, 78, 72, 84, 92, 88];
echo "Nilai saya : ";
echo implode(' , ', $nilai);
echo "<br>";

//nilai terkecil
echo "nilai terkecil : " . min($nilai);
echo "<br>";

//nilai terbesar
echo "nilai terbesar : " . max($nilai);
echo "<br>";

//urut terkecil
sort($nilai);
echo "Diurutkan terkecil : " . implode(' , ' , $nilai);
echo "<br>";

//urut terbesar
rsort($nilai);
echo "Diurutkan terbesar : " . implode(' , ', $nilai);
echo"<br>";

//rata rata
$sum = 0;
echo "nilai rata-rata : ";
foreach($nilai as $rata2){
    $sum += $rata2 / 6;
} echo $sum;
echo "<BR>";


//nilai sekarang
array_splice($nilai, 5, 1, 75);
echo "nilai sekarang : " . implode(' , ', $nilai);
echo "<br>";

//urutan terbesar sekarang
rsort($nilai);
echo " sekarang urutan nilai terbesar : ";
echo implode(' , ', $nilai);














?>