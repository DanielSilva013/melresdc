<?php
include_once("ligacao.php");
session_start();

if ((isset($_POST['email'])) && (isset($_POST['passwd']))){

$utilizador = mysqli_real_escape_string($ligacao, $_POST['email']);
$passwd = mysqli_real_escape_string($ligacao, $_POST['passwd']);

$resultado_utilizador = "SELECT * FROM utilizador WHERE nivel='1' and email = '$utilizador' and passwd = '$passwd' LIMIT 1";

$resultado_utilizador = mysqli_query($ligacao, $resultado_utilizador);
$resultado = mysqli_fetch_assoc($resultado_utilizador);
if (isset($resultado)){
$_SESSION['userAdminId'] = $resultado['id'];
$_SESSION['userAdminNome'] = $resultado['nome'];
$_SESSION['userAdminEmail'] = $resultado['email'];
$_SESSION['userAdminPasswd'] = $resultado['passwd'];
header("Location: admin.php");
}else{
    $_SESSION['Erro'] = "<p></p><hr><center><p5>Ups, não tens acesso à secção de administrador.</p5></center><hr>";
    header("Location: login_admin.php");
    }
}
?>