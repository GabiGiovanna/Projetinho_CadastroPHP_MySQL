<?php
header('Content-Type: text/html; charset=utf-8');

$num = 0;
$resultado = 0;

if(isset($_POST["Calcule"]))
{
    $num = (int)$_POST['Num'];

    if($num < 0){
        $resultado = "negativo";
    }

    else {
        $resultado = "positivo";  
    }
}


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Atividade 2 </title>
</head>
<body>

Digite um número
<form method="post">
        <input type="number" name="Num" value= <?= $num ?> required>
        <br>
       
        <br><input type="submit" name="Calcule" value="Calcular" >

        <p>Esse número é: <?= $resultado ?> </p>
    </form>



</body>
</html>