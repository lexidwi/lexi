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
    $data= array(
        array("programmer", "21" , "males"),
        array("designer", "24", "rajin"),
        array("meneger", "34", " males banget")
    );

    $data[2][0] = "proyek manager";
    echo $data [2][0];



    


?>
</body>
</html>