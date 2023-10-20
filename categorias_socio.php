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
            color: white;
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
                        <a href="socios.php">
                            <p4>Inscrição</p4>
                        </a>
                    </p>
                </center>
            </div>
            <div class="col-4">
                <center>
                    <p>
                        <p3>Categorias</p3>
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
    <!------------------------------------------------------------------------------>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">
                                <p4>Categoria</p4>
                                <p></p>
                            </th>
                            <th scope="col">
                                <center>
                                    <p4>Idade</p4>
                                    <p></p>
                                </center>
                            </th>
                            <th scope="col">
                                <center>
                                    <p4>Cartão</p4>
                                    <p></p>
                                </center>
                            </th>
                            <th scope="col">
                                <center>
                                    <p4>Inscrição</p4>
                                    <p></p>
                                </center>
                            </th>
                            <th scope="col">
                                <center>
                                    <p4>Quota</p4>
                                    <p></p>
                                </center>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $pedido = "SELECT * FROM socios";
                        $resultado = $ligacao->query($pedido);

                        if ($resultado->num_rows > 0) {
                            while ($row = $resultado->fetch_assoc()) {
                        ?>
                                <tr>
                                    <td>
                                        <p></p>
                                        <p3><?php echo $row["categoria"]; ?></p3>
                                        <p></p>
                                    </td>
                                    <td>
                                        <center>
                                            <p></p>
                                            <p3><?php echo $row["idade"]; ?></p3>
                                            <p></p>
                                        </center>
                                    </td>
                                    <td>
                                        <center>
                                            <p></p>
                                            <p3><?php echo $row["cartao"]; ?>€</p3>
                                            <p></p>
                                        </center>
                                    </td>
                                    <td>
                                        <center>
                                            <p></p>
                                            <p3><?php echo $row["inscricao"]; ?>€</p3>
                                            <p></p>
                                        </center>
                                    </td>
                                    <td>
                                        <center>
                                            <p></p>
                                            <p3><?php echo $row["quota"]; ?>€</p3>
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
        </div>
    </div>

    <!-------------------------------------------FOOTER--------------------------------------------------------------------------------------------->
    <?php include 'footer.php'; ?>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>


</html>