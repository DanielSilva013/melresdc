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

<body">
    <?php include 'header.php'; ?>
    <!---------------------------------------------------------------------------------------------------------------->
    <style>
        p2 {
            font-family: "LEMON MILK Regular";
            text-align: justify;
            font-size: larger;
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

        p10 {
            font-family: avalors;
            text-align: justify;
            font-size: larger;
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
    <!-------------------------------------------NAVEGAÇÃO---------------------------------------------------------------------->
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
                        <a href="resultados_equipa_principal.php">
                            <p4>Resultados</p4>
                        </a>
                    </p>
                </center>
            </div>
            <div class="col-3">
                <center>
                    <p>

                        <p3>Classificação</p3>

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
    <p></p>
    <!----------------------------------------------------------------------------------------------------------------->
    <div class="container">
        <div class="row">
            <div class="col-12">
                <center>
                <img src="Imagens/Classificação/AFPorto.png" width="150px">
                <p></p>
                <p10>AF Porto 2ª Divisão</p10>
                </center>
            </div>
        </div>
    </div>
    <p></p>
    <!-----------------------------------------------TABELA---------------------------------------------------------------->
    <div class="container mt-4">
        <div class="row">
                <div class="col-12">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col-1"><center><p8>Posição</p8></center></th>
                      
                                <th scope="col-4"><center><p8>Clube</p8></center></th>
                                <th scope="col-1"></th>
                                <th scope="col-1"><center><p8>PTS</p8></center></th>
                                <th scope="col-1"><center><p8>J</p8></center></th>
                                <th scope="col-1"><center><p8>V</p8></center></th>
                                <th scope="col-1"><center><p8>E</p8></center></th>
                                <th scope="col-1"><center><p8>D</p8></center></th>
                                <th scope="col-1"><center><p8>GM</p8></center></th>
                                <th scope="col-1"><center><p8>GS</p8></center></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $pedido = "SELECT * FROM classificacao ORDER BY pontos DESC";
                            $resultado = $ligacao->query($pedido);

                            if ($resultado->num_rows > 0) {
                                while ($row = $resultado->fetch_assoc()) {
                            ?>
                                    <tr>
                                        <p></p>
                                        <th scope="row"><p></p><center><p2><?php echo $row["id"]; ?></p2></center><p></p></th>
                                        <td><p></p><center><img src="<?php echo $row["logotipo"]; ?>" alt="..." width="50px"></center><p></p></td>
                                        <td><p></p><p2><?php echo $row["nome"];?></p2><p></p></td>
                                        <td><p></p><center><p2><?php echo $row["pontos"]; ?></p2></center><p></p></td>
                                        <td><p></p><center><p2><?php echo $row["jogos"]; ?></p2></center><p></p></td>
                                        <td><p></p><center><p2><?php echo $row["vitorias"]; ?></p2></center><p></p></td>
                                        <td><p></p><center><p2><?php echo $row["empates"]; ?></p2></center><p></p></td>
                                        <td><p></p><center><p2><?php echo $row["derrotas"]; ?></p2></center><p></p></td>
                                        <td><p></p><center><p2><?php echo $row["golos_marcados"]; ?></p2></center><p></p></td>
                                        <td><p></p><center><p2><?php echo $row["golos_sofridos"]; ?></p2></center><p></p></td>
                                    </tr>
                            <?php
                                }
                            }
                            ?>
                        </tbody>
                    </table>
                </div>

        </div>
    </div>

    <!----------------------------------------------------------------------------------------------------------------->

    <?php include 'footer.php'; ?>
    </body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    </body>

</html>