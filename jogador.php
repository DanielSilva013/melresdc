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

        H1 {
            font-family: avalors;
            text-align: justify;
            font-size: large;
            color: #FFD968;

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

        .titulo {
            display: flex;
            justify-content: center;
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

        p8 {
            color: white;
            font-size: 20px;
            font-family: "LEMON MILK Regular";
            opacity: 70%;
        }

        p9 {
            font-family: avalors;
            text-align: justify;
            font-size: 60px;
            color: #212529;
        }

        p10 {
            font-family: avalors;
            text-align: justify;
            font-size: 20px;
            color: #212529;
            opacity: 80%;
        }

        p11 {
            font-family: avalors;
            text-align: justify;
            font-size: 30px;
            color: #212529;
            opacity: 70%;
        }

        h2 {
            color: white;
            font-size: 50px;
            font-family: avalors;

        }

        .container1 {
            background-image: url(Imagens/Plantel/Banner_Jogador.jpg);
            display: flex;
            flex-direction: row;
            align-items: center;
        }
    </style>
    <!----------------------------------------------------------------------------->
    <div class="container1">
        <?php
        $id = $_GET['id'];
        $pedido = "SELECT * FROM plantel where id = $id";
        $resultado = $ligacao->query($pedido);

        if ($resultado->num_rows > 0) {
            while ($row = $resultado->fetch_assoc()) {
        ?>
                <div class="container">
                    <div class="row">
                        <p></p>
                        <div class="col-8">

                            <P9><?php echo $row["camisola"]; ?>.</P9>
                            <p></p>
                            
                                <P9><?php echo $row["nome"]; ?></P9>
                                <P></P>
                               
                                <P11><?php echo $row["posicao_especifica"]; ?></P11>
                            </center>
                        </div>
                        <div class="col-4">
                            <CENTER>
                                <img src="<?php echo $row["foto_banner"]; ?>">
                            </CENTER>
                        </div>
                    </div>
                </div>
        <?php
            }
        }
        ?>
    </div>
    <!----------------------------------------------------------------------------
    <div class="titulo">
        <h1>JOGADOR DA BOLA</h1>
        <p></p>
    </div>
    <p></p>
    <div class="container mt-2">
        <div class="row">
            <div class="col-4">
            <div class="img-box">
        <img class="img-default" src="Imagens/Plantel/A1.png">
        <img class="img-hover" src="Imagens/Plantel/A11.png" />
    </div>
            </div>
        </div>
    </div>
    --->
    <!-----------------------------------------------DESCRICAO JOGADOR-------------------------------------------------------------------------->
    <div class="container mt-4">
        <?php
        $id = $_GET['id'];
        $pedido = "SELECT * FROM plantel where id = $id";
        $resultado = $ligacao->query($pedido);

        if ($resultado->num_rows > 0) {
            while ($row = $resultado->fetch_assoc()) {
        ?>
                <div class="row">
                    <div class="col-12">
                        <center>

                            <table width="1296px" bgcolor="#FED969" height="40px">

                                <tr>
                                    <td>
                                        <center>
                                            <p></p>
                                            <h6><?php echo ($row['nome']) ?></h6>
                                            <p></p>
                                        </center>
                                    </td>
                                </tr>

                            </table>

                        </center>
                    </div>

                </div>
        <?php
            }
        }
        ?>
    </div>
    <p></p>
    <div class="container mt-3">
        <?php
        $id = $_GET['id'];
        $pedido = "SELECT * FROM plantel where id = $id";
        $resultado = $ligacao->query($pedido);

        if ($resultado->num_rows > 0) {
            while ($row = $resultado->fetch_assoc()) {
        ?>
                <div class="row">
                    <div class="col-12">
                        <p2><?php echo $row["descricao"]; ?></p2>
                    </div>
                </div>
        <?php
            }
        }
        ?>
        <hr>
    </div>
    <P></P>
    <div class="container mt-5">
        <div class="row">
            <div class="col-12">
                <center>

                    <table width="1296px" bgcolor="#FED969" height="40px">

                        <tr>
                            <td>
                                <center>
                                    <p></p>
                                    <h6>Época 22/23</h6>
                                    <p></p>
                                </center>
                            </td>
                        </tr>

                    </table>
                </center>
            </div>
        </div>
    </div>
    <p></p>
    <div class="container mt-3">
        <?php
        $pedido = "SELECT * FROM plantel where id = $id";
        $resultado = $ligacao->query($pedido);

        if ($resultado->num_rows > 0) {
            while ($row = $resultado->fetch_assoc()) {
        ?>
                <div class="row">
                    <div class="col-3">
                        <CENTER>
                            <H2><?php echo $row["jogos"]; ?></H2>
                            <p></p>
                            <p8>Jogos</p8>
                        </CENTER>
                    </div>
                    <div class="col-3">
                        <CENTER>
                            <H2><?php echo $row["minutos"]; ?></H2>
                            <p></p>
                            <p8>Minutos</p8>
                        </CENTER>
                    </div>
                    <div class="col-3">
                        <CENTER>
                            <H2><?php echo $row["golos"]; ?></H2>
                            <p></p>
                            <p8>Golos</p8>
                        </CENTER>
                    </div>
                    <div class="col-3">
                        <CENTER>
                            <H2><?php echo $row["assistencias"]; ?></H2>
                            <p></p>
                            <p8>Assistências</p8>
                        </CENTER>
                    </div>
                    <p></p>

                </div>
                <div class="row">
                    <div class="col-12">
                        <hr>
                    </div>
                </div>
        <?php
            }
        }
        ?>
    </div>
    <P></P>
    <!-------------------------------------------FOOTER--------------------------------------------------------------------------------------------->
    <?php include 'footer.php'; ?>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>


</html>