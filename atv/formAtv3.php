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
    
    
    $user = $_POST["user"];
    $password = $_POST["password"];

   
  
   if ($user == "etecia" && $password == "etecia238") {
       echo "Autenticação realizada com sucesso...";
   }else {
       echo "Você não tem permissão para visualizar esta pagina...";
   }







    ?>
    </body>
</html>