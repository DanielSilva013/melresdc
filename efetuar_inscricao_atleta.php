<?php
include_once("ligacao.php");

$nome = $_POST['nome'];
$email = $_POST['email'];
$data_nascimento = $_POST['data_nascimento'];

$inserir = "INSERT INTO inscricao_atleta (nome, email, data_nascimento)
VALUES ('$nome', '$email', '$data_nascimento')";

if ($ligacao->query($inserir) == TRUE){
    header("Location: confirmacao_atleta.php");
}else{
    echo "Erro: " . $inserir. "<br>" . $ligacao->error;
}

?>


