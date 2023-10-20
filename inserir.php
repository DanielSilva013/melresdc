<?php include_once("ligacao.php");
session_start();

if (!isset($_SESSION['userAdminEmail']) or !isset($_SESSION['userAdminPasswd'])) {
    header("Location: loginadmin.php");
}
if (isset($_POST['submitform'])) {
    $pasta = "Imagens/Produtos/";
    $imagem = $_FILES['uploadfile']['name'];
    $temp_name = $_FILES['uploadfile']['tmp_name'];

    if ($imagem != "") {
        if (file_exists($pasta . $imagem)) {
            $imagem = time() . '_' . $imagem;
        }
        $fpasta = $pasta . $imagem;
        move_uploaded_file($temp_name, $fpasta);
    } else {
        $fpasta = $row['foto'];
    }
    $nome = $_POST['nome'];
    $categoria = $_POST['categoria'];
    $preco = $_POST['preco'];
    $preco_socio = $_POST['preco_socio'];
    $stock = $_POST['stock'];
    $referencia = $_POST['referencia'];
    $descricao = $_POST['descricao'];
    $foto = $_POST['foto'];

    $inserir = "INSERT INTO produto (nome, categoria, preco, preco_socio, stock, referencia, descricao,foto)
VALUES ('$nome', '$categoria', '$preco', '$preco_socio', '$stock', '$referencia', '$descricao', '$fpasta')";

    if ($ligacao->query($inserir) === TRUE) {
        header("Location: admin.php");
        die();
    } else {
        echo "Erro: " . $inserir . "<br>" . $ligacao->error;
    }
}
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="Imagens/Logotipo.png">
    <title>Melres DC</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</head>

