




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center>
        <!--YANG PERLU DI PERHATIKAN KETIKA MEMBUAT INPUT FORM :
            1. di tag form harus ada attribut action dan method
            2. input ada name, id, for label (optional)
            3. pastikan ada button submit sebelum penutup form
        -->
        <form action="" method="POST">
            <table border="1">
                <tr>
                    <td><label for="angka_pertama">angka pertama :</label></td>
                    <td><input type="number" name="angka_pertama" id="angka_pertama" ></td>
                </tr>
                <tr>
                    <td><label for="angka_pangkat">angka pangkat :</label></td>
                    <td><input type="number" name="angka_pangkat" id="angka_pangkat" ></td>
                </tr>
                <tr>
                    <td colspan="2"><button type="submit">hitung</button></td>
                </tr>
            </table>
        </form>
    </center>
</body>
</html>

<?php
if (@$_POST['angka_pertama'] == "" || @$_POST['angka_pangkat'] == "") {
    echo "<p style='text-align: center ; color: red; margin: 10px 0 '>silahkan lengkapi seluruh data! </p> ";
}else {
    //echo "<p style='text-align: center ; color: green; margin: 10px 0'> siap di proses </P>";
    $hasilpangkat = $_POST['angka_pertama'] ** $_POST['angka_pangkat'];
    // echo "<p style='text-align: center ; color: green; margin: 10px 0'> hasil pangkat dari " . "<b>" .
    // $_POST['angka_pertama] . " pangkat " . $_POST['angka_pangkat'] . " = " . $hasilpangkat . "</b>" . "</p>";
    echo "<p style='text-align: center ; color: green; margin: 10px 0'> Hasil pangkat Dari " . "<b>" . 
    $_POST['angka_pertama'] . " pangkat " . $_POST['angka_pangkat'] . " = " . $hasilpangkat . "</b>" . "</p>";
}



?>