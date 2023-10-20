<?php 
include_once("ligacao.php");

$id = $_POST['id'];
$mensalidade = $_POST['mensalidade'];
$estado = $_POST['estado'];
$quota = $_POST['quota'];
$email = $_POST['email'];
$user_id = $_POST['user_id'];

$atualizar = "UPDATE quotas SET mensalidade='$mensalidade', estado='$estado', quota='$quota', email='$email', user_id='$user_id' WHERE id=$id";

if ($ligacao->query($atualizar) === TRUE) {
    header("Location: admin_quotas.php");
    die();
} else {
    echo "Erro: " . $atualizar . "<br>" . $ligacao->error;
}
?>