<body>

    <?php include 'header_admin.php'; ?>
    <style>
        h6 {
            font-family: avalors;
            color: #212529;

        }

        p1 {
            font-family: arial;
            text-align: center;
            font-size: medium;
        }

        p2 {
            font-family: avalors;
            text-align: justify;
            font-size: small;
            color: white;
        }

        p5 {

            font-family: avalors;
            text-align: justify;
            font-size: small;
            color: #FFD968;

        }

        p6 {
            font-family: avalors;
            text-align: RIGHT;
            font-size: small;
            color: white;
        }

        P7 {
            font-family: avalors;
            font-size: medium;
            color: #FED969;
        }

        hr {
            width: 100%;
            background: #FED969;
            height: 5px;
        }

        .card {
            background-color: #212529;
            border-color: #FFD968;
            border-radius: 0px;
            border-width: 2px;

        }

        .card:hover .imgcard img {
            -webkit-transform: scale(1.2);
            transform: scale(1.2);
        }

        .card:hover p2 {
            color: #FED969;
        }

        p4 {
            font-family: avalors;
            color: #212529;
            font-size: medium;
        }

        scroll-container {
            display: block;
            margin: 0 auto;
        }


        scroll-container {
            display: block;
            width: 645;
            height: 420px;
            overflow-y: scroll;
            scroll-behavior: smooth;
        }

        scroll-page {


            justify-content: center;
            height: 100%;

        }

        p3 {
            font-family: avalors;
            font-weight: regular;
            color: #BABBBC;
            text-align: justify;
            font-size: small;
        }

        body {
            background-color: #212529;
        }

        img {
            max-width: 100%;
        }

        .imgcard {
            width: 100%;
            height: 100%;
            margin: 0px;
            overflow: hidden;
        }

        .imgcard img {
            -webkit-transition: all 0.7s ease;
            transition: all 0.7s ease;
        }


        .imgdestaque {
            width: 100%;
            height: 100%;
            margin: 0px;
            overflow: hidden;
        }

        .imgdestaque img {
            -webkit-transition: all 0.7s ease;
            transition: all 0.7s ease;
        }

        .imgdestaque img:hover {
            -webkit-transform: scale(1.2);
            transform: scale(1.2);
        }

        a:hover {
            color: #FFD968;
            background: none;
        }

        a:link {
            color: #FFD968;

        }

        a {
            text-decoration: none;
            text-decoration: #FED969;
        }

        /*--------------------------------------------BOTAO 1--------------------------------------------*/
        .button1 {
            display: inline-block;
            vertical-align: middle;
            -webkit-transform: translateZ(0);
            transform: translateZ(0);
            box-shadow: 0 0 1px rgba(0, 0, 0, 0);
            -webkit-backface-visibility: hidden;
            backface-visibility: hidden;
            -moz-osx-font-smoothing: grayscale;
            position: relative;
            -webkit-transition-property: color;
            transition-property: color;
            -webkit-transition-duration: 0.3s;
            transition-duration: 0.3s;
            background: #212529;
            padding: 8px 15px;
            color: fff;
            border-width: 0px;
        }

        .button1:before {
            content: "";
            position: absolute;
            z-index: -1;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: #FED969;
            -webkit-transform: scalex(0);
            transform: scalex(0);
            -webkit-transform-origin: 50% 100%;
            transform-origin: 0% 100%;
            -webkit-transition-property: transform;
            transition-property: transform;
            -webkit-transition-duration: 0.3s;
            transition-duration: 0.3s;
            -webkit-transition-timing-function: ease-out;
            transition-timing-function: ease-out;
        }

        .button1:hover,
        .button1:focus,
        .button1:active {
            color: #212529;
        }

        .button1:hover:before,
        .button1:focus:before,
        .button1:active:before {
            -webkit-transform: scaleY(1);
            transform: scaleY(1);
        }

        .button1 h8 {
            color: #FED969;
            font-family: avalors;
        }

        button:hover h8 {
            color: #212529;
            font-family: avalors;
        }

        /*--------------------------------------------BOTAO 2--------------------------------------------*/

        .button2 {
            display: inline-block;
            vertical-align: middle;
            -webkit-transform: translateZ(0);
            transform: translateZ(0);
            box-shadow: 0 0 1px rgba(0, 0, 0, 0);
            -webkit-backface-visibility: hidden;
            backface-visibility: hidden;
            -moz-osx-font-smoothing: grayscale;
            position: relative;
            -webkit-transition-property: color;
            transition-property: color;
            -webkit-transition-duration: 0.3s;
            transition-duration: 0.3s;
            background: #212529;
            padding: 8px 15px;
            color: fff;
            border-width: 0px;
        }

        .button2:before {
            content: "";
            position: absolute;
            z-index: -1;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: #FED969;
            -webkit-transform: scalex(0);
            transform: scalex(0);
            -webkit-transform-origin: 50% 100%;
            transform-origin: 0% 100%;
            -webkit-transition-property: transform;
            transition-property: transform;
            -webkit-transition-duration: 0.3s;
            transition-duration: 0.3s;
            -webkit-transition-timing-function: ease-out;
            transition-timing-function: ease-out;
        }

        .button2:hover,
        .button2:focus,
        .button2:active {
            color: #212529;
        }

        .button2:hover:before,
        .button2:focus:before,
        .button2:active:before {
            -webkit-transform: scaleY(1);
            transform: scaleY(1);
        }

        .button2 h8 {
            color: #FED969;
            font-family: avalors;
        }

        input[type=text] {
            background-color: #212529;
            background-position: 10px 10px;
            background-repeat: no-repeat;
            padding-left: 10px;
            border-style: #212529;
            border-color: #BABBBC;
            background: #212529;
            border-radius: 10px;
            border-width: 2px;
            width: 100%;
        }

        input[type=text]:focus {
            background: #212529;
            border-color: #FFD968;

        }

        ::placeholder {
            font-family: avalors;
            color: #212529;
            opacity: 50%;

        }

        input[type=file] {
            background-color: #212529;
            background-position: 10px 10px;
            background-repeat: no-repeat;
            padding-left: 10px;
            border-style: #212529;
            border-color: #BABBBC;
            background: #212529;
            border-radius: 10px;
            border-width: 2px;
            width: 100%;
        }

        input[type=file]:focus {
            background: #212529;
            border-color: #FFD968;

        }

        ::placeholder {
            font-family: avalors;
            color: #212529;
            opacity: 50%;

        }

        textarea[class=form-control] {
            background: #212529;
            border-color: #BABBBC;
            border-width: 2px;
            margin-bottom: 30px;
        }

        textarea[class=form-control]:focus {
            background: #212529;
            border-color: #FED969;
            border-width: 2px;
        }

        select[class=form-select] {
            background-color: #212529;
            background-position: 10px 10px;
            background-repeat: no-repeat;
            padding-left: 10px;
            border-style: #212529;
            border-color: #BABBBC;
            background: #212529;
            border-radius: 10px;
            border-width: 2px;
            width: 100%;
        }

        select[class=form-select]:focus {
            background: #212529;
            border-color: #FFD968;

        }
    </style>
    <div style="background: url(Imagens/Plantel/Banner_Jogador.jpg) ; padding:50px;">
        <center>
            <p4 class="display-4">Adicionar Produto</p4>
        </center>
    </div>

    <div class="container mb-5 mt-5">
        <div class="row">
            <div class="col-12 mb-5">
                <form action="#" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        <!---------------NOME----------------------------->
                        <label>
                            <p7>Nome</p7>
                        </label>
                        <input type="text" class="form-control mb-4" name="nome" style="color:#BABBBC; font-family: avalors;" required>
                        <!---------------PREÇO----------------------------->
                        <label>
                            <p7>Categoria</p7>
                        </label>
                        <select class="form-select" aria-label="Default select example" name="categoria" style="color: #BABBBC; font-family: avalors;">
                            <option value="Têxtil">Têxtil</option>
                            <option value="Equipamentos">Equipamentos</option>
                            <option value="Acessórios">Acessórios</option>
                            <option value="Adeptos">Adeptos</option>
                        </select>

                        <label class="mt-4">
                            <p7>Preço</p7>
                        </label>
                        <input type="text" class="form-control mb-4" name="preco" style="color:#BABBBC; font-family: avalors;" required>
                        <!---------------PREÇO DE SÓCIO----------------------------->
                        <label>
                            <p7>Preço de Sócio</p7>
                        </label>
                        <input type="text" class="form-control mb-4" name="preco_socio" style="color:#BABBBC; font-family: avalors;" required>
                        <!---------------FOTO----------------------------->
                        <label>
                            <p7>Stock</p7>
                        </label>
                        <input type="text" class="form-control mb-4" name="stock" style="color: #BABBBC; font-family: avalors;">

                        <label>
                            <p7>Referência</p7>
                        </label>
                        <input type="text" class="form-control mb-4" name="referencia" style="color: #BABBBC; font-family: avalors;">

                        <label>
                            <p7>Descrição</p7>
                        </label>
                        <textarea class="form-control" rows="8" name="descricao" style="color: #BABBBC; font-family: avalors;"></textarea>

                        <label class="mt-4">
                            <p7>Foto</p7>
                        </label>
                        <input type="file" class="form-control mb-4" name="uploadfile" style="color:#BABBBC; font-family: avalors;" required>
                        <!---------------BOTÕES----------------------------->
                        <div class="row">
                            <div class="col-4"></div>
                            <div class="col-2">
                                <button type="reset" class="button1">
                                    <h8>Cancelar</h8>
                                </button>
                            </div>

                            <div class="col-2">
                                <button type="submit" class="button1" name="submitform">
                                    <h8>Gravar</h8>
                                </button>
                            </div>
                            <div class="col-4"></div>
                        </div>
                    </div>
                </form>
            </div>
        </div>

    </div>
    </div>
    </div>


    <?php include 'footer.php'; ?>

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
</body>

</html>