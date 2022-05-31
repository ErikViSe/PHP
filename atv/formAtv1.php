<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Calcular a area do Retangulo</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body>
     <?php
    
    
    $largu = $_POST["largu"];
    $comp = $_POST["comp"];

   

    $result = $largu * $comp;

echo  "A area do Retangulo é :  "  .$result;




    ?>
    </body>
</html>