<?php
include_once("ligacao.php");

$id = $_GET['id'];

$apagar = "DELETE FROM inscricao_socio WHERE id=$id";

if ($ligacao->query($apagar)=== TRUE){
    header("Location: admin_socios.php");
    die();
}else{
    echo "Erro: " . $apagar . "<br>" . $ligacao->error;
}
?>