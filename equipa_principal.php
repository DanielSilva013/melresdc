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
            font-family: avalors;
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

        .container {
            position: relative;
        }

        #image1 {
            position: absolute;
        }

        #texto {
            position: absolute;
            font-size: 32px;
            left: 250px;
            top: 135px;
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
                                    <h6>Equipa Principal</h6>
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
                        <p3>Plantel</p3>
                    </p>
                </center>
            </div>
            <div class="col-3">
                <center>
                    <p>
                        <a href="calendario_equipa_principal.php">
                            <p4>Calendário</p4>
                        </a>
                    </p>
                </center>
            </div>
            <div class="col-3">
                <center>
                    <p>
                        <a href="resultados_equipa_principal.php">
                            <p4>Resultados</p4>
                        </a>
                    </p>
                </center>
            </div>
            <div class="col-3">
                <center>
                    <p>
                        <a href="classificacao_equipa_principal.php">
                            <p4>Classificação</p4>
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
    <!----------------------------------------------GUARDA-REDES-------------------------------------------------------------------------------------------------->

    <div class="container mt-2">
        <P></P>
        <div class="row">
            <div class="col-5 align-self-center">
                <hr>
            </div>
            <div class="col-2 align-self-center">
                <center>
                    <P6>Guarda-Redes</P6>
                </center>
            </div>
            <div class="col-5 align-self-center">
                <hr>
            </div>
        </div>

    </div>
    <!------------------------------------------------------------------------------------------------------------------------------------------------>
    <div class="container mt-3">
        <div class="row">
            <?php
            $consulta = "SELECT * FROM guarda_redes ORDER BY id";
            $resultado = $ligacao->query($consulta);

            if ($resultado->num_rows > 0) {
                while ($row = $resultado->fetch_assoc()) {
            ?>
                    <div class="col-3">
                        <a href="guarda_redes.php?id=<?php echo $row['id'] ?>">
                            <div class="img-box">
                                <img class="img-default" src="<?php echo $row["foto"]; ?>" width="100%">
                                <img class="img-hover" src="<?php echo $row["foto_hover"]; ?>"  width="100%">
                            </div>
                        </a>
                    </div>
            <?php
                }
            }

            ?>
        </div>

    </div>
    <div class="container mt-3">
        <div class="row">
            <div class="col-12">
                <hr>
            </div>
        </div>
    </div>
    <!----------------------------------------------------------------------------------------------------------------->
    <p></p>
    <!----------------------------------------------DEFESAS-------------------------------------------------------------------------------------------------->

    <div class="container mt-2">
        <P></P>
        <div class="row">
            <div class="col-5 align-self-center">
                <hr>
            </div>
            <div class="col-2 align-self-center">
                <center>
                    <P6>Defesas</P6>
                </center>
            </div>
            <div class="col-5 align-self-center">
                <hr>
            </div>
        </div>

    </div>
    <!------------------------------------------------------------------------------------------------------------------------------------------------>
    <div class="container mt-3">
        <div class="row">
            <?php
            $consulta = "SELECT * FROM plantel WHERE posicao='defesa' ORDER BY id";
            $resultado = $ligacao->query($consulta);

            if ($resultado->num_rows > 0) {
                while ($row = $resultado->fetch_assoc()) {
            ?>
                    <div class="col-3">
                        <a href="jogador.php?id=<?php echo $row['id'] ?>">
                            <div class="img-box">
                                <img class="img-default" src="<?php echo $row["foto"]; ?>"  width="100%">
                                <img class="img-hover" src="<?php echo $row["foto_hover"]; ?>"  width="100%">
                            </div>
                        </a>
                        <p></p>
                    </div>
            <?php
                }
            }

            ?>
        </div>
    </div>
    <div class="container mt-3">
        <div class="row">
            <div class="col-12">
                <hr>
            </div>
        </div>
    </div>
    <p></p>
    <!----------------------------------------------MÉDIOS-------------------------------------------------------------------------------------------------->

    <div class="container mt-2">
        <P></P>
        <div class="row">
            <div class="col-5 align-self-center">
                <hr>
            </div>
            <div class="col-2 align-self-center">
                <center>
                    <P6>Médios</P6>
                </center>
            </div>
            <div class="col-5 align-self-center">
                <hr>
            </div>
        </div>

    </div>
    <!------------------------------------------------------------------------------------------------------------------------------------------------>
    <div class="container mt-3">
        <div class="row">
            <?php
            $consulta = "SELECT * FROM plantel WHERE posicao='medio' ORDER BY id";
            $resultado = $ligacao->query($consulta);

            if ($resultado->num_rows > 0) {
                while ($row = $resultado->fetch_assoc()) {
            ?>
                    <div class="col-3">
                        <a href="jogador.php?id=<?php echo $row['id'] ?>">
                            <div class="img-box">
                                <img class="img-default" src="<?php echo $row["foto"]; ?>"  width="100%">
                                <img class="img-hover" src="<?php echo $row["foto_hover"]; ?>"  width="100%">
                            </div>
                        </a>
                        <p></p>
                    </div>
            <?php
                }
            }

            ?>
        </div>
    </div>
    <div class="container mt-3">
        <div class="row">
            <div class="col-12">
                <hr>
            </div>
        </div>
    </div>
    <p></p>
    <!----------------------------------------------AVANÇADOS-------------------------------------------------------------------------------------------------->

    <div class="container mt-2">
        <P></P>
        <div class="row">
            <div class="col-5 align-self-center">
                <hr>
            </div>
            <div class="col-2 align-self-center">
                <center>
                    <P6>Avançados</P6>
                </center>
            </div>
            <div class="col-5 align-self-center">
                <hr>
            </div>
        </div>

    </div>
    <!------------------------------------------------------------------------------------------------------------------------------------------------>
    <div class="container mt-3">
        <div class="row">
            <?php
            $consulta = "SELECT * FROM plantel WHERE posicao='avancado' ORDER BY id";
            $resultado = $ligacao->query($consulta);

            if ($resultado->num_rows > 0) {
                while ($row = $resultado->fetch_assoc()) {
            ?>
                    <div class="col-3">
                        <a href="jogador.php?id=<?php echo $row['id'] ?>">
                            <div class="img-box">
                                <img class="img-default" src="<?php echo $row["foto"]; ?>"  width="100%">
                                <img class="img-hover" src="<?php echo $row["foto_hover"]; ?>"  width="100%">
                            </div>
                        </a>
                        <p></p>
                    </div>
            <?php
                }
            }

            ?>
        </div>
    </div>
    <div class="container mt-3">
        <div class="row">
            <div class="col-12">
                <hr>
            </div>
        </div>
    </div>
    <p></p>
    <!----------------------------------------------EQUIPA TÉCNICA-------------------------------------------------------------------------------------------------->

    <div class="container mt-2">
        <P></P>
        <div class="row">
            <div class="col-5 align-self-center">
                <hr>
            </div>
            <div class="col-2 align-self-center">
                <center>
                    <P6>Equipa Técnica</P6>
                </center>
            </div>
            <div class="col-5 align-self-center">
                <hr>
            </div>
        </div>

    </div>
    <!------------------------------------------------------------------------------------------------------------------------------------------------>
    <div class="container mt-3">
        <div class="row">
            <?php
            $consulta = "SELECT * FROM plantel WHERE posicao='treinador' ORDER BY id";
            $resultado = $ligacao->query($consulta);

            if ($resultado->num_rows > 0) {
                while ($row = $resultado->fetch_assoc()) {
            ?>
                    <div class="col-3">
                        <div class="img-box">
                            <img class="img-default" src="<?php echo $row["foto"]; ?>"  width="100%">
                            <img class="img-hover" src="<?php echo $row["foto_hover"]; ?>"  width="100%">
                        </div>
                        <p></p>
                    </div>
            <?php
                }
            }

            ?>
        </div>
    </div>
    <div class="container mt-3">
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