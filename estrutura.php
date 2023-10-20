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
    <img src="Imagens/Carrossel/Bandeira_Carrossel.png" width="1900px">
    <!----------------------------------------------------------------------------------------------------------------->
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
                                    <h6>Estrutura</h6>
                                    </p>
                                </center>
                            </td>
                        </tr>
                    </table>
                </center>
            </div>
        </div>
    </div>
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

        button {
            background-color: #FED969;
            padding: 10px 20px;
            border: none;
            border-radius: 15px;

        }

        h8 {
            font-family: avalors;
            color: #212529;
        }

        .card {
            background-color: #212529;
            border-color: #FFD968;
            border-radius: 0px;
        }
        h6 {
            color: #212529;
            font-family: avalors;
        }
    </style>
    <!--------------------------------Cards-------------------------------------------------------------------->
    <p></p>
    <p></p>
    <p></p>
    <div class="container mt-4">
        <div class="row">
            <?php
            $pedido = "SELECT * FROM estrutura ORDER BY id";
            $resultado = $ligacao->query($pedido);

            if ($resultado->num_rows > 0) {
                while ($row = $resultado->fetch_assoc()) {
            ?>
                    <div class="col-4 align-self-center">
                        <div class="card mb-3">
                            <img src="Imagens/Estrutura/<?php echo $row["foto"]; ?>" style="width:100%">

                            <div class="container mt-2">
                                <p></p>
                                <center>
                                    <p1><b><?php echo $row["nome"]; ?></b></p1>
                                </center>
                                <p></p>
                                <center>
                                    <p2><?php echo $row["cargo"]; ?></p2>
                                </center>
                                <p></p>
                            </div>
                        </div>
                    </div>
            <?php
                }
            }
            ?>

        </div>
    </div>
    <p></p>
    <!----------------------------------------------------------------------------------------------------------------->
    <?php include 'footer.php'; ?>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    </body>


</html>