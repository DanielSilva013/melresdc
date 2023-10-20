<?php
include_once("ligacao.php");

$id = $_GET['id'];

$apagar = "DELETE FROM plantel WHERE id=$id";

if ($ligacao->query($apagar)=== TRUE){
    header("Location: admin_plantel.php");
    die();
}else{
    echo "Erro: " . $apagar . "<br>" . $ligacao->error;
}
?>