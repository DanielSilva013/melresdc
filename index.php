<?php
include_once("ligacao.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="Imagens/Classificação/Logotipo.png">
    <title>Melres DC</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</head>

<body>
    <?php include 'header.php'; ?>
    <!--------------------------------Carroseel----------------------------------------------------------------------->
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <a href="loja.php"><img src="Imagens/carrossel/outdoor_grande_1.jpg" class="d-block w-100" alt="..."></a>
            </div>
            <div class="carousel-item">
                <a href="bilheteira.php"><img src="Imagens/carrossel/outdoor_grande_2.jpg" class="d-block w-100" alt="..."></a>
            </div>
            <div class="carousel-item">
                <a href="historia.php"><img src="Imagens/carrossel/outdoor_grande_3.jpg" class="d-block w-100" alt="..."></a>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <!--------------------------------CSS----------------------------------------------------------------------------------------------------------------->

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
        p22 {
            font-family: avalors;
            text-align: justify;
            font-size: small;
            color: white;
            opacity: 30%;
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
            font-size: small;
            color: #BABBBC;
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
            font-size: med;
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
            font-family: "LEMON MILK Regular";
            font-weight: regular;
            color: #BABBBC;
            text-align: justify;
            font-size: medium;
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
    </style>

    <!----------------------------------------------------------------------Notícias-------------------------------------------------------------------------------------->

    <p></p>
    <div class="container mt-5">
        <div class="row">
            <div class="col-12">
                <center>
                    <table width="1296px" bgcolor="#FED969">
                        <tr>
                            <td>
                                <center>
                                    <h6>
                                        <p></p>Notícias<p></p>
                                    </h6>
                                </center>
                            </td>
                        </tr>
                    </table>
                </center>
            </div>
        </div>
    </div>

    <p></p>

    <div class="container mt-4">
        <div class="row">
            <?php
            $pedido = "SELECT * FROM noticias ORDER BY id limit 4";
            $resultado = $ligacao->query($pedido);

            if ($resultado->num_rows > 0) {
                while ($row = $resultado->fetch_assoc()) {
            ?>
                    <div class="col-3 align-self-center">
                     <a href="noticia_individual.php?id=<?php echo $row['id'] ?>">
                            <div class="card mb-3">
                                <div class="img imgcard">
                                    <img src="<?php echo $row["foto"]; ?>" style="width:100%">
                                </div>
                                <div class="container mt-2">
                                    <center>
                                        <p1><b><?php echo $row["data"]; ?></b></p1>
                                    </center>
                                    <p></p>
                                    <p2><?php echo $row["titulo"]; ?></p2>
                                    <p></p>
                                    <p3><?php echo $row["subtitulo"]; ?></p3>
                                    <p></p>
                                </div>
                            </div>
                            </a>
                    </div>

            <?php
                }
            }
            ?>
        </div>

    </div>


    <p></p>
    <center>
        <a href="noticias.php">
            <button style="border-radius: 0px;" class="button1">
                <h8>Mais Notícias</h8>
            </button>

        </a>

    </center>
    <p></p>
    <div class="container mt-1">
        <div class="row">
            <div class="col-12">
                <hr>
            </div>
        </div>
    </div>
    <!--Agenda----------------------------------------------------------------------------->
    <p></p>
    <div class="container mt-5">
        <div class="row">
            <div class="col-12">
                <center>
                    <table width="1296px" bgcolor="#FED969">
                        <tr>
                            <td>
                                <center>
                                    <h6>
                                        <p></p>AGENDA<p></p>
                                    </h6>
                                </center>
                            </td>
                        </tr>
                    </table>
                </center>
            </div>
        </div>
    </div>
    <p></p>
    <!--CALENDÁRIO----------------------------------------------------------------------------->
    <div class="container mt-4">
        <div class="row">
            <div class="col-6">
                <center>
                    <table bgcolor="#212529" align="center" cellspacing="21" cellpadding="21">
                        <thead>
                            <tr>
                                <p5>Junho</p5>
                            </tr>
                            <br>
                            <tr>
                                <p2>2023</p2>
                            </tr>
                            <tr>
                                <th>
                                    <p2>DOM<p2>
                                </th>
                                <th>
                                    <p2>SEG</p2>
                                </th>
                                <th>
                                    <p2>TER</p2>
                                </th>
                                <th>
                                    <p2>QUA</p2>
                                </th>
                                <th>
                                    <p2>QUI</p2>
                                </th>
                                <th>
                                    <p2>SEG</p2>
                                </th>
                                <th>
                                    <p2>SAB</p2>
                                </th>
                            </tr>
                        </thead>

                        <tbody>
                            <tr>
                                </thead>
                                <?php
                                $pedido = "SELECT * FROM agendateste WHERE semana = 1 ORDER BY id LIMIT 7";
                                $resultado = $ligacao->query($pedido);

                                if ($resultado->num_rows > 0) {
                                    while ($row = $resultado->fetch_assoc()) {
                                ?>
                                        <td>
                                            <center>
                                                <p2><?php echo $row["dia"]; ?></p2>
                                            </center>
                                        </td>
                                <?php
                                    }
                                }
                                ?>
                                
                            </tr>
                            <tr>
                                </thead>
                                <?php
                                $pedido = "SELECT * FROM agendateste WHERE semana = 2 ORDER BY id LIMIT 7 ";
                                $resultado = $ligacao->query($pedido);

                                if ($resultado->num_rows > 0) {
                                    while ($row = $resultado->fetch_assoc()) {
                                ?>
                                        <td>
                                            <center>
                                                <p2><?php echo $row["dia"]; ?></p2>
                                            </center>
                                        </td>
                                <?php
                                    }
                                }
                                ?>
                                
                            </tr>
                            <tr>
                                </thead>
                                <?php
                                $pedido = "SELECT * FROM agendateste WHERE semana = 3 ORDER BY id LIMIT 7 ";
                                $resultado = $ligacao->query($pedido);

                                if ($resultado->num_rows > 0) {
                                    while ($row = $resultado->fetch_assoc()) {
                                ?>
                                        <td>
                                            <center>
                                                <p2><?php echo $row["dia"]; ?></p2>
                                            </center>
                                        </td>
                                <?php
                                    }
                                }
                                ?>
                                
                            </tr>
                            <tr>
                                </thead>
                                <?php
                                $pedido = "SELECT * FROM agendateste WHERE semana = 4 ORDER BY id LIMIT 7 ";
                                $resultado = $ligacao->query($pedido);

                                if ($resultado->num_rows > 0) {
                                    while ($row = $resultado->fetch_assoc()) {
                                ?>
                                        <td>
                                            <center>
                                                <p2><?php echo $row["dia"]; ?></p2>
                                            </center>
                                        </td>
                                <?php
                                    }
                                }
                                ?>
                                
                            </tr>
                            <tr>
                                </thead>
                                <?php
                                $pedido = "SELECT * FROM agendateste WHERE semana = 5 ORDER BY id LIMIT 7 ";
                                $resultado = $ligacao->query($pedido);

                                if ($resultado->num_rows > 0) {
                                    while ($row = $resultado->fetch_assoc()) {
                                ?>
                                        <td>
                                            <center>
                                                <p2><?php echo $row["dia"]; ?></p2>
                                            </center>
                                        </td>
                                <?php
                                    }
                                }
                                ?>
                                
                            </tr>
                        </tbody>
                    </table>

                </center>
            </div>
            <!--------------------------------------------------------EVENTOS----------------------------------------------------------------------------->
            <div class="col-6">

                <p></p>
                <p></p>
                <!--------SCROLL------------------------------------------>

                <scroll-container>
                    <scroll-page id="page-1">
                        <table width="600px">
                            <tbody>
                                <tr>
                                    <th>
                                        <p5>14 DE JANEIRO</p5>
                                        <p1> | </p1>
                                        <p2>14:30h&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Camp. de Juniores AF Porto</p2>
                                    </th>
                                </tr>
                                <tr>
                                    <th>
                                        <p></p>
                                    </th>
                                </tr>
                                <tr>
                                    <th>
                                        <p5>Melres DC SUB-17</p5>
                                        <p7>VS </p7>
                                        <P2>Gens SC SUB-17</P2>
                                    </th>
                                </tr>
                                <tr>
                                    <th>
                                        <p></p>
                                    </th>
                                </tr>
                                <tr>
                                    <th>
                                        <p7>Estádio da Gaivota</p7>
                                    </th>
                                </tr>
                                <tr>
                                    <th>
                                        <hr>
                                    </th>
                                </tr>
                            </tbody>
                        </table>
                    </scroll-page>
                    <scroll-page id="page-2">
                        <table width="600px">
                            <tbody>
                                <tr>
                                    <th>
                                        <p5>15 de Janeiro</p5>
                                        <p1> | </p1>
                                        <p2>16:00h&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;AF Porto 2ª Divisão</p2>
                                    </th>
                                </tr>
                                <tr>
                                    <th>
                                        <p></p>
                                    </th>
                                </tr>
                                <tr>
                                    <th>
                                        <p5>Melres DC</p5>
                                        <p7>VS </p7>
                                        <P2>CR Ataense</P2>
                                    </th>
                                </tr>
                                <tr>
                                    <th>
                                        <p></p>
                                    </th>
                                </tr>
                                <tr>
                                    <th>
                                        <p7>Estádio da Gaivota</p7>
                                    </th>
                                </tr>
                                <tr>
                                    <th>
                                        <hr>
                                    </th>
                                </tr>
                            </tbody>
                        </table>
                    </scroll-page>
                    <scroll-page id="page-3">
                        <table width="600px">
                            <tbody>
                                <tr>
                                    <th>
                                        <p5>19 de Janeiro</p5>
                                        <p1> | </p1>
                                        <p2>16:00h&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Evento Administrativo</p2>
                                    </th>
                                </tr>
                                <tr>
                                    <th>
                                        <p></p>
                                    </th>
                                </tr>
                                <tr>
                                    <th>
                                        <P2>Reunião de Associados do</P2>
                                        <p5> Melres DC</p5>
                                    </th>
                                </tr>
                                <tr>
                                    <th>
                                        <p></p>
                                    </th>
                                </tr>
                                <tr>
                                    <th>
                                        <p7>Instalações Internas do Estádio da Gaivota</p7>
                                    </th>
                                </tr>
                                <tr>
                                    <th>
                                        <hr>
                                    </th>
                                </tr>
                            </tbody>
                        </table>
                    </scroll-page>
                    <scroll-page id="page-4">
                        <table width="600px">
                            <tbody>
                                <tr>
                                    <th>
                                        <p5>21 de Janeiro</p5>
                                        <p1> | </p1>
                                        <p2>10:30h&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Taça de Gondomar Sub-9</p2>
                                    </th>
                                </tr>
                                <tr>
                                    <th>
                                        <p></p>
                                    </th>
                                </tr>
                                <tr>
                                    <th>
                                        <p5>FC Fânzeres SUB-9</p5>
                                        <p7>VS </p7>
                                        <P2>Melres DC Sub-9</P2>
                                    </th>
                                </tr>
                                <tr>
                                    <th>
                                        <p></p>
                                    </th>
                                </tr>
                                <tr>
                                    <th>
                                        <p7>Estádio Estrelas de Fânzeres</p7>
                                    </th>
                                </tr>
                                <tr>
                                    <th>
                                        <hr>
                                    </th>
                                </tr>
                            </tbody>
                        </table>
                    </scroll-page>
                    <scroll-page id="page-5">
                        <table width="600px">
                            <tbody>
                                <tr>
                                    <th>
                                        <p5>28 de Janeiro</p5>
                                        <p1> | </p1>
                                        <p2>10:00h&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Camp. de Gondomar Sub-7</p2>
                                    </th>
                                </tr>
                                <tr>
                                    <th>
                                        <p></p>
                                    </th>
                                </tr>
                                <tr>
                                    <th>
                                        <p5>SC Rio Tinto SUB-7</p5>
                                        <p7>VS </p7>
                                        <P2>Melres DC Sub-7</P2>
                                    </th>
                                </tr>
                                <tr>
                                    <th>
                                        <p></p>
                                    </th>
                                </tr>
                                <tr>
                                    <th>
                                        <p7>Estádio Cidade de Rio Tinto</p7>
                                    </th>
                                </tr>
                                <tr>
                                    <th>
                                        <hr>
                                    </th>
                                </tr>
                            </tbody>
                        </table>
                    </scroll-page>
                    <scroll-page id="page-6">
                        <table width="600px">
                            <tbody>
                                <tr>
                                    <th>
                                        <p5>29 de Janeiro</p5>
                                        <p1> | </p1>
                                        <p2>16:30h&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;AF Porto 2ª Divisão</p2>
                                    </th>
                                </tr>
                                <tr>
                                    <th>
                                        <p></p>
                                    </th>
                                </tr>
                                <tr>
                                    <th>
                                        <p5>Melres DC</p5>
                                        <p7>VS </p7>
                                        <P2>FC Parada</P2>
                                    </th>
                                </tr>
                                <tr>
                                    <th>
                                        <p></p>
                                    </th>
                                </tr>
                                <tr>
                                    <th>
                                        <p7>Estádio da Gaivota</p7>
                                    </th>
                                </tr>
                                <tr>
                                    <th>
                                        <hr>
                                    </th>
                                </tr>
                            </tbody>
                        </table>
                    </scroll-page>
                </scroll-container>
                <!--------/SCROLL------------------------------------------>

                <p></p>

            </div>
        </div>
    </div>
    <div class="container mt-1">
        <div class="row">
            <div class="col-12">
                <hr>
            </div>
        </div>
    </div>
    <!--DESTAQUES PRODUTOS LOJA----------------------------------------------------------------------------->
    <p></p>
    <div class="container mt-5">
        <div class="row">
            <div class="col-12">
                <center>
                    <table width="1296px" bgcolor="#FED969">
                        <tr>
                            <td>
                                <center>
                                    <h6>
                                        <p></p>MELRES STORE<p></p>
                                    </h6>
                                </center>
                            </td>
                        </tr>
                    </table>
                </center>
            </div>
        </div>
    </div>
    <p></p>
    <p></p>
    <div class="container mt-4">
        <div class="row">
            <?php
            $pedido = "SELECT * FROM produto WHERE categoria = 'textil' limit 1";
            $resultado = $ligacao->query($pedido);

            if ($resultado->num_rows > 0) {
                while ($row = $resultado->fetch_assoc()) {
            ?>
                    <div class="col-4 align-self-center">
                     <a href="produto.php?id=<?php echo $row['id'] ?>">
                            <div class="card mb-3">
                                <div class="img imgcard">
                                    <img src="<?php echo $row["foto"]; ?>" style="width:100%">
                                </div>
                            </div>
                            </a>
                    </div>

            <?php
                }
            }
            ?>
             <?php
            $pedido = "SELECT * FROM produto WHERE categoria = 'adeptos' ORDER BY nome limit 1";
            $resultado = $ligacao->query($pedido);

            if ($resultado->num_rows > 0) {
                while ($row = $resultado->fetch_assoc()) {
            ?>
                    <div class="col-4 align-self-center">
                     <a href="produto.php?id=<?php echo $row['id'] ?>">
                            <div class="card mb-3">
                                <div class="img imgcard">
                                    <img src="<?php echo $row["foto"]; ?>" style="width:100%">
                                </div>
                            </div>
                            </a>
                    </div>

            <?php
                }
            }
            ?>
             <?php
            $pedido = "SELECT * FROM produto WHERE categoria = 'acessorios' ORDER BY nome limit 1";
            $resultado = $ligacao->query($pedido);

            if ($resultado->num_rows > 0) {
                while ($row = $resultado->fetch_assoc()) {
            ?>
                    <div class="col-4 align-self-center">
                     <a href="produto.php?id=<?php echo $row['id'] ?>">
                            <div class="card mb-3">
                                <div class="img imgcard">
                                    <img src="<?php echo $row["foto"]; ?>" style="width:100%">
                                </div>
                            </div>
                            </a>
                    </div>

            <?php
                }
            }
            ?>
        </div>

    </div>
    <p></p>
    <center>
        <a href="loja.php">
            <button style="border-radius: 0px;" class="button2">
                <h8>Melres STORE</h8>
            </button>

        </a>
    </center>
    <p></p>
    <div class="container mt-1">
        <div class="row">
            <div class="col-12">
                <hr>
            </div>
        </div>
    </div>
    <!-------------------------------------------FOOTER--------------------------------------------------------------------------------------------->
    <?php include 'footer.php'; ?>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>


</html>