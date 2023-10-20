<?php
include_once("ligacao.php");
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="Imagens/Logotipo.png">
    <title>Melres DC</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link href="css.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</head>

<body>
    <p></p>
    <div class="container">
        <div class="row">
            <div class="col-5"></div>
            <div class="col align-self-center">
                <center>
                    <a href="index.php">
                        <div class="view overlay zoom">
                            <img src="Imagens/Logotipo.png" width="120" height="120">
                        </div>
                    </a>
                </center>

            </div>
            <div class="col-5"></div>
        </div>
    </div>
    </div>
    <div class="container mt-2 mb-2">
        <div class="row">
            <div class="col-5"></div>
            <div class="col align-self-center">
                <center>
                    <p>
                        <H7>MELRES DC</H7>
                    </p>
                </center>

            </div>
            <div class="col-5"></div>
        </div>
    </div>
    </div>
    <!------------------------------------------------------------------------------------------------------------------->
    <style>
        .card {
            background-color: #212529;
            border-color: #FED969;
            border-width: 3px;
        }

        h7 {
            color: #FED969;
        }
    </style>
    <style>
        p2 {
            font-family: "LEMON MILK Regular";
            text-align: justify;
            font-size: medium;
            color: white;
        }

        p3 {
            font-family: "LEMON MILK Regular";
            font-size: medium;
            color: #BABBBC;
            text-align: justify;
        }

        p4 {
            font-family: avalors;
            text-align: justify;
            font-size: small;
            color: #FFD968;

        }

        hr {
            width: 100%;
            background: #FFD968;
            height: 5px;
        }

        p6 {
            font-family: avalors;
            text-align: justify;
            font-size: medium;
            color: #FFD968;
        }

        svg {
            margin-bottom: 5px;
        }

        a:link {
            text-decoration: none;
        }

        h6 {
            color: #212529
        }

        p5 {
            font-family: avalors;
            text-align: justify;
            font-size: small;
            color: #FFD968;
        }

        p7 {
            font-family: "LEMON MILK Regular";
            text-align: justify;
            font-size: large;
            color: white;
        }

        p8 {
            font-family: avalors;
            font-size: large;
            color: #FFD968;
            text-align: justify;
        }

        body {
            background-color: #212529;
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
    </style>

    <div class="container mb-5 mt-5">
        <div class="row">
            <div class="col-3"></div>
            <div class="col-6">
                <div class="card bg-dark" width=" 10rem;">
                    <div class="card-body">
                        <p></p>
                        <center>
                            <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" fill="#FED969" class="bi bi-check-circle" viewBox="0 0 16 16">
                                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                                <path d="M10.97 4.97a.235.235 0 0 0-.02.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05z" />
                            </svg>
                        </center>
                        <p></p>
                        <center>
                            <p8>SUCESSO!</p8>
                        </center>
                        <p></p>
                        <center>
                            <p3>Agora, Clique no botão abaixo para efetuar o download do formulário de inscrição!</p3>
                            <p></p>
                            <a href="Inscrição_Sócio_Melres_DC.pdf" download="Inscrição_Sócio_Melres_DC">
                                <button class="button1" type="button"><h8>Download</h8></button>
                            </a>
                        </center>
                        <p></p>
                    </div>
                </div>
            </div>
            <div class="col-3"></div>
        </div>
    </div>
    <!-------------------------------------------------------------------------------------------------------------------->

    <div class="container mb-5">
        <div class="row">
            <div class="col"></div>

        </div>
    </div>
    <div class="container mb-4">
        <div class="row">

        </div>
    </div>
    <!----------------------------------------------------------------------------->
    <p></p>

    <?php include 'footer.php'; ?>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>