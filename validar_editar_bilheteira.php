<?php 
include_once("ligacao.php");

$id = $_POST['id'];
$local = $_POST['local'];
$data = $_POST['data'];
$hora = $_POST['hora'];
$competicao = $_POST['competicao'];
$escalao = $_POST['escalao'];
$preco = $_POST['preco'];

if (isset($_POST['submitform'])) {
    $pesquisa = "SELECT * FROM bilheteira WHERE id=$id";
    $resultado = $ligacao->query($pesquisa);
    $row = $resultado->fetch_assoc();
    $pasta = "Imagens/Bilheteira/";
    $imagem = $_FILES['uploadfile']['name'];
    $temp_name = $_FILES['uploadfile']['tmp_name'];
    if ($imagem != "") {
        if (file_exists($pasta . $imagem)) {
            $imagem = time() . '_' . $imagem;
        }
        $fpasta = $pasta . $imagem;
        move_uploaded_file($temp_name, $fpasta);
    }else {
        $fpasta = $row['foto'];

    }
}

$atualizar = "UPDATE bilheteira SET equipa_casa='$fpasta', local='$local', data='$data', hora='$hora', competicao='$competicao', escalao='$escalao', preco='$preco' WHERE id=$id";

if ($ligacao->query($atualizar) === TRUE) {
    header("Location: admin_bilheteira.php");
    die();
} else {
    echo "Erro: " . $atualizar . "<br>" . $ligacao->error;
}
?>