<?php 

require_once('conexao.php');

$login = $_POST['uname'];
$senha= $_POST['upass'];

$erro = "teste";

$stmt= $conn -> prepare("select * from cadastro2 where usuario like ? and senha like ?");

$stmt ->bindParam(1,$login);

$stmt ->bindParam(2,$senha);

$stmt ->execute();

$resultado=$stmt->fetchAll();

$logado = false;

foreach($resultado as $item){
    $logado=true;
    $nome = $item['nome'];
    $data = $item['dt_nasc'];
};

if($logado)
{
    session_start();
 
    $_SESSION['name'] = $nome;
    $_SESSION['date'] = $data;

 header("Location: home.php");  

 
}
else{
    
    $erro = "Usuário ou senha incorretos!!";
    $_SESSION['erro'] = $err                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                o;
    header("Location: index.php");
   
};
?>