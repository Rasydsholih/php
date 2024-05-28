<!DOCTYPE html>
<html>
<head lang="en">
    <title>Kalkulator-rasyd</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/x-icon" href="asset/img/favivi.png" />
    <link rel="stylesheet" href="css.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    
    <main>
        <!-- untuk memudahkan elemen otomatis berada di tengah -->
        <div class="container">
            <h1>Kalkulator</h1>
            <form action="" method="post">
                <div class="form-input">
                    <!-- membagi beberapa div dengan class row -->
                    <div class="row-1">
                        <label for="angka1" >Angka Pertama:</label>
                        <input type="number" class="form-control" id="" name="angka1" placeholder="hanya angka" required>
                    </div>
                    <!-- membagi beberapa div dengan class row -->
                    <div class="row-2">
                        <label for="angka2">Angka Kedua:</label>
                        <input type="number" class="form-control" id="" name="angka2"  placeholder="hanya angka" required>
                    </div>
                </div>
                <!-- membagi beberapa div dengan class row -->
                <div class="row-3">
                    <label for="operator">Pilih Operator:</label>
                    <select id="" name="operator" placeholder="pilih operator aritmatika">
                        <option value="+">+</option>
                        <option value="-">-</option>
                        <option value="*">x</option>
                        <option value="/">/</option>
                    </select><br><br>
                </div>
                
                <input type="submit" class="btn btn-outline-success" value="CEK HASIL">
                <?php
                // Periksa apakah form telah disubmit
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    // Periksa apakah nilai form telah diset
                    if (isset($_POST['angka1']) && isset($_POST['angka2']) && isset($_POST['operator'])) {
                        // Ambil nilai dari form
                        $angka1 = $_POST['angka1'];
                        $angka2 = $_POST['angka2'];
                        $operator = $_POST['operator'];
                        
                        // Hitung hasil berdasarkan operator
                        switch ($operator) {
                            case '+':
                                $hasil = $angka1 + $angka2;
                                break;
                            case '-':
                                $hasil = $angka1 - $angka2;
                                break;
                            case '*':
                                $hasil = $angka1 * $angka2;
                                break;
                            case '/':
                                if ($angka2 != 0) {
                                    $hasil = $angka1 / $angka2;
                                } else {
                                    echo "Error: pembagian dengan nol tidak diperbolehkan";
                                    exit();
                                }
                                break;
                            default:
                                echo "Error: Operator yang dimasukkan tidak valid.";
                                exit();
                        }
                        
                        // Tampilkan hasil
                        echo "<p style='color: green;'>$angka1 $operator $angka2 = $hasil</p>";

                    } else {
                        echo "Error: Nilai form tidak lengkap.";
                    }
                }
                ?>
                

                
            </form>
        </div>
    </main>




    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;

        }

        main {
            width: 100%;
            height: 775px;
            background-image: url(https://i.pinimg.com/originals/bf/cf/48/bfcf48d206e2d19c27705b476a8bfa04.gif);
            background-size: cover;
            background-repeat: no-repeat;
            


        }

        .container{
            position: absolute;
            left: 50%;
            top: 50%;
            transform: translate(-50%, -50%);
        }

        h1 {
            text-align: center;
            color: black;

        }

        form {
            width: 500px;
            height: 350px;
            margin: 20px auto;
            padding: 20px;
            background-color: rgb(199, 204, 207);
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .form-input {
            display: flex;
        }

        .row-2 {
            margin-left: 30px;
        }

        .row-3 {
            margin-top: 20px;
        }



        label {
            display: block;
            margin-bottom: 5px;
            color: black;
        }

        input[type="number"],
        select {
            width: 100%;
            padding: 8px;
            color: blue ;
            margin-bottom: 10px;
            border: 1px solid blue;
            border-radius: 3px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            width: 100%;
            padding: 10px;
        }

        p {
            margin-top: 20px;
            font-weight: bold;
            text-align: center;
        }

        .error {
            color: red;
            font-weight: bold;
            margin-bottom: 20px;
        }

        @media only screen and (max-width:553px) {
            form {
            width: 400px;
            }
        }

        @media only screen and (max-width:445px) {
            form {
            width: 350px;
            }
        }

        @media only screen and (max-width:380px) {
            form {
            width: 300px;
            }
        }

        @media only screen and (max-width:360px) {
            form {
            width: 300px;
            }
        }
    </style>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>