<?php 
include_once("ligacao.php");

$id = $_POST['id'];
$nome = $_POST['nome'];
$categoria = $_POST['categoria'];
$preco = $_POST['preco'];
$preco_socio = $_POST['preco_socio'];
$stock = $_POST['stock'];
$referencia = $_POST['referencia'];
$descricao = $_POST['descricao'];
$foto = $_POST['foto'];

if (isset($_POST['submitform'])) {
    $pesquisa = "SELECT * FROM produto WHERE id=$id";
    $resultado = $ligacao->query($pesquisa);
    $row = $resultado->fetch_assoc();
    $pasta = "Imagens/Produtos_Equipamentos/";
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

$atualizar = "UPDATE produto SET nome='$nome', categoria='$categoria', preco='$preco', preco_socio='$preco_socio', stock='$stock', referencia='$referencia', descricao='$descricao', foto='$fpasta' WHERE id=$id";

if ($ligacao->query($atualizar) === TRUE) {
    header("Location: admin.php");
    die();
} else {
    echo "Erro: " . $atualizar . "<br>" . $ligacao->error;
}
?>