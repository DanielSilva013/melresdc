<?php
include_once("ligacao.php");
session_start();

if (!isset($_SESSION['userEmail']) or !isset($_SESSION['userPasswd'])) {
    header("Location: login.php");
}
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
    <link href="css.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</head>

<body>
    <?php include 'header_conta.php'; ?>
    <!----------------------------------------------------------------------------------------------------------------------->

    <style>
        p2 {
            font-family: "avalors";
            text-align: justify;
            font-size: x-small;
            color: #212529;
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

        a:hover {
            background: none;
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

        .imagemutilizador {
            border-color: white;
            border-radius: 50%;
        }

        H3 {
            color: white;
        }

        H4 {
            color: white;
            font-family: avalors;
        }

        button {
            padding: 10px 20px;
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

        p15 {
            font-family: "avalors";
            text-align: justify;
            font-size: medium;
            color: #FED969;
        }

        p10 {
            font-family: avalors;
            text-align: justify;
            font-size: small;
            color: #212529;
        }



        h8 {
            color: #212529;
        }

        .button1 {
            padding: 10px 56px;
            background-color: #364B40;
        }

        .button1 p2 {
            color: #70CE77;
            font-family: avalors;
            font-size: x-small;
        }

        .button2 {

            background-color: #FED969;
        }

        .button2 p2 {
            color: #212529;
            font-family: avalors;
            font-size: x-small;
        }

        /*--------------------------------------------BOTAO 5--------------------------------------------*/
        .button5 {
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

        .button5:before {
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

        .button5:hover,
        .button5:focus,
        .button5:active {
            color: #212529;
        }

        .button5:hover:before,
        .button5:focus:before,
        .button5:active:before {
            -webkit-transform: scaleY(1);
            transform: scaleY(1);
        }

        .button5 h8 {
            color: #FED969;
            font-family: avalors;
        }

        button:hover h8 {
            color: #212529;
            font-family: avalors;
        }
    </style>
    <?php
    $id = $_GET['id'];
    $consulta = "SELECT * FROM utilizador where id = $id";
    $resultado = $ligacao->query($consulta);

    if ($resultado->num_rows > 0) {
        while ($row = $resultado->fetch_assoc()) {
    ?>
            <!-----------------------------------------------------------TÍTULO----------------------------------------------------------------------->
            <div style="background: url(Imagens/Plantel/Banner_Jogador.jpg) ; padding:50px;">
                <center>
                    <p10 class="display-4">OLÁ <?php echo $row["nome"]; ?>!</p10>
                </center>
            </div>
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
                                            <h6>Perfil</h6>
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
            <!-----------------------------------------------NAVEGAÇÃO---------------------------------------------------------->
            <div class="container mt-4">
                <div class="row">
                    <div class="col-3">
                        <center>
                            <p>
                                <a href="conta.php">
                                    <p4>INFORMAÇÕES PESSOAIS</p4>
                                </a>

                            </p>
                        </center>
                    </div>
                    <div class="col-3">
                        <center>
                            <p>
                                <a href="dados_de_acesso.php?id=<?php echo $row['id'] ?>">
                                    <p4>Dados de Acesso</p4>
                                </a>
                            </p>
                        </center>
                    </div>
                    <div class="col-3">
                        <center>
                            <p>
                                <p3>ENCOMENDAS</p3>
                            </p>
                        </center>
                    </div>
                    <div class="col-3">
                        <center>
                            <p>
                                <a href="quotas.php?id=<?php echo $row['id'] ?>">
                                    <p4>Quotas de Sócio</p4>
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

            <!-----------------------------------------------TABELA---------------------------------------------------------------->
            <div class="container mb-4">
                <div class="row">
                    <div class="col-12">
                        <table class="table table" align="center">
                            <thead>
                                <tr>
                                    <th width="25%">
                                        <p8>ENCOMENDA</p8>
                                    </th>
                                    <th width="25%">
                                        <center>
                                            <p8>ESTADO</p8>
                                        </center>
                                    </th>
                                    <th width="10%">
                                        <center>
                                            <p8>PREÇO</p8>
                                        </center>
                                    </th>
                                    <th width="30%">
                                        <center>
                                            <p8>PRODUTOS</p8>
                                        </center>
                                    </th>
                                    <th width="10%">
                                        <center>
                                            <p8>Fatura</p8>
                                        </center>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $id = $_GET['id'];
                                $pedido = "SELECT * FROM encomendas where id_utilizador = $id AND estado = 'em processamento' ";
                                $resultado = $ligacao->query($pedido);

                                if ($resultado->num_rows > 0) {
                                    while ($row = $resultado->fetch_assoc()) {
                                ?>
                                        <tr>
                                            <p></p>
                                            <td style="vertical-align: middle">
                                                <p></p>
                                                <p15>Encomenda Nº <?php echo $row["encomenda"]; ?></p15>
                                                <br>
                                                <p9>Realizada a <?php echo $row["data"]; ?></p9>
                                                <p></p>
                                            </td>
                                            <td style="vertical-align: middle">
                                                <p></p>
                                                <center>
                                                    <button class="button2" style="border-radius: 0px;" disabled>
                                                        <font size="2">
                                                            <p2><?php echo $row["estado"]; ?></p2>
                                                        </font>
                                                    </button>
                                                </center>
                                                <p></p>
                                            </td>
                                            <td style="vertical-align: middle">
                                                <center>
                                                    <p></p>
                                                    <p15><?php echo $row["preco"]; ?>€</p15>
                                                    <p></p>
                                                </center>
                                            </td>
                                            <td style="vertical-align: middle">
                                                <center>
                                                    <p></p>
                                                    <img src="<?php echo $row['foto']?>" width="100px" style="border-radius: 0px;">
                                                    <p></p>
                                                </center>
                                            </td>
                                            <td style="vertical-align: middle">
                                                <center>
                                                    <a href="Fatura_Encomenda_Melres_DC.pdf" download="Fatura_Encomenda_Melres_DC">
                                                        <button class="button5" style="border-radius: 0px;">
                                                            <h8>Download</h8>
                                                        </button>
                                                    </a>
                                                    <p></p>
                                                </center>
                                            </td>
                                        </tr>

                                <?php
                                    }
                                }
                                ?>
                            </tbody>
                            <tbody>
                                <?php
                                $id = $_GET['id'];
                                $pedido = "SELECT * FROM encomendas where id_utilizador = $id AND estado = 'concluído' ";
                                $resultado = $ligacao->query($pedido);

                                if ($resultado->num_rows > 0) {
                                    while ($row = $resultado->fetch_assoc()) {
                                ?>
                                        <tr>
                                            <p></p>
                                            <td style="vertical-align: middle">
                                                <p></p>
                                                <p15><?php echo $row["encomenda"]; ?></p15>
                                                <br>
                                                <p9><?php echo $row["data"]; ?></p9>
                                                <p></p>
                                            </td>
                                            <td style="vertical-align: middle">
                                                <p></p>
                                                <center>
                                                    <button style="border-radius: 0px;" class="button1" disabled>
                                                        <font size="2">
                                                            <p2><?php echo $row["estado"]; ?></p2>
                                                        </font>
                                                    </button>
                                                </center>
                                                <p></p>
                                            </td>
                                            <td style="vertical-align: middle">
                                                <center>
                                                    <p></p>
                                                    <p15><?php echo $row["preco"]; ?>€</p15>
                                                    <p></p>
                                                </center>
                                            </td>
                                            <td style="vertical-align: middle">
                                                <center>
                                                    <p></p>
                                                    <img src="<?php echo $row["foto"]; ?>" alt="..." width="100px" style="border-radius: 0px;">
                                                    <p></p>
                                                </center>
                                            </td>
                                            <td style="vertical-align: middle">
                                                <center>
                                                    <a href="Fatura_Encomenda_Melres_DC.pdf" download="Fatura_Encomenda_Melres_DC">
                                                        <button class="button5" style="border-radius: 0px;">
                                                            <h8>Download</h8>
                                                        </button>
                                                    </a>
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
    <?php
        }
    } else {
        echo "Sem resultados...";
    }
    ?>
    <!----------------------------------------------------------------------------------------------------------------->
    <p></p>
    <!------------------------------------------------------------------------------------------------------------------------------------------------->
    <?php include 'footer.php'; ?>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>

</html>