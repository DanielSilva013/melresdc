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
            border-color: white;
            border-radius: 0px;
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
            text-align: justify;
            font-size: medium;
            color: white;
        }

        p9 {
            font-family: "avalors";
            text-align: justify;
            font-size: small;
            color: #BABBBC;
        }
        p10{
            font-family: avalors;
            text-align: justify;
            font-size:larger;
            color: white;
        }
        a:hover {
            color: #FFD968;
            background:none;
        }

        a:link {
            color: #FFD968;

        }

        a {
            text-decoration: none;
            text-decoration: #FED969;
        }
        h6 {
            font-family: avalors;
            color: #212529;

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
                        <a href="equipa_principal.php">
                            <p4>Plantel</p4>
                        </a>
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
                        <p3>Resultados</p3>
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
    <!----------------------------------------------JOGOS-------------------------------------------------------------------------------------------------->
    <?php
    $pedido = "SELECT * FROM resultados ORDER BY id";
    $resultado = $ligacao->query($pedido);

    if ($resultado->num_rows > 0) {
        while ($row = $resultado->fetch_assoc()) {
    ?>
            <div class="container mt-2">
                <p></p>
                <div class="row">
                    <div class="col-12 align-self-center">
                        <hr style="background:white">
                    </div>
                </div>
            </div>
            <div class="container mt-3">
                <div class="row">
                    <div class="col-2 align-self-center">
                        <center>
                            <p8>
                                <?php echo $row["data"]; ?>
                            </p8>
                            <p></p>
                            <p8>
                                <?php echo $row["hora"]; ?>
                            </p8>
                        </center>
                    </div>
                    <div class="col-1"></div>
                    <div class="col-2 align-self-center">
                        <center>
                            <img src="<?php echo $row["equipa_casa"]; ?>" style="width: 120px">
                        </center>
                    </div>
                    <div class="col-2 align-self-center">
                        <center>
                            <p10>
                                <?php echo $row["resultado_final"]; ?>
                            </p10>
                        </center>
                    </div>
                    <div class="col-2 align-self-center">
                        <center>
                            <img src="<?php echo $row["equipa_fora"]; ?>" style="width: 120px">
                        </center>
                    </div>
                    <div class="col-3 align-self-center">
                        <center>
                            <p8>
                                <?php echo $row["competicao"]; ?>
                            </p8>
                        </center>
                    </div>
                </div>
                <p></p>
                <div class="row">
                    <div class="col-12 align-self-center">
                        <center>
                            <p9><?php echo $row["local"]; ?></p9>
                        </center>
                    </div>
                </div>
            </div>
    <?php
        }
    }
    ?>
    <div class="container mt-4">
        <div class="row">

        </div>
        <div class="row">
            <div class="col-12">
                <hr style="background:white">
            </div>
        </div>
    </div>

    <!-------------------------------------------FOOTER--------------------------------------------------------------------------------------------->
    <?php include 'footer.php'; ?>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>


</html>