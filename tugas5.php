<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $kotak  = array ('anjing', 'kurakura', 'koala');
    $nama   = ['hilman' 'Endi', 'Tiap'];

    print_r($kotak);
    echo $nama[0];

    sort($angka);
    print_r ( $angka );


    $data =array(
        "nama"    => "Hilman" ,
        "umur"  => 21 ,
        "kerja" => "pengacara"
    );

    $data['nama']   = "Hilman Ramadhan";

    echo "Nama adalah " . $data['nama'];

    $data   = array( 
        "nama"   => "hilman" ,
        "umnur"  => 21 ,
        "kerja"  => "pengacara"
        
    );

    $data   = array( 
        "istri"    => " belum ada " ,
        "laptop"   => "chromeBook"

    );

    print_r( array_metrge($data, $data2) );



    



    ?>
</body>
</html>