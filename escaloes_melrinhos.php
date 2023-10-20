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
    <link href="css.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</head>

<body>
    <?php include 'header.php'; ?>
    <!-------------------------------------CSS-------------------------------------------------------------------------------------------------->
    <style>
        p2 {
            font-family: avalors;
            font-size: small;
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
            border-color: white;
            border-radius: 0px;
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

        p6 {
            font-family: avalors;
            font-size: small;
            color: #FED969;
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

        h6 {
            font-family: avalors;
            color: #212529;

        }
    </style>

    <!------------------------------------------------------------------------------------------------------------------------------------------>
    <img src="Imagens/Carrossel/Bandeira_Carrossel.png" width="1900px">
    <p></p>
    <div class="container mt-5">
        <div class="row">
            <div class="col-12">
                <center>
                    <table width="1296px" bgcolor="#FED969" height="40px">
                        <tr>
                            <td>
                                <center>
                                    <p>
                                    <h6>Melrinhos</h6>
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
                        <a href="melrinhos.php">
                            <p4>Inscrição</p4>
                        </a>
                    </p>
                </center>
            </div>
            <div class="col-4">
                <center>
                    <p>

                        <p3>Escalões</p3>
                        </a>
                    </p>
                </center>
            </div>
            <div class="col-4">
                <center>
                    <p>
                        <a href="projeto_melrinhos.php">
                            <p4>O Projeto</p4>
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
    <!---------------------------------------------------------------------------------------------------------------------------------------------->
    <!------------------------------------------------------------------------------------------------------------------------------------------------>
    <center>
        <div class="container mt-5">
            <div class="row">
                <div class="col-2"></div>
                <div class="col-8">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">
                                    <p6>Categoria</p6>
                                    <p></p>
                                </th>
                                <th scope="col">
                                    <center>
                                        <p6>Idades</p6>
                                        <p></p>
                                    </center>
                                </th>
                                <th scope="col">
                                    <center>
                                        <p6>Mensalidade</p6>
                                        <p></p>
                                    </center>
                                </th>
                                <th scope="col">
                                    <center>
                                        <p6>Equipamento</p6>
                                        <p></p>
                                    </center>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $pedido = "SELECT * FROM escaloes";
                            $resultado = $ligacao->query($pedido);

                            if ($resultado->num_rows > 0) {
                                while ($row = $resultado->fetch_assoc()) {
                            ?>
                                    <tr>
                                        <td>
                                            <p></p>
                                            <p2><?php echo $row["categoria"]; ?></p2>
                                            <p></p>
                                        </td>
                                        <td>
                                            <center>
                                                <p></p>
                                                <p2><?php echo $row["idade"]; ?></p2>
                                                <p></p>
                                            </center>
                                        </td>
                                        <td>
                                            <center>
                                                <p></p>
                                                <p2><?php echo $row["mensalidade"]; ?>€</p2>
                                                <p></p>
                                            </center>
                                        </td>
                                        <td style="text-align:right;">
                                            <center>
                                                <p></p>
                                                <p2><?php echo $row["equipamento"]; ?>€</p2>
                                                <p></p>
                                            </center>
                                        </td>
                                    </tr>
                            <?php
                                }
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
                <div class="col-2"></div>
            </div>
        </div>
    </center>
    <!-------------------------------------------FOOTER--------------------------------------------------------------------------------------------->
    <?php include 'footer.php'; ?>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>


</html>