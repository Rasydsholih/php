<?php
include "proses.php";


if(isset($_POST['kirim'])) {
    $proses = new beli();
    $proses -> setHarga(15420, 16130, 18310, 16510 );
    $proses->jenis = $_POST['jenis'];
    $proses->jumlah = $_POST['jumlah'];

    $proses->hargaBeli();
    $proses->cetakPembeli();

}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bahan duruk</title>
</head>
<body>
    <center>
        <form action="" method="post">
            <table>
               <tr>
                    <td>
                        <label for="jumlah">Jumlah</label>
                        <input type="number" placeholder="hanya angka" name="jumlah" id="jumlah" required>
                    </td>
               </tr>
               <tr>
                    <td>
                        <label for="jenis">masukan</label>
                        <select name="jenis" id="jenis">
                            <option value="SSuper">SSuper</option>
                            <option value="SVPower">SVPower</option>
                            <option value="SVPowerDiesel">SVPowerDiesel</option>
                            <option value="SVPowerNitro">SVPowerNitro</option>
                        </select>
                    </td>
               </tr>
               
            </table>
            <button type="submit" name="kirim">beli</button>
        </form>
    </center>
</body>
</html>

