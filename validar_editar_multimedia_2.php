<?php 
include_once("ligacao.php");

$id = $_POST['id'];
$foto = $_POST['foto2'];

if (isset($_POST['submitform'])) {
    $pesquisa = "SELECT * FROM multimedia WHERE id=$id";
    $resultado = $ligacao->query($pesquisa);
    $row = $resultado->fetch_assoc();
    $pasta = "Imagens/Multimédia/";
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

$atualizar = "UPDATE multimedia SET foto2='$fpasta' WHERE id=$id";

if ($ligacao->query($atualizar) === TRUE) {
    header("Location: admin_multimedia.php");
    die();
} else {
    echo "Erro: " . $atualizar . "<br>" . $ligacao->error;
}
?>