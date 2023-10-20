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
</head>

<body>
    <?php include 'header.php'; ?>
    <!----------------------------------------------------------------------------------------->
    <style>
        input[type=search] {
            background-color: #212529;
            background-position: 10px 10px;
            background-repeat: no-repeat;
            padding-left: 10px;
            border-style: #212529;
            border-color: #FFD968;
            background: #212529;
            border-radius: 10px;
            border-width: 2px;
            width: 100%;
        }

        input[type=search]:focus {
            background: #212529;
            border-color: #FFD968;

        }

        ::placeholder {
            font-family: avalors;
            color: #212529;
            opacity: 50%;

        }


        p2 {
            font-family: "LEMON MILK Regular";
            text-align: justify;
            font-size: medium;
            color: white;
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
            border-radius: 0px;
            border: #FFD968;
        }

        a:link {
            text-decoration: none;
        }

        h6 {
            color: #212529;
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
            font-size: x-small;
            color: #BABBBC;
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
            background: #BABBBC;
        }

        .card {
            background-color: #212529;
            border-color: #FFD968;
            border-radius: 0px;
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
            height: 400px;
            overflow-y: scroll;
            scroll-behavior: smooth;
        }

        scroll-page {


            justify-content: center;
            height: 70%;

        }

        h8 {
            font-family: avalors;
            color: #212529;
        }

        p3 {
            font-family: "LEMON MILK Regular";
            font-weight: regular;
            color: #212529;
            text-align: justify;
            font-size: medium;
        }

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
        }

        button:hover h8 {
            color: #212529;
        }

        a:hover {
            color: #FFD968;
            background: none;
        }

        a:link {
            color: #FFD968;

        }

        .anav:hover,
        .anav:focus {
            opacity: 80%;
        }

        hr {
            width: 100%;
            background: #FED969;
            height: 5px;
        }
        p10{
            font-family: avalors;
            text-align: justify;
            font-size: medium;
            color: #FFD968;
        }
    </style>

    <p></p>
    <p></p>
    <div class="container mt-5">
        <div class="row">
            <div class="col-12">
                <center>
                    <table width="1295px" bgcolor="#FED969" height="40px">
                        <tr>
                            <td>
                                <center>
                                    <p>
                                    <h6>Pesquisa</h6>
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

    <div clas="container mt-5">
        <div clas="row">
            <div clas="col-12">
                <center>
                    <table width="1295px" bgcolor="#212529" height="40px">
                        <tr>
                            <td>
                                <center>
                                    <form class="d-flex" action="resultado_pesquisa.php" method="post">
                                        <input class="form-control me-2" type="search" name="pesquisa" placeholder="Pesquisar" aria-label="Search" style="color:#BABBBC; font-family: avalors;" required>
                                        <button class="button1" type="submit">
                                            <h8>Pesquisa</h8>
                                        </button>
                                    </form>
                                </center>
                            </td>
                        </tr>
                    </table>
                </center>
            </div>
        </div>
    </div>
    <p></p>
    <div class="container mt-1">
        <div class="row">
            <div class="col-12">
                <hr>
            </div>
        </div>
    </div>
    <p></p>
    <div class="container mt-2">
        <div class="row">
            <div class="col-12">
                <center>
                    <table width="1295px" bgcolor="#FED969" height="40px">
                        <tr>
                            <td>
                                <center>
                                    <p>
                                    <h6>Pesquisas Populares</h6>
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
    <div class="container mt-4">
        <div class="row">
            <div class="col-12">
                <table class="table table-striped">
                    <tbody>
                        <!--PLANTEL EQUIPA PRINCIPAL-------------------->
                        <tr>
                            <p></p>
                            <th scope="row">
                                <p></p>
                                <center>
                                    <p10>#1</p10>
                                </center>
                                <p></p>
                            </th>
                            <td>
                                <p></p>
                                <p10>Plantel</p10><br>
                                <p2> Em Equipa Principal Melres DC</p2>
                                <p></p>
                            </td>
                            <td>
                                <p></p>
                                <center>
                                    <a href="equipa_principal.php">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="white" class="bi bi-arrow-right" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z" />
                                        </svg>
                                    </a>
                                </center>
                                <p></p>
                            </td>
                        </tr>
                        <!---------EQUIPA SUB-17 RESULTADOS------------->
                        <tr>
                            <p></p>
                            <th scope="row">
                                <p></p>
                                <center>
                                    <p10>#2</p10>
                                </center>
                                <p></p>
                            </th>
                            <td>
                                <p></p>
                                <p10>Classificação</p10><br>
                                <p2> Em Equipa Sub-17 Melres DC</p2>
                                <p></p>
                            </td>
                            <td>
                                <p></p>
                                <center>
                                    <a href="classificacao_equipa_principal.php">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="white" class="bi bi-arrow-right" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z" />
                                        </svg>
                                    </a>
                                </center>
                                <p></p>
                            </td>
                        </tr>
                        <!-----------RESULTADOS SUB-23---->
                        <tr>
                            <p></p>
                            <th scope="row">
                                <p></p>
                                <center>
                                    <p10>#3</p10>
                                </center>
                                <p></p>
                            </th>
                            <td>
                                <p></p>
                                <p10>Resultados</p10><br>
                                <p2> Em Equipa SUB-23 Melres DC</p2>
                                <p></p>
                            </td>
                            <td>
                                <p></p>
                                <center>
                                    <a href="resultados_equipa_principal.php">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="white" class="bi bi-arrow-right" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z" />
                                        </svg>
                                    </a>
                                </center>
                                <p></p>
                            </td>
                        </tr>
                        <!--------------Acessórios Adeptos-->
                        <tr>
                            <p></p>
                            <th scope="row">
                                <p></p>
                                <center>
                                    <p10>#4</p10>
                                </center>
                                <p></p>
                            </th>
                            <td>
                                <p></p>
                                <p10>Acessórios</p10><br>
                                <p2> Em Melres Store</p2>
                                <p></p>
                            </td>
                            <td>
                                <p></p>
                                <center>
                                    <a href="acessorios.php">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="white" class="bi bi-arrow-right" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z" />
                                        </svg>
                                    </a>
                                </center>
                                <p></p>
                            </td>
                        </tr>
                        <!----------Inscricao de Sócio----------------->
                        <tr>
                            <p></p>
                            <th scope="row">
                                <p></p>
                                <center>
                                    <p10>#5</p10>
                                </center>
                                <p></p>
                            </th>
                            <td>
                                <p></p>
                                <p10>Inscrição de Sócio</p10><br>
                                <p2> Em Sócios Melres DC</p2>
                                <p></p>
                            </td>
                            <td>
                                <p></p>
                                <center>
                                    <a href="socios.php">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="white" class="bi bi-arrow-right" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z" />
                                        </svg>
                                    </a>
                                </center>
                                <p></p>
                            </td>
                        </tr>
                        <!--Estádio da Gaivota-------------------->
                        <tr>
                            <p></p>
                            <th scope="row">
                                <p></p>
                                <center>
                                    <p10>#6</p10>
                                </center>
                                <p></p>
                            </th>
                            <td>
                                <p></p>
                                <p10>Estádio da Gaivota</p10><br>
                                <p2> Em Clube Melres DC</p2>
                                <p></p>
                            </td>
                            <td>
                                <p></p>
                                <center>
                                    <a href="estadio.php">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="white" class="bi bi-arrow-right" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z" />
                                        </svg>
                                    </a>
                                </center>
                                <p></p>
                            </td>
                        </tr>
                        <!---------EQUIPA SUB-17 RESULTADOS------------->
                        <tr>
                            <p></p>
                            <th scope="row">
                                <p></p>
                                <center>
                                    <p10>#7</p10>
                                </center>
                                <p></p>
                            </th>
                            <td>
                                <p></p>
                                <p10>Palmarés</p10><br>
                                <p2> Em Clube Melres DC</p2>
                                <p></p>
                            </td>
                            <td>
                                <p></p>
                                <center>
                                    <a href="palmares.php">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="white" class="bi bi-arrow-right" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z" />
                                        </svg>
                                    </a>
                                </center>
                                <p></p>
                            </td>
                        </tr>
                        <!-----------RESULTADOS SUB-23---->
                        <tr>
                            <p></p>
                            <th scope="row">
                                <p></p>
                                <center>
                                    <p10>#8</p10>
                                </center>
                                <p></p>
                            </th>
                            <td>
                                <p></p>
                                <p10>O Projeto</p10><br>
                                <p2> Em Melrinhos</p2>
                                <p></p>
                            </td>
                            <td>
                                <p></p>
                                <center>
                                    <a href="melrinhos.php">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="white" class="bi bi-arrow-right" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z" />
                                        </svg>
                                    </a>
                                </center>
                                <p></p>
                            </td>
                        </tr>
                        <!--------------Bilheteira-->
                        <tr>
                            <p></p>
                            <th scope="row">
                                <p></p>
                                <center>
                                    <p10>#9</p10>
                                </center>
                                <p></p>
                            </th>
                            <td>
                                <p></p>
                                <p10>Bilheteira</p10><br>
                                <p2> Em Bilheteira</p2>
                                <p></p>
                            </td>
                            <td>
                                <p></p>
                                <center>
                                    <a href="bilheteira.php">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="white" class="bi bi-arrow-right" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z" />
                                        </svg>
                                    </a>
                                </center>
                                <p></p>
                            </td>
                        </tr>
                        <!----------Inscricao de Atleta----------------->
                        <tr>
                            <p></p>
                            <th scope="row">
                                <p></p>
                                <center>
                                    <p10>#10</p10>
                                </center>
                                <p></p>
                            </th>
                            <td>
                                <p></p>
                                <p10>Inscrição de Atleta</p10><br>
                                <p2> Em Melrinhos</p2>
                                <p></p>
                            </td>
                            <td>
                                <p></p>
                                <center>
                                    <a href="melrinhos.php">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="white" class="bi bi-arrow-right" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z" />
                                        </svg>
                                    </a>
                                </center>
                                <p></p>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

        </div>
    </div>
    <p></p>
    <div class="container mt-1">
        <div class="row">
            <div class="col-12">
                <hr>
            </div>
        </div>
    </div>
    <p></p>
    <!-------------------------------------------FOOTER--------------------------------------------------------------------------------------------->
    <?php include 'footer.php'; ?>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>


</html>