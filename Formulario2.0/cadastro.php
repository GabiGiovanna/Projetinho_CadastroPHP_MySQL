

<?php
require_once('conexao.php');



if(isset($_POST['submit'])){

  $login = $_POST['uname'];
  $senha= $_POST['upass'];
  $data = $_POST['date'];
  $nome = $_POST['name'];

  

  $stmt= $conn -> prepare("select * from cadastro2 where usuario like ? and senha like ?");

  $stmt ->bindParam(1,$login);
  
  $stmt ->bindParam(2,$senha);
  
  $stmt ->execute();
  
  $resultado=$stmt->fetchAll();
  
  $logado = false;
  
  foreach($resultado as $item){
      $logado=true;
  };
  
  if($logado)
  {
  
    echo "<script>alert('Usuário já cadastrado no banco!!');</script>";
  }
  else{
   
    $sql = "INSERT INTO cadastro2 (usuario,senha,nome,dt_nasc)
VALUES ('$login','$senha','$nome','$data')";
// use exec() because no results are returned
$conn->exec($sql);
echo "New record created successfully";

session_start();
  header("Location: login.php");
 
    $_SESSION['uname'] = $login;
    $_SESSION['upass'] = $senha;
    $_SESSION['name'] = $nome;
    $_SESSION['date'] = $data;
    header("Location: login.php");

      
  };



  $conn = null;

  
}


header('Content-Type: text/html; charset=utf-8');



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


    <form method="post">
      <div class="mb-3 was-validated">
        <label for="uname" class="form-label">Crie seu login</label>
        <input type="text"  class="form-control" id='uname' placeholder="Digite seu login" name="uname" required>
        <div class="valid-feedback">Válido</div>
      <div class="invalid-feedback">Por Favor digite um valor.</div>
      </div>

      <div class="mb-3 was-validated">
        <label for="upass" class="form-label">Crie sua senha</label>
        <input type="password" class="form-control" id="upass" placeholder="Digite sua senha" name="upass" required >
        <div class="valid-feedback">Válido</div>
        <div class="invalid-feedback">Por Favor digite um valor.</div>
      </div>

      <div class="mb-3 was-validated">
        <label for="upass" class="form-label">Digite o seu username</label>
        <input type="text" class="form-control" id="name" placeholder="Digite seu nome" name="name" required >
        <div class="valid-feedback">Válido</div>
        <div class="invalid-feedback">Por Favor digite um valor.</div>
      </div>


      <div class="mb-3 was-validated">
        <label for="upass" class="form-label">Data de Nascimento</label>
        <input type="date" class="form-control" id="date" name="date" required >
        <div class="valid-feedback">Válido</div>
        <div class="invalid-feedback">Por Favor digite um valor.</div>
      </div>
  
      <div class="col-12">
        <input type="submit" class="btn text-white btn-primary" value="Cadastrar" name="submit">
    </form>
      
    </div>
   
  </div>






  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>

</body>

</html>