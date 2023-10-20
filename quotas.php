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
            font-size: small;
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

        p16 {
            font-family: avalors;
            text-align: justify;
            font-size: medium;
            color: #BABBBC;
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

        .imagemutilizador {
            border-color: #FED969;
            border-radius: 50%;
        }

        H3 {
            color: white;
            font-family: avalors;
        }

        H4 {
            color: #FED969;
            font-family: avalors;
        }

        button {
            background-color: #364B40;
            padding: 10px 80px;
            border: none;
            border-radius: 15px;

        }

        p8 {
            font-family: avalors;
            text-align: justify;
            font-size: medium;
            color: #FFD968;
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
            font-size: medium;
            color: white;
        }

        p11 {
            font-family: "avalors";
            text-align: justify;
            font-size: medium;
            color: white;
        }


        h8 {
            color: #212529;
        }

        h6 {
            color: #212529;
            font-family: avalors;
        }

        /*--------------------------------------------BOTAO 1--------------------------------------------*/
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

        .button1:hover h8 {
            color: #212529;
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
            font-family: avalors;
        }

        .button2 {
            padding: 10px 56px;
            background-color: #FB4949;

        }

        p15 {
            font-family: avalors;
            text-align: justify;
            font-size: medium;
            color: #212529;
        }
    </style>

    <!-----------------------------------------------------------TÍTULO----------------------------------------------------------------------->

    <div class="container">
        <div class="row">
            <div class="col-12">
                <center>
                    <?php
                    $id = $_SESSION['userId'];
                    $pedido = "SELECT * FROM utilizador WHERE id=$id and socio = 'true' ";
                    $resultado = $ligacao->query($pedido);

                    if ($resultado->num_rows > 0) {
                        while ($row = $resultado->fetch_assoc()) {
                    ?>
                    <?php
                        }
                    }
                    ?>
                </center>
            </div>
        </div>
    </div>
    <?php
    $pedido = "SELECT * FROM utilizador WHERE id=$id";
    $resultado = $ligacao->query($pedido);

    if ($resultado->num_rows > 0) {
        while ($row = $resultado->fetch_assoc()) {
    ?>
            <div style="background: url(Imagens/Plantel/Banner_Jogador.jpg) ; padding:50px;">
                <center>
                    <p15 class="display-4">OLÁ <?php echo $row["nome"]; ?>!</p15>
                </center>
            </div>
    <?php
        }
    }
    ?>
    <p></p>
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
            <?php
            $consulta = "SELECT * FROM utilizador WHERE id=$id";
            $resultado = $ligacao->query($consulta);

            if ($resultado->num_rows > 0) {
            ?>
                <?php
                while ($row = $resultado->fetch_assoc()) {
                ?>
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
                                <a href="encomendas.php?id=<?php echo $row['id'] ?>">
                                    <p4>ENCOMENDAS</p4>
                                </a>
                            </p>
                        </center>
                    </div>
                    <div class="col-3">
                        <center>
                            <p>
                                <p3>QUOTAS DE SÓCIO</p3>
                            </p>
                        </center>
                    </div>
            <?php
                }
            }
            ?>
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
    <?php
    $pedido = "SELECT * FROM utilizador WHERE id=$id and socio = 'true' ";
    $resultado = $ligacao->query($pedido);

    if ($resultado->num_rows > 0) {
        while ($row = $resultado->fetch_assoc()) {
    ?>
            <!--------------------------------------CATEGORIA------------------------------------------------------------->
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <hr>
                    </div>
                </div>
            </div>
            <div class="container mt-3">
                <div class="row">
                    <div class="col-12">
                        <?php
                        $pedido = "SELECT * FROM utilizador WHERE id=$id and socio = 'true' ";
                        $resultado = $ligacao->query($pedido);

                        if ($resultado->num_rows > 0) {
                            while ($row = $resultado->fetch_assoc()) {
                        ?>
                                <p8>CATEGORIA DE ADESÃO: </p8>
                                <p10><?php echo $row["categoria_socio"]; ?></p10>
                        <?php
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>
            <div class="container mt-3">
                <div class="row">
                    <div class="col-12">
                        <hr>
                    </div>
                </div>
            </div>
            <!------------------------------------------------------------------------------------------------------------------------------------------------->
            <div class="container mt-4">
                <div class="row">
                    <div class="col-12">
                        <table class="table table" align="center">
                            <thead>
                                <tr>
                                    <th scope="colspan-4" width="25%">
                                        <p8>MENSALIDADE</p8>
                                    </th>
                                    <th scope="colspan-3" width="25%">
                                        <center>
                                            <p8>ESTADO</p8>
                                        </center>
                                    </th>
                                    <th scope="colspan-1" width="25%">
                                        <center>
                                            <p8>QUOTA</p8>
                                        </center>
                                    </th>
                                    <th scope="colspan-4" width="25%">
                                        <center>
                                            <p8>AÇÕES</p8>
                                        </center>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $pedido = "SELECT * FROM quotas where user_id = $id and estado = 'por pagar' ";
                                $resultado = $ligacao->query($pedido);

                                if ($resultado->num_rows > 0) {
                                    while ($row = $resultado->fetch_assoc()) {
                                ?>
                                        <tr>
                                            <p></p>
                                            <td style="vertical-align: middle">
                                                <p></p>
                                                <p10><?php echo $row["mensalidade"]; ?></p10>
                                                <p></p>
                                            <td style="vertical-align: middle">
                                                <p></p>
                                                <center>
                                                    <button style="border-radius: 0px;" class="btn-danger button2" disabled>
                                                        <h8>
                                                            <font size="2">
                                                                <p2 style="color: #F6C7C7"><?php echo $row["estado"]; ?></p2>
                                                            </font>
                                                        </h8>

                                                    </button>
                                                </center>
                                                <p></p>
                                            </td>
                                            <td style="vertical-align: middle">
                                                <p></p>
                                                <center>
                                                    <p10><?php echo $row["quota"]; ?>€</p10>
                                                </center>
                                                <p></p>
                                            </td>
                                            <td style="vertical-align: middle">
                                                <p></p>
                                                <center>
                                                <a href="pagamento_quota.php">
                                                    <button style="border-radius: 0px;" class="button1">
                                                        <h8>
                                                        <font size="2">
                                                               EFETUAR PAGAMENTO  
                                                        </font>
                                                        </h8>
                                                    </button>
                                                </a>
                                                </center>
                                                <p></p>
                                            </td>
                                        </tr>
                                <?php
                                    }
                                }
                                ?>

                                <?php
                                $pedido = "SELECT * FROM quotas where user_id = $id and estado = 'pago' order by id desc";
                                $resultado = $ligacao->query($pedido);

                                if ($resultado->num_rows > 0) {
                                    while ($row = $resultado->fetch_assoc()) {
                                ?>
                                        <tr>
                                            <p></p>
                                            <td style="vertical-align: middle">
                                                <p></p>
                                                <p10><?php echo $row["mensalidade"]; ?></p10>
                                                <p></p>
                                            <td style="vertical-align: middle">
                                                <p></p>
                                                <center>
                                                    <button style="border-radius: 0px;" disabled>

                                                        <h8>
                                                            <font size="2">
                                                                <p2 style="color:#70CE77"><?php echo $row["estado"]; ?></p2>
                                                            </font>
                                                        </h8>

                                                    </button>
                                                </center>
                                                <p></p>
                                            </td>
                                            <td style="vertical-align: middle">
                                                <p></p>
                                                <center>
                                                    <p10><?php echo $row["quota"]; ?>€</p10>
                                                </center>
                                                <p></p>
                                            </td>
                                            <td style="vertical-align: middle">
                                                <p></p>
                                                <center>
                                      
                                                    <button style="border-radius: 0px;" class="btn button1" disabled data-bs-toggle="button" autocomplete="off">
                                                        <h8>
                                                            <font size="2">
                                                                <p2 style="color:#FED969">EFETUAR PAGAMENTO</p2>
                                                            </font>
                                                        </h8>
                                                    </button>
                                             
                                                </center>
                                                <p></p>
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
        echo ("<center><img src= 'Imagens/Admin/Erro.png' width='20%'><p></p><p16>Ups, Você NÃO TEM CONTA DE SÓCIO.</p16><p></p><a a href='socios.php'><button class='button1'><h8>Quero ser sócio</h8></button></a></center>");
    }
    ?>
    <!--------------------------------------------------------------------------------------------------------------------------------->
    <?php include 'footer.php'; ?>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>

</html>