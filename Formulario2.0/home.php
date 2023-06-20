<?php
session_start();
header('Content-Type: text/html; charset=utf-8');
require_once('conexao.php');


$nome = $_SESSION['name'];
$data = $_SESSION['date'];

$date = new DateTime($data);


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    <link rel="stylesheet" href="style.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">

</head>

<body>

<h1 class="teste">Seja bem-vindo(a) <?php echo $nome; ?> </h1>
        <h1 class="teste">Nascido(a) em <?php echo $date->format('d/m/Y'); ?> </h1>
    <nav>
        <div class="container-fluid  text-aling-center  fs-6 ">
       
        
            <nav class="navbar  navbar-expand-lg  bg-primary row " style="height: 5em;">
            
                <div class="container-fluid ">
                    <a class="navbar-brand text-white text-white link-hover " href="#"><span>Gabi Gio</span></a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false"
                        aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNavDropdown">
                        <ul class="navbar-nav  position-absolute top-50 start-50 translate-middle ">
                            <li class="nav-item p-2 text-white">
                                <a class="nav-link active text-white " aria-current="page" href="home.php">Home</a>
                            </li>
                            <li class="nav-item p-2 ">
                                <a class="nav-link text-white" href="index.php">LogOut</a>
                            </li>
                            <li class="nav-item p-2 ">
                                <a class="nav-link text-white" href="#">Pricing</a>
                            </li>
                           
                            </li>
                        </ul>
                    </div>
                    
                </div>
            </nav>

        </div>


    </nav>

    <nav class=" mt-5 container-fluid flex-wrap justify-content-around d-flex " style="width: 85%;">


        <div class="card hh mt-5 m-4  col-md" style = "width: 15rem;">
            <img src="Calculadora.png" style="width: 63%;" class="card-img-top img-fluid mx-auto d- pt-3" alt="...">

            <div class="card-body">
                <h5 class="card-title">Funções</h5>
                <a href="visualizacao.php?dir=Calculadora&file=index" class="card-link mt-5">Calculadora</a><br>
               
               

            </div>
        </div>


        <div class="card hh col-md mt-5 m-3 " style="width: 15rem; ">
            <img src="if.png" style="width: 63%;" class="card-img-top img-fluid mx-auto d-block pt-3" alt="...">

            <div class="card-body">
                <h5 class="card-title">Estrutura Condicional</h5>
                <a href="visualizacao.php?dir=ListaF&file=MaiorEntre2" class="card-link m-2"> Maior Entre 2</a><br>
                <a href="visualizacao.php?dir=ListaF&file=MaiorEntre3" class="card-link m-2"> Maior Entre 3</a><br>
                <a href="visualizacao.php?dir=ListaF&file=Aprovacao" class="card-link m-2"> Aprovação</a><br>
                <a href="visualizacao.php?dir=ListaF&file=Negativo_Positivo" class="card-link m-2"> Negativo_Positivo</a><br>
                <a href="visualizacao.php?dir=ListaF&file=Produtos" class="card-link m-2"> Produtos</a><br>
                <a href="visualizacao.php?dir=ListaF&file=Sexo_Validacao" class="card-link m-2"> Sexo Validação</a><br>
               
            </div>
        </div>

        <div class=" card hh mt-5 m-4  col-md" style="width: 15rem;">
            <img src="projeto.png" style="width: 64%;" class="card-img-top img-fluid mx-auto d-block pt-3" alt="...">

            <div class="card-body">
                <h5 class="card-title">Tipos Literais</h5>
                <a href="visualizacao.php?dir=Primeiro_Projeto&file=inteiros" class="card-link m-2">Inteiros</a><br>
               
               

            </div>
        </div>


    </nav>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous">
    </script>
</body>

<style>


.hh:hover{
    border: solid #62b5e5 2px;
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);


}
    </style>

</html>


