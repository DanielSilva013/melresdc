<?php 
include_once("ligacao.php");

$id = $_POST['id'];
$nome = $_POST['nome'];
$apelido = $_POST['apelido'];
$data_nascimento = $_POST['data_nascimento'];
$morada = $_POST['morada'];
$codigo_postal = $_POST['codigo_postal'];
$cidade = $_POST['cidade'];
$email = $_POST['email'];
$telemovel = $_POST['telemovel'];
$nif = $_POST['nif'];
$iban = $_POST['iban'];

$atualizar = "UPDATE utilizador SET nome='$nome', apelido='$apelido', data_nascimento='$data_nascimento', morada='$morada', codigo_postal='$codigo_postal', cidade='$cidade', email='$email', telemovel='$telemovel', nif='$nif', iban='$iban' WHERE id=$id";

if ($ligacao->query($atualizar) === TRUE) {
    header("Location: conta.php");
    die();
} else {
    echo "Erro: " . $atualizar . "<br>" . $ligacao->error;
}
?>