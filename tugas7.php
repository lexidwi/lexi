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
    for($i=0; $i<5; $i++)
    {
        echo "_______________"
        echo "sekolah koding $i";
        echo "_______________ <br>";


    }



    $hewan = ['anjing' , 'babi', 'cicak', 'domba'];

    for($i=0; $i < count($hewan); $i++)
    {
        echo "_______________"
        echo $hewan $i;
        echo "_______________ <br>";


    }


    $hewan = ['anjing' , 'babi', 'cicak', 'domba' 'buaya'];

    for($i=0; $i < count($hewan) - 1; $i++)
    {
        echo "_______________"
        echo $hewan[$i];
        echo "_______________ <br>";


    }
    
        foreach($hewan as $h){
            echo "_______________";
            echo $h;
            echo "_______________ <br>";
        }



    $data =['nama' => 'hitam',
             'umur'=>24,
             'sifat'=> 'malas'];

    foreach($data as $key => $value){
        echo $value ,. "<br";
    }



    $i  = 5;

    do{
        echo'________';
        echo $hewan[$i]. "<br>";
        $i++;
    }while( $i < count($hewan));




?>
</body>
</html>