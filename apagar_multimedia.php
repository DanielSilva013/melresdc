<?php
include_once("ligacao.php");

$id = $_GET['id'];

$apagar = "DELETE FROM multimedia WHERE id=$id";

if ($ligacao->query($apagar)=== TRUE){
    header("Location: admin_multimedia.php");
    die();
}else{
    echo "Erro: " . $apagar . "<br>" . $ligacao->error;
}
?>