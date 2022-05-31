<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
    </head>
    <body>
     <?php
    
    
    $peso = $_POST["peso"];
    $alt = $_POST["alt"];

   
    $IMC = $peso / ($alt * $alt);
    
    if ($IMC >= 25) {
        echo "Você esta acima do peso" ; 
    }    else {
        echo "Voce está saudavél";
    }
    


echo  "</br> O seu IMC é :  "  .$IMC;




    ?>
    </body>
</html>