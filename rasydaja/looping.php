<?php
//kode




//for
echo "looping 1-50 <br>";
for($i = 1; $i <= 50; $i++){
    echo $i;
    echo "<br>";
}
echo "<hr>";



echo "looping 50-1 <br>";
for($i = 50; $i >= 1; $i--){
    echo $i;
    echo "<br>";
}
echo "<hr>";




echo "looping 1-50 <br>";
for($i = 1; $i <= 50; $i++){
    if ($i %2==0){
        echo "$i adalah bilangan genap";
        echo "<br>";
    } else {
        echo "$i adalah bilangan ganjil";
        echo "<br>";
    }
}
echo "<hr>";




echo "looping 1-50 <br>";
for($i = 1; $i <= 50; $i++){
    if ($i %2==0){
        echo "$i adalah bilangan genap";
        echo "<br>";
    }
}
echo "<hr>";




echo "looping 50-1 <br>";
for($i = 50; $i >= 1; $i--){
    if ($i %2 == 0 ){
        echo "$i adalah bilangan genap";
        echo "<br>";
    } else {
        echo "$i adalah bilangan ganjil";
        echo "<br>";
    }
}
echo "<hr>";




echo "looping 50-1 <br>";
for($i = 50; $i >= 1; $i--){
    if ($i %2 == 0 ){
    } else {
        echo "$i adalah bilangan ganjil";
        echo "<br>";
    }
}
echo "<hr>";




//kelipatan 5
for($i = 0; $i <= 100; $i++){
    if($i %5 == 0 ){
        echo $i."<br>";
    }
}

echo "<hr>";

for($i = 0; $i <= 100; $i += 5){
    echo $i;
    echo "<br>";
}
echo "<hr>";
echo "<br>";
echo "<br>";
echo "<br>";














//LOOPING WHILE

$b = 1;
while($b  <= 10 ){
    echo $b . "<br>";
    $b++;
}
echo "<hr>";




$c = 10;
while($c >= 1 ){
    echo $c . "<br>";
    $c--;
}

echo "<hr>";



$saya = 1;
while($saya <=  10){
    if($saya %2 == 1){
        echo $saya . "<br>";
    }
    $saya++;
}


?>