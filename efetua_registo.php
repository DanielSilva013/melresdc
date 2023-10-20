<?php
include_once("ligacao.php");

$nome = $_POST['nome'];
$apelido = $_POST['apelido'];
$email = $_POST['email'];
$passwd = $_POST['passwd'];

$inserir = "INSERT INTO utilizador (nome, apelido, email, passwd)
VALUES ('$nome', '$apelido', '$email', '$passwd')";

if ($ligacao->query($inserir) == TRUE){
    header("Location: login.php");
}else{
    echo "Erro: " . $inserir. "<br>" . $ligacao->error;
}

?>