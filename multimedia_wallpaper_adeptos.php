<?php
include_once("ligacao.php");
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <script src="script.js"></script>
</head>

<body>
    <?php include 'header.php'; ?>

    <style>
        p2 {
            font-family: "Lemon Milk Regular";
            text-align: justify;
            font-size: larger;
            color: white;
        }

        p3 {
            font-family: "avalors";
            font-size: small;
            color: #BABBBC;
            text-align: justify;
        }

        p9 {
            font-family: avalors;
            font-size: x-large;
            color: white;
            text-align: justify;
        }

        p10 {

            font-family: avalors;
            font-size: small;
            color: #212529;
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

        .card {
            background-color: #212529;
            border-color: #FFD968;
            border-radius: 0px;
            border-width: 2px;
            ;
        }

        a:link {
            text-decoration: none;
        }

        a:hover {
            background: none;
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

        img {
            border-color: white;
        }

        button {
            background-color: #FFD968;
            padding: 8px 10px;
            border-color: #FFD968;
            border-radius: 15px;
            margin-bottom: 10px;
        }

        select {
            background-color: #212529;
            border-color: #BABBBC;
            padding: 12px 12px;
            font-family: "LEMON MILK Regular";
            font-size: large;
            color: #BABBBC;
            margin-top: 10px;
            margin-bottom: 10px;
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

        h6 {
            font-family: avalors;
            color: #212529;

        }

        .img-box img.img-hover {
            display: none;

        }

        .img-box:hover img.img-default {
            display: none;
        }

        .img-box:hover img.img-hover {
            display: inherit;
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

        button:hover svg {
            border-color: #212529;
        }
    </style>
    <div class="container mt-4 mb-4">
        <div class="row">
            <div class="col-12">
                <center>

                    <table width="1296px" bgcolor="#FED969" height="40px">

                        <tr>
                            <td>
                                <center>
                                    <p></p>
                                    <h6>Multimédia</h6>
                                    <p></p>
                                </center>
                            </td>
                        </tr>

                    </table>

                </center>
            </div>
        </div>
    </div>
    <div class="container mt-4">
        <div class="row">
            <div class="col-4">
                <center>
                    <p>
                        <a href="multimedia_wallpaper_jogadores.php">
                            <p4>Jogadores</p4>
                        </a>
                    </p>
                </center>
            </div>
            <div class="col-4">
                <center>
                    <p>
                        <a href="multimedia_wallpaper_estadio.php">
                            <p4>Estádio</p4>
                        </a>
                    </p>
                </center>
            </div>
            <div class="col-4">
                <center>
                    <p>
                        <p3>Adeptos</p3>
                    </p>
                </center>
            </div>
        </div>
    </div>
    <div class="container mt-1">
        <div clas="row">
            <div class="col-12">
                <hr>
            </div>
        </div>
    </div>
    <!--------------------------------------------------------------------------------------------------------------------------------->
    <div class="container mt-5">
        <div class="row">
            <div class="col-6 align-self-center">
                <div class="card mb-3">
                    <div class="imgcard">
                        <img src="Wallpaper_Adeptos_1.jpg" style="width:100%">
                    </div>
                    <div class="container mt-2">
                        <div class="row">
                            <div class="col-12">
                                <center>
                                    <p></p>
                                    <a href="Wallpaper_Adeptos_1.jpg" download="Wallpaper_Adeptos_1">
                                        <button style="border-radius: 0px;" class="button1">
                                            <h8>Download</h8>
                                        </button>
                                    </a>
                                    <p></p>
                                </center>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6 align-self-center">
                <div class="card mb-3">
                    <div class="imgcard">
                        <img src="Wallpaper_Adeptos_2.jpg" style="width:100%">
                    </div>
                    <div class="container mt-2">
                        <div class="row">
                            <div class="col-12">
                                <center>
                                    <p></p>
                                    <a href="Wallpaper_Adeptos_2.jpg" download="Wallpaper_Adeptos_2">
                                        <button style="border-radius: 0px;" class="button1">
                                            <h8>Download</h8>
                                        </button>
                                    </a>
                                    <p></p>
                                </center>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <div class="container mt-2">
        <div class="row">
            <div class="col-6 align-self-center">
                <div class="card mb-3">
                    <div class="imgcard">
                        <img src="Wallpaper_Adeptos_3.jpg" style="width:100%">
                    </div>
                    <div class="container mt-2">
                        <div class="row">
                            <div class="col-12">
                                <center>
                                    <p></p>
                                    <a href="Wallpaper_Adeptos_3.jpg" download="Wallpaper_Adeptos_3">
                                        <button style="border-radius: 0px;" class="button1">
                                            <h8>Download</h8>
                                        </button>
                                    </a>
                                    <p></p>
                                </center>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6 align-self-center">
                <div class="card mb-3">
                    <div class="imgcard">
                        <img src="Wallpaper_Adeptos_4.jpg" style="width:100%">
                    </div>
                    <div class="container mt-2">
                        <div class="row">
                            <div class="col-12">
                                <center>
                                    <p></p>
                                    <a href="Wallpaper_Adeptos_4.jpg" download="Wallpaper_Adeptos_4">
                                        <button style="border-radius: 0px;" class="button1">
                                            <h8>Download</h8>
                                        </button>
                                    </a>
                                    <p></p>
                                </center>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!------------------------------------------------------------------------------------------------------------------------------>
    <div class="container mt-4">
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