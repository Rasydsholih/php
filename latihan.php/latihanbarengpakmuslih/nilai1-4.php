<?php

// Fungsi untuk menghitung huruf mutu berdasarkan rata-rata nilai
function hitungHurufMutu ($rataNilai) {
    if ($rataNilai >= 90) {
    return 'A';
    } elseif ($rataNilai >= 85) {
    return 'A-';
    } elseif ($rataNilai >= 80) {
    return 'B+';
    } elseif ($rataNilai >= 75) {
    return 'B';
    } elseif ($rataNilai >= 70) {
    return 'B-';
    } elseif ($rataNilai >= 65) {
    return 'C+';
    } elseif ($rataNilai >= 60) {
    return 'C';
    } elseif ($rataNilai >= 55) {
    return '
    C-';
    } elseif ($rataNilai >= 50) {
    return 'D';
    } else {
    return 'E';
    }
}



// Fungsi untuk menampilkan form input 
function tampilkanFormInput() {
    echo '
        <form method="post">
        <label for="NIS">NIS: </label><br>
        <input type="text" id="NIS" name="NIS"><br>
        <label for="Nama">Nama: </label><br>
        <input type="text" id="Nama" name="Nama"><br>
        <label for="Rombel">Rombel:</label><br>
        <input type="text" id="Rombel" name="Rombel"><br>
        <label for="NilaiMTK">Nilai Matematika: </label><br>
        <input type="number" id="NilaiMTK" name="NilaiMTK"><br> <label for="NilaiBing">Nilai Bahasa Inggris:</label><br>
        <input type="number" id="NilaiBing" name="NilaiBing"><br> <label for="NilaiBind">Nilai Bahasa Indonesia: </label><br>
        <input type="number" id="Nilaißind" name="NilaiBind"><br>
        <label for="NilaiProd">Nilai Produktif:</label><br>
        <input type="number" id="NilaiProd" name="Nilai Prod"><br><br>
        <input type="submit" value="Submit">
    </form>';
    }
// Memeriksa apakah form telah di-submit
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Mengambil data dari form
    $NIS = $_POST['NIS'];
    $Nama = $_POST['Nama'];
    $Rombel = $_POST['Rombel'];
    $NilaiMTK = $_POST['NilaiMTK'];
    $NilaiBing = $_POST['NilaiBing'];
    $NilaiBind = $_POST['NilaiBind'];
    $NilaiProd = $_POST['Nilaiprod'];

    // Menghitung rata-rata nilai
    $rataNilai = ($NilaiMTK + $NilaiBing + $NilaiBind + $NilaiProd) / 4;
    // Menghitung huruf mutu
    $hurufMutu = hitungHurufMutu($rataNilai);
    // Menambahkan data siswa ke dalam array daftarSiswa
    $siswaBaru = array(
    'NIS' => $NIS,
    'Nama' => $Nama,
    'Rombel' => $Rombel,
    'RataNilai' => $rataNilai,
    'HurufMutu' => $hurufMutu
    );
    // Memeriksa apakah array daftarSiswa sudah ada
    if (!isset($daftarSiswa)) {
        $daftarSiswa = array();
    }
    // Menambahkan data siswa baru ke dalam array daftarSiswa 
    array_push($daftarSiswa, $siswaBaru);

    // Menampilkan daftar siswa yang telah diinput
    echo '<h2>Daftar Siswa</h2>';
    echo '<table border="1">
    <tr>
        <th>NIS</th>
        <th>Nama</th>
        <th>Rombel</th>
        <th>Rata-rata Nilai</th>
        <th>Huruf Mutu</th>
    </tr>';

    $nilaiTertinggi = 0;
    
    foreach ($daftarSiswa as $siswa) {
        echo '<tr>
                <td>'.$siswa['NIS'].'</td>
                <td>'.$siswa['Nama'].'</td>
                <td>'.$siswa['Rombel'].'</td>
                <td>'.$siswa['RataNilai'].'</td>
                <td>'.$siswa ['HurufMutu'].'</td> 
            </tr>';
        // Memperbarui nilai tertinggi jika diperlukan
        if ($siswa['RataNilai'] > $nilaiTertinggi) {
            $nilaiTertinggi = $siswa['RataNilai'];
        }
    }

    echo '</table>';
    // Menampilkan nilai rata-rata terbesar 
    echo '<h2>Nilai Rata-rata Terbesar:</h2>'; 
    echo '<p>'.$nilaiTertinggi.'</p>';
    // Menampilkan form input kembali
    tampilkanFormInput();
} else {
    // Menampilkan form input jika belum di-submit 
    tampilkanFormInput();
}
?>