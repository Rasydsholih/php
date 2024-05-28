
<!-- no1 -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php $nilai = 0;?>
    <?= $nilai ?>

    <span style = "color: <?= $nilai >= 75 ? "green" : "red"?>" >
        <?= $nilai >= 75 ? "kompeten" : "belum kompeten" ?> 
    </span>
</body>
</html>






<?php
echo "<hr>";



//no 2
for ($i = 1; $i <= 3; $i++){
    for ($k = 1; $k <= 10; $k++) {
        $hasil = $k * $i;
        echo  $k . " x " . $i . " = " . $hasil;
        echo "<br>";
    } echo "<hr>";
}


//no 3
$data = [
    [
        'nama' => 'Andi',
        'tahun' => 2008,
    ],
    [
        'nama' => 'Beni',
        'tahun' => 2001,
    ],
    [
        'nama' => 'Dani',
        'tahun' => 2004,
    ],
    [
        'nama' => 'Eko',
        'tahun' => 2006,
    ]
];
$a = 0;
foreach($data as $key => $value){
    // if($value['tahun'] % 2 == 0 ){
    //     $kay = "lahir pada tahun kabisat";
    // }else {
    //     $kay = "lahir BUKAN tahun kabisat";
    // }
    // echo $a . " . " . $value['nama'] . " : " . $kay . "(" . $value['tahun'] . ")" . "<br>";


    $nomor = $a + 1;
    $name = $value['nama'];
    $syar = $value['tahun'];
    $keterangan = $syar % 4 == 0 ? "lahir pada tahun kabisat" : "lahir BUKAN tahun kabisat" ;
    echo "$nomor . $name : lahir $keterangan ($syar) <br>";
    
    $a++;
} echo"<hr>";



//no4
$barang = [
    [
        'nama_barang' => 'Pasta Gigi',
        'harga_barang' => 18000,
        'jumlah_beli' => 1,
    ],
    [
        'nama_barang' => 'Sabun Mandi',
        'harga_barang' => 5000,
        'jumlah_beli' => 3,
    ],
    [
        'nama_barang' => 'Aloe Vera Sheet Mask',
        'harga_barang' => 15000,
        'jumlah_beli' => 4
    ],
];

$sum = 0;
foreach($barang as $harga) {
  $hitung = ($harga['harga_barang'] * $harga['jumlah_beli']);
  $sum+= $hitung;
}
echo "Total yang harus di bayar adalah Rp." . $sum;

?>













