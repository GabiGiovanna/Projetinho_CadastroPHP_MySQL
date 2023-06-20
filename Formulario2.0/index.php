<?php
session_start();
header('Content-Type: text/html; charset=utf-8');
 $erro = $_SESSION['erro']; 
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Login</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
</head>

<body class="p-3 mb-2 bg-primary text-white">

  <div class="card pt-8 border border-1  position-absolute top-50 start-50 translate-middle shadow-lg p-3 mb-5 bg-body-tertiary rounded" style="width: 20rem;">


    <form action="login.php" method="post">

      <div class="mb-3 was-validated">
        <label for="uname" class="form-label">Login</label>
        <input type="text" class="form-control" id='uname' placeholder="Digite seu login" name="uname" required>
        <div class="valid-feedback">Válido</div>
        <div class="invalid-feedback">Por Favor digite um login.</div>
      </div>

      <div class="mb-3 was-validated">
        <label for="uname" class="form-label">Senha</label>
        <input type="password" class="form-control" id="upass" placeholder="Digite sua senha" name="upass" required>
        <div class="valid-feedback">Válido</div>
        <div class="invalid-feedback">Por Favor digite um valor.</div>
        <div class="invalid-feedback"> <?php echo $erro; ?></div> 
      </div>

      <div class="col-12">
        <input type="submit" class="btn text-white btn-primary" value="Entrar" name="submit">
      </div>

    
      <br> 

  <a href="cadastro.php">Cadastrar</a>
    </form>

    

  </div>

  </div>






  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>

</body>

</html>