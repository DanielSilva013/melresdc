<?php 
include_once("ligacao.php");

$id = $_POST['id'];
$camisola = $_POST['camisola'];
$nome = $_POST['nome'];
$posicao = $_POST['posicao'];

if (isset($_POST['submitform'])) {
    $pesquisa = "SELECT * FROM guarda_redes WHERE id=$id";
    $resultado = $ligacao->query($pesquisa);
    $row = $resultado->fetch_assoc();
    $pasta = "Imagens/Plantel/";
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

$atualizar = "UPDATE guarda_redes SET foto_banner='$fpasta' WHERE id=$id";

if ($ligacao->query($atualizar) === TRUE) {
    header("Location: admin_plantel.php");
    die();
} else {
    echo "Erro: " . $atualizar . "<br>" . $ligacao->error;
}
?>