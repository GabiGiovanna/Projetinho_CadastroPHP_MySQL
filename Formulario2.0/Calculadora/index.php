<!-- [TPA-3D2/2023]-TÉCNICAS DE PROGRAMAÇÃO AVANÇADA
Exercício 01 - Calculadora PHPExercício 01 - Calculadora PHP -->
<?php
header('Content-Type: text/html; charset=utf-8');
$n1 = 0;
$n2 = 0;
$result = 0;
$calc = 'calcular';

/* if(isset($_POST['calcular'])){
    $n1 = (int) $_POST['n1'];
    $n2 = (int) $_POST['n2'];
   
    $result = $n1 + $n2;

    if($calc == 'Subtracao')
    {
        $result = $n1 - $n2;
    }

    else if($calc == 'Divisao')
    {
        $result = $n1 / $n2;
    }

    else if ($calc == 'Multiplicacao')
    {
        $result = $n1 * $n2;
    }

} */

if (isset($_POST['soma'])) {
    $n1 = (int) $_POST['n1'];
    $n2 = (int) $_POST['n2'];


    $result = $n1 + $n2;
} else if (isset($_POST['subtracao'])) {
    $n1 = (int) $_POST['n1'];
    $n2 = (int) $_POST['n2'];


    $result = $n1 - $n2;
} else if (isset($_POST['divisao'])) {
    $n1 = (int) $_POST['n1'];
    $n2 = (int) $_POST['n2'];


    $result = $n1 / $n2;
} else if (isset($_POST['multiplicacao'])) {
    $n1 = (int) $_POST['n1'];
    $n2 = (int) $_POST['n2'];


    $result = $n1 * $n2;
}
?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>

    <div class="card position-absolute top-50 start-50 translate-middle">
        <form method="post">
            Primeiro número <br>
            <input type="number" name="n1" value=<?= $n1 ?> required> <br>
            Segundo número <br>
            <input type="number" name="n2" value=<?= $n2 ?> required> <br>
            <div class="">
                <input type="submit" name="soma" value="+">
                <input type="submit" name="subtracao" value="-">
                <br><input type="submit" name="divisao" value="/">
                <input type="submit" name="multiplicacao" value="*">
            </div>


            <p>Resultado da soma: <?= $result ?> </p>
        </form>
    </div>





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>