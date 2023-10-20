<?php 
include_once("ligacao.php");

$id = $_POST['id'];
$nome = $_POST['nome'];
$posicaoesp = $_POST['posicaoesp'];

if (isset($_POST['submitform'])) {
    $pesquisa = "SELECT * FROM plantel WHERE id=$id";
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

$atualizar = "UPDATE plantel SET nome='$nome', posicao_especifica ='$posicao_especifica', foto='$fpasta' WHERE id=$id";

if ($ligacao->query($atualizar) === TRUE) {
    header("Location: admin_plantel.php");
    die();
} else {
    echo "Erro: " . $atualizar . "<br>" . $ligacao->error;
}
