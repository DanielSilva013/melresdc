<?php 
include_once("ligacao.php");

$id = $_POST['id'];
$hora = $_POST['hora'];
$dia = $_POST['dia'];
$local = $_POST['local'];
$evento = $_POST['evento'];
$categoria = $_POST['categoria'];

$atualizar = "UPDATE agenda SET hora='$hora', dia='$dia', local='$local', evento='$evento', categoria='$categoria' WHERE id=$id";

if ($ligacao->query($atualizar) === TRUE) {
    header("Location: admin_agenda.php");
    die();
} else {
    echo "Erro: " . $atualizar . "<br>" . $ligacao->error;
}
?>