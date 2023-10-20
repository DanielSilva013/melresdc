<?php
include_once("ligacao.php");

$id = $_GET['id'];

$apagar = "DELETE FROM noticias WHERE id=$id";

if ($ligacao->query($apagar)=== TRUE){
    header("Location: admin_noticias.php");
    die();
}else{
    echo "Erro: " . $apagar . "<br>" . $ligacao->error;
}
?>