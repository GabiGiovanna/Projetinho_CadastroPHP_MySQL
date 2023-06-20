
<?php
header('Content-Type: text/html; charset=utf-8');

$resultado = '';
$nota1 = 0;
$nota2 = 0;
$media = 0;

if (isset($_POST['Final'])) {

    $nota1 = (int)$_POST['Nota1'];
    $nota2 = (int)$_POST['Nota2'];

    $media = ($nota1 + $nota2)/2;

    if ($media == 10)
    {
        $resultado = "Aprovado com Distinção";
    }

    else if ($media >= 7 ) 
    {
        $resultado = "Aprovado";
    } 
    else if ($media < 7)
    {
        $resultado = "Reprovado";
    }

     
}


/* 1) Faça um Programa que peça dois números e imprima o maior deles. */

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
Digite a sua primeria nota:<br>
    <form method="post">
        <input type="number" name="Nota1" <?= $nota1 ?> required>
        <br>
        Digite a sua segunda nota:
        <br><input type="number" name="Nota2" <?= $nota2 ?> required><br>
        <br><input type="submit" name="Final" value="Calcular" >

        <p>Resultado: <?= $resultado ?> </p>
    </form>

</body>

</html>