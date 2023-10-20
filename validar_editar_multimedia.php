<?php 
include_once("ligacao.php");

$id = $_POST['id'];
$titulo = $_POST['titulo'];
$data = $_POST['data'];
$tipologia = $_POST['tipologia'];
$equipa_casa = $_POST['equipa_casa'];
$equipa_fora = $_POST['equipa_fora'];
$resultado_casa = $_POST['resultado_casa'];
$resultado_fora = $_POST['resultado_fora'];
$foto = $_POST['foto'];

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

$atualizar = "UPDATE multimedia SET titulo='$titulo', data='$data', tipologia='$tipologia', equipa_casa='$equipa_casa', equipa_fora='$equipa_fora', resultado_casa='$resultado_casa', resultado_fora='$resultado_fora', foto='$fpasta' WHERE id=$id";

if ($ligacao->query($atualizar) === TRUE) {
    header("Location: admin_multimedia.php");
    die();
} else {
    echo "Erro: " . $atualizar . "<br>" . $ligacao->error;
}
?>