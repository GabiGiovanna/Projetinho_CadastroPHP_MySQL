<?php
header('Content-Type: text/html; charset=utf-8');

$resultado = "";
$sexo = [""];

if (isset($_POST["Sexo"])) {
    $sexo = $_POST["Sexo1"];

   
    if ($sexo == "F" || $sexo == "f") 
    {
        
        $resultado = "Feminino";
        
    } 
    else if($sexo == "M" || $sexo == "m")
    {
   
        $resultado = "Masculino";
      
    }
    
    else {
        
        $resultado = "Sexo invalido";
    }
}



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Atividade 3</title>
</head>
<body>
Digite o seu sexo<br>
    <form method="post">
        <input type="text" name="Sexo1"  required>
        <br>
       
        <br><input type="submit" name="Sexo" value="Sexo" >

       <p>Resultado : <?=$resultado?></p>
    </form>
</body>
</html>


