<?php 
include_once("ligacao.php");

$id = $_POST['id'];
$nome = $_POST['nome'];
$apelido = $_POST['apelido'];
$email = $_POST['email'];
$passwd = $_POST['passwd'];
$data_nascimento = $_POST['data_nascimento'];
$telemovel = $_POST['telemovel'];
$morada = $_POST['morada'];
$codigo_postal = $_POST['codigo_postal'];
$cidade = $_POST['cidade'];
$nif = $_POST['nif'];
$iban = $_POST['iban'];
$nivel = $_POST['nivel'];
$socio = $_POST['socio'];
$categoria_socio = $_POST['categoria_socio'];

$atualizar = "UPDATE utilizador SET nome='$nome', apelido='$apelido', email='$email', passwd='$passwd', data_nascimento='$data_nascimento', telemovel='$telemovel', morada='$morada', 
codigo_postal='$codigo_postal', cidade='$cidade', nif='$nif', iban='$iban', nivel='$nivel', socio='$socio', categoria_socio='$categoria_socio' WHERE id=$id";

if ($ligacao->query($atualizar) === TRUE) {
    header("Location: admin_utilizadores.php");
    die();
} else {
    echo "Erro: " . $atualizar . "<br>" . $ligacao->error;
}
?>