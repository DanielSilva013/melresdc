<?php 
include_once("ligacao.php");

$id = $_POST['id'];
$nome = $_POST['nome'];
$jogos = $_POST['jogos'];
$pontos = $_POST['pontos'];
$vitorias = $_POST['vitorias'];
$empates = $_POST['empates'];
$derrotas = $_POST['derrotas'];
$golos_marcados = $_POST['golos_marcados'];
$golos_sofridos = $_POST['golos_sofridos'];
$saldo_golos = $_POST['saldo_golos'];

if (isset($_POST['submitform'])) {
    $pesquisa = "SELECT * FROM classificacao WHERE id=$id";
    $resultado = $ligacao->query($pesquisa);
    $row = $resultado->fetch_assoc();
    $pasta = "Imagens/Classificação/";
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

$atualizar = "UPDATE classificacao SET logotipo='$fpasta', nome='$nome', jogos='$jogos', pontos='$pontos', vitorias='$vitorias', empates='$empates', derrotas='$derrotas', golos_marcados='$golos_marcados', golos_sofridos='$golos_sofridos', saldo_golos='$saldo_golos' WHERE id=$id";

if ($ligacao->query($atualizar) === TRUE) {
    header("Location: admin_classificacao.php");
    die();
} else {
    echo "Erro: " . $atualizar . "<br>" . $ligacao->error;
}
?>