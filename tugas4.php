<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $nama   = "sekolah koding";
    $nama   = 'Bermain Koding';

    echo "selamat datang di $nama <br>";

    $angka  = 1000;
    $angka2 = 3;
    $angka3 = 2;

    $angka  *= $angka;

    echo $angka;

    $angka  = 1000;
    $angka2 = 3;
    $angka3 = 2.64;



    echo "angka hari ini adalah ". min($angka3, $angka, $angka2);

    $angka3 = 2.64;



    $text    "Hai semuanya di sini";
    echo str_replace( str_replace( "Hai".\, "Hallo" ,$text), 10 );
    ?>
</body>
</html>