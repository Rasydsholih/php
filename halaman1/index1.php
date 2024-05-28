<?php

//header
echo '<h1>my  navbar  </h1>';
//navbar
echo '<a href="?hah=home">home</a>';
echo '<a href="?haha=tentang">tentang</a>';
echo '<a href=?haha=tutorial">tutorial</a>';


//main
$haha = $_GET['haha'];
switch($haha){
    case 'home' :
        $tampil = 'HOME';
        break;
    case 'tentang':
        $tampil = 'Tentang';
        break;
    case 'tutorial' :
        $tampil = 'tutorial';
        break;
        default :
        $tampil = "maap";
        break;
}

echo $tampil;

echo "<h1>footer</h1>";








?>


