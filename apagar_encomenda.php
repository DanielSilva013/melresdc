<?php
include_once("ligacao.php");

$id = $_GET['id'];

$apagar = "DELETE FROM encomendas WHERE id=$id";

if ($ligacao->query($apagar)=== TRUE){
    header("Location: admin_encomendas.php");
    die();
}else{
    echo "Erro: " . $apagar . "<br>" . $ligacao->error;
}
?>