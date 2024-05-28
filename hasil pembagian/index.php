<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  
<center>
  <form action="" method="POST">
    <table border="1">
      <tr>
        <td><label for="angka_pertama"> Angka pertama : </label></td>
        <td><input type="number" name ="angka_pertama" id="angka_pertama"> </input></td>
      </tr>
      <tr>
        <td><label for="angka_pangkat"> angka pembagi : </label></td>
        <td><input type = "number" name ="angka_pangkat" id="angka_pangkat"></td>
      </tr>
      <tr>
        <td colspan="2"><button type="submit">hitung</button></td>
      </tr>
    </table>
  </form>
  <div class="hasiljawaban">
  <?php

if(@$_POST['angka_pertama'] == "" || @$_POST['angka_pangkat'] == "") {
  echo '<p style = "text-align : center; color : red; margin : 10px 0 "> silakan isi seluruh data</p>';
}else{
  $hasilsisabagi = $_POST['angka_pertama'] % $_POST['angka_pangkat'];

  echo '<p style =" text-align : center; color : green; margin : 10px 0"> siap di proses' ."<br>".
 $_POST['angka_pertama'] ." % " .$_POST['angka_pangkat']. " = " . $hasilsisabagi. "<br>" . "</p>"; 
}

if (@$_POST['angka_pertama'] == "" || @$_POST['angka_pangkat'] == "") {
  echo "<p style='text-align: center; color: red; margin: 10px 0'>Silahkan lengkapi seluruh data!!</p>";
} else {
  // Hitung sisa bagi
  $hasilSisabagi = $_POST['angka_pertama'] % $_POST['angka_pangkat'];


  // Jika hasil sisa bagi adalah diatas 1
  if ($hasilSisabagi >= 2) {
      $bilangan_terdekat = ($_POST['angka_pertama'] - 2);
      echo "<p style='text-align: center; margin: 10px 0;'>Bilangan terdekat adalah " . $bilangan_terdekat . 
      " yang merupakan perkalian " . ($bilangan_terdekat / $_POST['angka_pangkat']) . "x" . $_POST['angka_pangkat'] . "</p>";
  // jika hasil sisa bagi adalah 1
    } else if($hasilsisabagi == 1){
    $bilangan_terdekat = ($_POST['angka_pertama'] - 1);
    echo "<p style='text-align: center; margin: 10px 0;'>Bilangan terdekat adalah " . $bilangan_terdekat . 
    " yang merupakan perkalian " . ($bilangan_terdekat / $_POST['angka_pangkat']) . "x" . $_POST['angka_pangkat'] . "</p>";
  }
  
  else {
      echo "<p style='text-align: center; margin: 10px 0;'>Hasil Sisa Bagi Dari " . "<b>" . 
      $_POST['angka_pertama'] . " % " . $_POST['angka_pangkat'] . " = " . $hasilSisabagi . 
      "</b>" . "</p>";
  }
}



?>
  </div>
</center>

</body>
</html>