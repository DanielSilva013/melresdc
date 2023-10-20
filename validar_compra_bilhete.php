<?php
include_once("ligacao.php");

$nome = $_POST['nome'];
$email = $_POST['email'];
$jogo = $_POST['jogo'];

$inserir = "INSERT INTO compra_bilhetes (nome, email, jogo)
VALUES ('$nome', '$email', '$jogo')";

if ($ligacao->query($inserir) == TRUE){
    header("Location: confirmacao_bilheteira.php");
}else{
    echo "Erro: " . $inserir. "<br>" . $ligacao->error;
}

?>