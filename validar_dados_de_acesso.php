<?php 
include_once("ligacao.php");

$id = $_POST['id'];
$email = $_POST['email'];
$password = $_POST['password'];
$nonovapassword = $_POST['passwd'];

$atualizar = "UPDATE utilizador SET passwd='$password' WHERE id=$id";

if ($ligacao->query($atualizar) === TRUE) {
    header("Location: conta.php");
    die();
} else {
    echo "Erro: " . $atualizar . "<br>" . $ligacao->error;
}
?>