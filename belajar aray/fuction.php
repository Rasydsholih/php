<?php
//membuat fuction
function tambahAngka($angka1, $angka2){
    //block code
    $hasil = $angka1 + $angka2;
    echo $hasil . "<br>";
}

tambahAngka(17, 21);
tambahAngka(21, 11);
tambahAngka(78, 17);
echo "<hr>";




function kurangAngka($kurang1, $kurang2){
    $jumlah = $kurang1 - $kurang2;
    echo $jumlah . "<br>";
}


kurangAngka(56, 67);
kurangAngka(119, 70);
kurangAngka(78, 17);
echo "<hr>";




function pangkat($pengkat3, $pengkat4){
    $jadi = $pengkat3 ** $pengkat4;
    echo $jadi . "<br>";
}

pangkat(2, 5);
pangkat(6, 4);
pangkat(12, 6);
echo "<hr>";


function pembagian($bagi1, $bagi2, $bagi3){
    $hasilnya = max($bagi1, $bagi2, $bagi3);
    echo $hasilnya . "<br>";
}


pembagian(2,4,5);
pembagian(9,7,3);
pembagian(8,12,6);










?>