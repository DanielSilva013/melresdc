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
    <!-------------------------------------CSS-------------------------------------------------------------------------------------------------->
    <style>
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

        svg {
            margin-bottom: 5px;
        }

        .card {
            background-color: #212529;
            border-color: #FFD968;
            border-radius: 0px;
            border-width: 2px;
        }

        a:link {
            text-decoration: none;
        }

        h6 {
            color: #212529;
            font-family: avalors;
        }

        p5 {
            font-family: avalors;
            text-align: justify;
            font-size: small;
            color: #FFD968;
        }

        button {
            background-color: #FED969;
            padding: 10px 20px;
            border: none;
            border-radius: 15px;

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

        input[type=nome] {
            background-color: #212529;
            background-position: 10px 10px;
            background-repeat: no-repeat;
            padding-left: 10px;
            border-style: #212529;
            border-color: white;
            background: #212529;
            border-radius: 10px;
            border-width: 2px;
            width: 100%;
        }

        input[type=nome]:focus {
            background: #212529;
            border-color: #FED969;

        }

        input::placeholder {
            font-family: avalors;
            color: #FED969;
            opacity: 50%;
            border-color: #6C757D;

        }

        /*-----------------IMPUT EMAIL----------------------------------------------*/
        input[type=email] {
            background-color: #212529;
            background-position: 10px 10px;
            background-repeat: no-repeat;
            padding-left: 10px;
            border-style: #212529;
            border-color: white;
            background: #212529;
            border-radius: 10px;
            border-width: 2px;
            width: 100%;
        }

        input[type=email]:focus {
            background: #212529;
            border-color: #FFD968;

        }

        /*-----------------IMPUT PASSWORD----------------------------------------------*/
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

        input[type=date] {
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

        input[type="date"]::-webkit-calendar-picker-indicator {
            cursor: pointer;
            filter: invert(1.8) brightness(100%) sepia(100%) saturate(100%) hue-rotate(240deg);
        }

        input[type=date]:focus {
            background: #212529;
            border-color: #FFD968;

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

        input[type=categoria] {
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

        input[type=categoria]:focus {
            background: #212529;
            border-color: #FFD968;

        }
    </style>

    <!------------------------------------------------------------------------------------------------------------------------------------------>

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
                                    <h6>Sócios</h6>
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
            <div class="col-4">
                <center>
                    <p>
                        <p3>Inscrição</p3>
                    </p>
                </center>
            </div>
            <div class="col-4">
                <center>
                    <p>
                        <a href="categorias_socio.php">
                            <p4>Categorias</p4>
                        </a>
                    </p>
                </center>
            </div>
            <div class="col-4">
                <center>
                    <p>
                        <a href="vantagens_socio.php">
                            <p4>Vantagens</p4>
                        </a>
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
    <!------------------------------------------------------INSCRICAO--------------------------------------------------------->
    <div class="container mb-5 mt-5">
        <div class="row">
            <div class="col-3"></div>
            <div class="col-6">
                <div class="card bg-dark" width=" 10rem;">
                    <div class="card-body">
                        <center>
                            <font size="5" face="avalors" color="#FED969">Inscrição de Sócio</font>
                            <p></p>
                            <font size="3" face="Lemon Milk Regular" color="white">Junta-te à família Melres DC!</font>
                            <p></p>
                            <hr>
                            <p></p>
                        </center>


                        <form action="efetua_registo_socio.php" method="POST">
                            <div class="form-group mb-0">
                                <label for="exampleInputEmail1" class="form-label"></label>
                                <input type="nome" name="nome" required class="form-control" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nome" 
                                style="color:#BABBBC; font-family: avalors;" required>
                                <div id="emailHelp" class="form-text"></div>
                            </div>
                            <div class="form-group mb-0">
                                <label for="exampleInputEmail1" class="form-label"></label>
                                <input type="email" name="email" required class="form-control" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email" 
                                style="color:#BABBBC; font-family: avalors;" required>
                                <div id="emailHelp" class="form-text"></div>
                            </div>
                            <div class="form-group mb-0">
                                <label for="exampleInputEmail1" class="form-label"></label>
                                <input type="date" name="data_nascimento" required class="form-control" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Data de Nascimento" 
                                style="color:#BABBBC; font-family: avalors;" required>
                                <p>
                                    <?php
                                    if (isset($_SESSION['Erro'])) {
                                        echo $_SESSION['Erro'];
                                        unset($_SESSION['Erro']);
                                    }
                                    ?>
                                </p>
                                <p>
                                    <?php
                                    if (isset($_SESSION['logout'])) {
                                        echo $_SESSION['logout'];
                                        unset($_SESSION['logout']);
                                    }
                                    ?>
                                </p>
                            </div>
                            <p></p>
                            <center>
                                <a href="confirmacaosocio.php">
                                    <button type="submit" class="button1">
                                        <font size="2" face="avalors" color="#FED969">
                                            <h8>Enviar</h8>
                                        </font>
                                    </button>
                                </a>
                            </center>
                        </form>
                        <style>
                            hr {
                                position: relative;
                                top: 5px;
                                height: 6px;
                                background: #FED969;
                                margin-bottom: 5px;
                            }
                        </style>
                    </div>
                </div>
            </div>
            <div class="col-3"></div>
        </div>
    </div>
    <!-------------------------------------------------------------------------------------------------------------------->
    <!-------------------------------------------FOOTER--------------------------------------------------------------------------------------------->
    <?php include 'footer.php'; ?>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>


</html>