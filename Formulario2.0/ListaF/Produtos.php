<?php
header('Content-Type: text/html; charset=utf-8');

$resultado = 0;
$bala = 0;
$chocolate = 0;
$chiclete = 0;

if (isset($_POST["Barato"])) {
    $bala = (int) $_POST["bala"];
    $chiclete = (int) $_POST["chiclete"];
    $chocolate = (int) $_POST["chocolate"];


    $resultado = max($bala, $chiclete, $chocolate);
    if($resultado == $bala){
        $resultado= $resultado." Bala";
    }
    else if($resultado == $chiclete){
        $resultado= $resultado." chiclete";
            }

            else{
                $resultado= $resultado. " chocolate";
            }
}


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Atividade 6</title>
</head>

<body>
    Digite o preço da bala<br>
    <form method="post">
        <input type="text" name="bala" required>
        <br>
        Digite o preço do chocolate:
        <input type="text" name="chocolate" required>
        <br>
        Digite o preço do chicletes:
        <input type="text" name="chiclete" required>
        <br>
        <br><input type="submit" name="Barato" value="Barato">

        <p>Resultado : <?= $resultado ?></p>
    </form>
</body>

</html>