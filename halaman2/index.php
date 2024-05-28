<!DOCTYPE html>
<html>
<head>
    <title>Membuat halaman dinamis menggunakan php</title>
    <link rel="stylesheet" type= "text/css" href="style.css">
    <script type="text/javascript" src="jquery.js"></script>
</head>
<body>
    <div class="content">
            <header>
                <h1 class = "judul">WWW.MALASNGODING.COM</h1>
                <h3 class = "deskripsi"> membuat halaman web dinamis dengan php </h3>
            </header>
    </div>
    <div class="menu">
        <ul>
            <li><a href="index.php?page=home">home</li>
            <li><a href="index.php?page=tentang">tentang</li>
            <li><a href="index.php?page=tutorial">tutorial</li>
        </ul>
    </div>
    <div class="badan">
        <?php
        if(isset($_GET['page'])){
            $page = $_GET['page'];

            switch($page) {
                case 'home':
                    include "home.php";
                    break;
                case 'tentang':
                    include "tentang.php";
                    break;
                case 'tutorial':
                    include "tutorial.php";
                    break;
                    default;
                    echo "<center><h3>maaf. halaman tidak bisa ditemukan !</h3></center>";
            }
        } else {
            include "halaman/home.php";
        }




        ?>
    </div>
</body>
</html>