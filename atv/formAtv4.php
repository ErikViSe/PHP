<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Obrigado por avaliar</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
    </head>
    <body>

    <div class="container">
        
     <?php
    
    
  //  $user = $_POST["user"];
   // $password = $_POST["password"];

   
  
 //  //if ($user == "etecia" && $password == "etecia238") {
   //    echo "Autenticação realizada com sucesso...";
  // }else {
   //    echo "Você não tem permissão para visualizar esta pagina...";
   //}


   $radio = filter_input(INPUT_POST, 'radio'); //mais seguro!
   

    echo "Você selecionou:     ".$radio; 
    echo "   <br>  obrigado pela avaliação.";

    echo "<br><br>";


    $selecao = $_POST["selecao"];
    $outro = $_POST["outro"];  

        echo "Você selecionou: ".$selecao;


        echo "<br><br>";
    
    $comentario = $_POST["comentario"];

        echo "Agradecemos o seu seguinte comentario";
        echo "<br><br>";
        echo $comentario;



        echo "<br><br>";

     $nome = $_POST["nome"];
     $email = $_POST["email"];
     $telefone = $_POST["telefone"];


     echo " O Nome inserido é :  ".$nome;
     echo "<br><br>";
     echo " O Email cadastrado é  :".$email;
     echo "<br><br>";
     echo " O Telefone inserido é  :".$telefone;
     

     echo "<br><br>";





     if (isset($_POST['news']) && $_POST['news'] == 'on')
{
    echo "Voce Selecionou que deseja receber novidades do site";
}

    ?>
    </div>
    </body>
</html>