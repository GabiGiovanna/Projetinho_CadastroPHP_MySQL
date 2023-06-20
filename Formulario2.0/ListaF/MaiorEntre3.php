<?php
header('Content-Type: text/html; charset=utf-8');

$resultado = 0;
$num1 = 0;
$num2 = 0;
$num3 = 0;

if (isset($_POST['Maior'])) {

    $num1 = (int)$_POST['Num1'];
    $num2 = (int)$_POST['Num2'];
    $num3 = (int)$_POST['Num3'];
    if ($num1 > $num2 && $num1 > $num3 ) 
    {
        $resultado = $num1;
    } 
    else if($num2 > $num3 && $num2 > $num1 ) 
    {
        $resultado = $num2;
    }

    else{
        $resultado = $num3;
    }
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>    
</head>

<body>
Digite o primerio número<br>
    <form method="post">
        <input type="number" name="Num1" <?= $num1 ?> required>
        <br>
        Digite o segundo número
        <br><input type="number" name="Num2" <?= $num2 ?> required><br>
        Digite o terceiro número
        <br><input type="number" name="Num3" <?= $num3 ?> required><br>
        <br><input type="submit" name="Maior" value="Calcular" >

        <p>O Maior número é: <?= $resultado ?> </p>
    </form>

</body>

</html>