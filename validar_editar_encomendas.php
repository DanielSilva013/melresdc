<?php 
include_once("ligacao.php");

$id = $_POST['id'];
$encomenda = $_POST['encomenda'];
$estado = $_POST['estado'];
$utilizador = $_POST['utilizador'];
$id_utilizador = $_POST['id_utilizador'];
$data = $_POST['data'];
$preco = $_POST['preco'];
$foto = $_POST['foto'];

if (isset($_POST['submitform'])) {
    $pesquisa = "SELECT * FROM encomendas WHERE id=$id";
    $resultado = $ligacao->query($pesquisa);
    $row = $resultado->fetch_assoc();
    $pasta = "Imagens/Encomendas/";
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

$atualizar = "UPDATE encomendas SET encomenda='$encomenda', estado='$estado', utilizador='$utilizador', id_utilizador='$id_utilizador', data='$data', preco='$preco', foto='$fpasta' WHERE id=$id";

if ($ligacao->query($atualizar) === TRUE) {
    header("Location: admin_encomendas.php");
    die();
} else {
    echo "Erro: " . $atualizar . "<br>" . $ligacao->error;
}
?>