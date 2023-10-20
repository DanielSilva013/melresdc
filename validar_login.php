<?php
include_once("ligacao.php");
session_start();

if ((isset($_POST['email'])) && (isset($_POST['passwd']))){

$utilizador = mysqli_real_escape_string($ligacao, $_POST['email']);
$passwd = mysqli_real_escape_string($ligacao, $_POST['passwd']);

$resultado_utilizador = "SELECT * FROM utilizador WHERE email = '$utilizador' and passwd = '$passwd' LIMIT 1";

$resultado_utilizador = mysqli_query($ligacao, $resultado_utilizador);
$resultado = mysqli_fetch_assoc($resultado_utilizador);
if (isset($resultado)){
$_SESSION['userId'] = $resultado['id'];
$_SESSION['userNome'] = $resultado['nome'];
$_SESSION['userEmail'] = $resultado['email'];
$_SESSION['userPasswd'] = $resultado['passwd'];
header("Location: conta.php");
}else{
    $_SESSION['Erro'] = "<center><p></p><hr><p></p><p5>Utilizador ou password Inválida</p5><hr></center>";
    header("Location: login.php");
    }
}
