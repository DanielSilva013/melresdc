<?php
include_once("ligacao.php");

session_start();
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
    <?php include 'header.php'; ?>
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

        p5 {

            font-family: avalors;
            text-align: justify;
            font-size: small;
            color: #FFD968;

        }

        p15 {

            font-family: avalors;
            text-align: justify;
            font-size: larger;
            color: white;

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

        .hr1 {
            width: 100%;
            background: #BABBBC;
            height: 3px;
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

        p14 {
            font-family: avalors;
            color: #FED969;
            font-size: medium;
        }
        p24 {
            font-family: avalors;
            color: white;
            font-size: medium;
        }
        scroll-container {
            display: block;
            margin: 0 auto;
        }


        scroll-container {
            display: block;
            width: 645;
            height: 400px;
            overflow-y: scroll;
            scroll-behavior: smooth;
        }

        scroll-page {


            justify-content: center;
            height: 70%;

        }

        p3 {
            font-family: avalors;
            font-size: small;
            color: #BABBBC;
            text-align: justify;
        }

        p4 {
            font-family: avalors;
            text-align: justify;
            font-size: small;
            color: #FFD968;

        }

        p14 {
            font-family: avalors;
            text-align: justify;
            font-size: larger;
            color: #FFD968;

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

        #jstext {
            text-align: center;
            font-size: 90px;
            color: #FED969;
        }

        .total {
            color: #FED969;
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

        h8 {
            color: #FED969;
            font-family: avalors;
            font-size: medium;
        }

        h8:hover {
            color: #BABBBC;
            font-family: avalors;
            font-size: medium;
        }
    </style>
    <!------------------------------------------------------------------------------------------------------------------------------------------------------->
    <p></p>
    <div class="container mt-5">
        <div class="row">
            <div class="col-12">
                <center>
                    <table width="1300px" bgcolor="#FED969" height="40px">
                        <tr>
                            <td>
                                <center>
                                    <p>
                                    <h6>Finalizar Encomenda</h6>
                                    </p>
                                </center>
                            </td>
                        </tr>
                    </table>
                </center>
            </div>
        </div>
    </div>
    <p></p>
    <!----------------------------------------------------------------------------------------------------------------->
    <div class="container mt-4">
        <div class="row">
            <div class="col-3">
                <center>
                    <p>
                        <p4>Carrinho</p4>
                    </p>
                </center>
            </div>
            <div class="col-3">
                <center>
                    <p>
                        <a href="dados_entrega.php">
                            <p4>Entrega</p4>
                        </a>
                    </p>
                </center>
            </div>
            <div class="col-3">
                <center>
                    <p>
                        <p3>Pagamento</p3>
                    </p>
                </center>
            </div>
            <div class="col-3">
                <center>
                    <p>
                        <p4>Confirmação</p4>
                    </p>
                </center>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <hr>
            </div>
        </div>
    </div>
    <p></p>
    <!------------------------------------------------------------------------------------------------------------------------------------------------------>
    <div class="container mt-4">
        <div class="row">
            <div class="col-12">
                <p14>Resumo do Pedido</p14>
            </div>
        </div>
    </div>
    <div class="container mt-2">
        <div class="row">
            <div class="col-12">
                <hr class="hr1">
            </div>
        </div>
    </div>
    </div>
    <div class="container mt-2">
        <div class="row">
            <div class="col-12">
                <div id="itens"> </div>
                <div>
                    <?php
                    foreach ($_SESSION['carrinho'] as $id => $value) {
                        echo '<div class="carrinho-item">';
                        echo '<img src="' . $value['foto'] . '" width="10%" border="2px" style="border-color: #FED969">';
                        echo '<p24>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;' . $value['nome'] . ' &nbsp;&nbsp;|&nbsp;&nbsp; Quantidade: ' . $value['quantidade'] . ' &nbsp;&nbsp;|&nbsp;&nbsp;Preço: ' . ($value['quantidade'] * $value['preco']) . '€</p24>';
                        echo '<hr class="hr1">';
                        echo '</div>';
                    }
                    ?>
                    <p></p>

                </div>
            </div>
        </div>
    </div>
    <!------------------------------------------------------------------------------------------------------------------------------------------------->
    <p></p>
    <div class="container mt-4">
        <div class="row">
            <div class="col-12">
                <p14>Método de Pagamento</p14>
            </div>
        </div>
    </div>

    <div class="container mt-1">
        <!------------------MULTIBANCO------------------------>
        <div class="row">
            <div class="col-12">
                <hr>
            </div>
        </div>
        <div class="row">
            <div class="col-1">
                <div class="form-check">
                    <div class="d-flex p-4 bd-highlight">
                        <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                        <label class="form-check-label" for="exampleRadios1"></label>
                    </div>
                </div>
            </div>
            <div class="col-1">
                <img src="Imagens/Pagamentos/multibanco_logo.png" width="80%">
            </div>
            <div class="col-1"></div>
            <div class="col-2">
                <div class="d-flex p-4 bd-highlight">
                    <p15>multibanco</p15>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <hr>
            </div>
        </div>
        <!------------------------MVWAY--------------------------->
        <div class="row">
            <div class="col-12">
                <hr>
            </div>
        </div>
        <div class="row">
            <div class="col-1">
                <div class="form-check">
                    <div class="d-flex p-4 bd-highlight">
                        <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" disabled>
                        <label class="form-check-label" for="exampleRadios1"></label>
                    </div>
                </div>
            </div>
            <div class="col-2">
                <img src="Imagens/Pagamentos/mbway.png" width="70%">
            </div>
            <div class="col-2">
                <div class="d-flex p-4 bd-highlight">
                    <p15>MB WAY</p15>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <hr>
            </div>
        </div>
        <!--------------PAYPAL--------------------->
        <div class="row">
            <div class="col-12">
                <hr>
            </div>
        </div>
        <div class="row">
            <div class="col-1">
                <div class="form-check">
                    <div class="d-flex p-4 bd-highlight">
                        <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" disabled>
                        <label class="form-check-label" for="exampleRadios1"></label>
                    </div>
                </div>
            </div>
            <div class="col-2">
                <img src="Imagens/Pagamentos/paypal.png" width="40%">
            </div>
            <div class="col-2">
                <div class="d-flex p-4 bd-highlight">
                    <p15>PayPal</p15>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <hr>
            </div>
        </div>
    </div>

    <!----------------------BOTÕES---------------------------------------------------------------->

    <div class="container mt-4">
        <div class="row">
            <div class="col-3"></div>
            <div class="col-2">
                <center>
                    <a href="dados_entrega.php">
                        <button style="border-radius: 10px;" class="button1">
                            <h8>
                                Anterior
                            </h8>
                        </button>
                    </a>
                </center>
            </div>
            <div class="col-2"></div>
            <div class="col-2">
                <center>
                    <a href="confirmacao_pagamento.php">
                        <button class="button1">
                            <h8>Avançar</h8>
                        </button>
                    </a>
                </center>
            </div>
            <div class="col-3"></div>
        </div>
    </div>



    <!--------------------------------------------------FOOTER------------------------------------------------------------->
    <p></p>
    <?php include 'footer.php'; ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
</body>

</html>