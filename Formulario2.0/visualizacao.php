<?php
header('Content-Type: text/html; charset=utf-8');



?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VISUALIZAÇÃO DOS EXERCÍCIOS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

</head>

<body>
    <nav>
        <div class="container-fluid  text-aling-center  fs-6 ">
        
           
            <nav class="navbar  navbar-expand-lg  bg-primary row " style="height: 5em;">
                <div class="container-fluid ">
               
                    <a class="navbar-brand text-white text-white link-hover " href="#"><span>Gabi Gio</span></a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
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
                           

                            </li>
                        </ul>
                    </div>
                   
                    
                </div>
            </nav>

        </div>


    </nav>

   <main class="">
        <div class="container mt-5 align-center text-center">
            <?php
             include(__DIR__ . "/{$_GET['dir']}/{$_GET['file']}.php"); 

            ?>
        </div>
    </main> 
  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

</body>

</html>