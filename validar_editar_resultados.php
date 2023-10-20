<?php 
include_once("ligacao.php");

$id = $_POST['id'];
$resultado_final = $_POST['resultado_final'];
$local = $_POST['local'];
$data = $_POST['data'];
$hora = $_POST['hora'];
$competicao = $_POST['competicao'];
$escalao = $_POST['escalao'];


if (isset($_POST['submitform'])) {
    $pesquisa = "SELECT * FROM resultados WHERE id=$id";
    $resultado = $ligacao->query($pesquisa);
    $row = $resultado->fetch_assoc();
    $pasta = "Imagens/Resultados/";
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

$atualizar = "UPDATE resultados SET equipa_casa='$fpasta', resultado_final='$resultado_final', local='$local', data='$data', hora='$hora', competicao='$competicao', escalao='$escalao' WHERE id=$id";

if ($ligacao->query($atualizar) === TRUE) {
    header("Location: admin_resultados.php");
    die();
} else {
    echo "Erro: " . $atualizar . "<br>" . $ligacao->error;
}
?>