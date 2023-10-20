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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</head>

<body>
    <?php include 'header.php'; ?>
    <!--------------------------------------------------IMG------------------------------------------------------------>
    <img src="Imagens/Carrossel/Bandeira_Carrossel.png" width="100%">

    <!----------------------------------------------------------------------------------------------------------------->
    <p></p>
    <div class="container mt-5">
        <div class="row">
            <div class="col-12">
                <center>
                    <table width="1296px" bgcolor="#FED969" height="40px">
                        <tr>
                            <td>
                                <center>
                                    <p></p>
                                    <h6>História</h6>
                                    <p></p>
                                </center>
                            </td>
                        </tr>
                    </table>
                </center>
            </div>
        </div>
    </div>
    <!------------------------------------------------------------------------------------------------------------------>
    <style>
        p2 {
            font-family: avalors;
            text-align: justify;
            font-size: medium;
            color: #FFD968;
        }

        p3 {
            font-family: "LEMON MILK Regular";
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

        p6 {
            font-family: "LEMON MILK Regular";
            font-size: small;
            color: #BABBBC;
            text-align: justify;
        }

        hr {
            width: 100%;
            background: #ffe18d;
            height: 5px;
        }

        h6 {
            font-family: avalors;
            color: #212529;
        }

        p7 {
            font-family: "LEMON MILK Regular";
            font-size: medium;
            color: white;
            text-align: justify;
        }
    </style>
    <!---------------------------------------------------------------1ST--------------------------------------------------->
    <div class="container mt-4">
        <div class="row">
            <div class="col-12">
                <p7>
                    O Melres DC é um clube modesto de futebol fundado em 1 de fevereiro de 1972, localizado na pequena vila de Melres, no norte de Portugal. Desde a sua fundação, o clube sempre foi um símbolo de perseverança e dedicação, lutando incansavelmente para alcançar o sucesso nos campos de futebol.
                    <p></p>
                    Embora não tenha tido um começo fácil, com recursos limitados e poucos jogadores, o Melres DC rapidamente se tornou uma parte integral da comunidade local, ganhando o respeito e o apoio dos habitantes de Melres e das áreas circundantes.
                    <p></p>
                    A equipa começou a competir em ligas amadoras e torneios locais, e embora nem sempre tenha conseguido vencer, a sua paixão e espírito de equipa nunca diminuíram. Com o tempo, o clube começou a evoluir e a atrair jogadores talentosos que partilhavam a mesma paixão pelo futebol e pelo clube.
                    <p></p>
                    Nos últimos anos, o Melres DC tem tido um desempenho impressionante em competições regionais e nacionais, provando que o seu sucesso não se deve apenas à determinação, mas também à habilidade e ao talento dos seus jogadores. Apesar de ser um clube modesto, o Melres DC continua a inspirar a comunidade local com o seu compromisso com o futebol e com a ambição de alcançar a excelência em tudo o que faz.
                </p7>
                <hr>
            </div>
        </div>
    </div>
    <!------------------------------------------------------------------------------------------------------------------>
    <?php
    $pedido = "SELECT * FROM historia WHERE id='12'";
    $resultado = $ligacao->query($pedido);

    if ($resultado->num_rows > 0) {
        while ($row = $resultado->fetch_assoc()) {
    ?>
            <div class="container mt-4">
                <div class="row">
                    <div class="col-12">
                        <center>

                            <table width="1296px" bgcolor="#FED969" height="40px">

                                <tr>
                                    <td>
                                        <center>
                                            <p></p>
                                            <h6><?php echo $row["ano"]; ?></h6>
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
            <!-------------------------------------------------------------->

            <div class="container mt-3">
                <div class="row">
                    <div class="col-7">
                        <p4>
                            <?php echo $row["titulo"]; ?> </p4>
                        <p></p>
                        <p3>
                            <?php echo $row["descricao"]; ?>
                        </p3>
                    </div>
                    <div class="col-5">
                        <img src="Imagens/História/<?php echo $row["foto"]; ?>" style="width:100%">
                    </div>
                    <div class="container mt-1">
                        <div class="row">
                            <div class="col-12">
                                <hr>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
    <?php
        }
    }

    ?>
    <?php
    $pedido = "SELECT * FROM historia WHERE id='11'";
    $resultado = $ligacao->query($pedido);

    if ($resultado->num_rows > 0) {
        while ($row = $resultado->fetch_assoc()) {
    ?>
            <div class="container mt-4">
                <div class="row">
                    <div class="col-12">
                        <center>

                            <table width="1296px" bgcolor="#FED969" height="40px">

                                <tr>
                                    <td>
                                        <center>
                                            <p></p>
                                            <h6><?php echo $row["ano"]; ?></h6>
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
            <!-------------------------------------------------------------->

            <div class="container mt-3">
                <div class="row">

                    <div class="col-5">
                        <img src="Imagens/História/<?php echo $row["foto"]; ?>" style="width:100%">
                    </div>
                    <div class="col-7">
                        <p4>
                            <?php echo $row["titulo"]; ?> </p4>
                        <p></p>
                        <p3>
                            <?php echo $row["descricao"]; ?>
                        </p3>
                    </div>
                    <div class="container mt-1">
                        <div class="row">
                            <div class="col-12">
                                <hr>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
    <?php
        }
    }

    ?>
    <!--------------------------->
    <!------------------------------------------------------------------------------------------------------------------>
    <?php
    $pedido = "SELECT * FROM historia WHERE id='10'";
    $resultado = $ligacao->query($pedido);

    if ($resultado->num_rows > 0) {
        while ($row = $resultado->fetch_assoc()) {
    ?>
            <div class="container mt-4">
                <div class="row">
                    <div class="col-12">
                        <center>

                            <table width="1296px" bgcolor="#FED969" height="40px">

                                <tr>
                                    <td>
                                        <center>
                                            <p></p>
                                            <h6><?php echo $row["ano"]; ?></h6>
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
            <!-------------------------------------------------------------->

            <div class="container mt-3">
                <div class="row">
                    <div class="col-7">
                        <p4>
                            <?php echo $row["titulo"]; ?> </p4>
                        <p></p>
                        <p3>
                            <?php echo $row["descricao"]; ?>
                        </p3>
                    </div>
                    <div class="col-5">
                        <img src="Imagens/História/<?php echo $row["foto"]; ?>" style="width:100%">
                    </div>
                    <div class="container mt-1">
                        <div class="row">
                            <div class="col-12">
                                <hr>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
    <?php
        }
    }

    ?>
    <?php
    $pedido = "SELECT * FROM historia WHERE id='9'";
    $resultado = $ligacao->query($pedido);

    if ($resultado->num_rows > 0) {
        while ($row = $resultado->fetch_assoc()) {
    ?>
            <div class="container mt-4">
                <div class="row">
                    <div class="col-12">
                        <center>

                            <table width="1296px" bgcolor="#FED969" height="40px">

                                <tr>
                                    <td>
                                        <center>
                                            <p></p>
                                            <h6><?php echo $row["ano"]; ?></h6>
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
            <!-------------------------------------------------------------->

            <div class="container mt-3">
                <div class="row">

                    <div class="col-5">
                        <img src="Imagens/História/<?php echo $row["foto"]; ?>" style="width:100%">
                    </div>
                    <div class="col-7">
                        <p4>
                            <?php echo $row["titulo"]; ?> </p4>
                        <p></p>
                        <p3>
                            <?php echo $row["descricao"]; ?>
                        </p3>
                    </div>
                    <div class="container mt-1">
                        <div class="row">
                            <div class="col-12">
                                <hr>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
    <?php
        }
    }

    ?>
    <!--------------------------->
    <!------------------------------------------------------------------------------------------------------------------>
    <?php
    $pedido = "SELECT * FROM historia WHERE id='8'";
    $resultado = $ligacao->query($pedido);

    if ($resultado->num_rows > 0) {
        while ($row = $resultado->fetch_assoc()) {
    ?>
            <div class="container mt-4">
                <div class="row">
                    <div class="col-12">
                        <center>

                            <table width="1296px" bgcolor="#FED969" height="40px">

                                <tr>
                                    <td>
                                        <center>
                                            <p></p>
                                            <h6><?php echo $row["ano"]; ?></h6>
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
            <!-------------------------------------------------------------->

            <div class="container mt-3">
                <div class="row">
                    <div class="col-7">
                        <p4>
                            <?php echo $row["titulo"]; ?> </p4>
                        <p></p>
                        <p3>
                            <?php echo $row["descricao"]; ?>
                        </p3>
                    </div>
                    <div class="col-5">
                        <img src="Imagens/História/<?php echo $row["foto"]; ?>" style="width:100%">
                    </div>
                    <div class="container mt-1">
                        <div class="row">
                            <div class="col-12">
                                <hr>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
    <?php
        }
    }

    ?>
    <?php
    $pedido = "SELECT * FROM historia WHERE id='7'";
    $resultado = $ligacao->query($pedido);

    if ($resultado->num_rows > 0) {
        while ($row = $resultado->fetch_assoc()) {
    ?>
            <div class="container mt-4">
                <div class="row">
                    <div class="col-12">
                        <center>

                            <table width="1296px" bgcolor="#FED969" height="40px">

                                <tr>
                                    <td>
                                        <center>
                                            <p></p>
                                            <h6><?php echo $row["ano"]; ?></h6>
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
            <!-------------------------------------------------------------->

            <div class="container mt-3">
                <div class="row">

                    <div class="col-5">
                        <img src="Imagens/História/<?php echo $row["foto"]; ?>" style="width:100%">
                    </div>
                    <div class="col-7">
                        <p4>
                            <?php echo $row["titulo"]; ?> </p4>
                        <p></p>
                        <p3>
                            <?php echo $row["descricao"]; ?>
                        </p3>
                    </div>
                    <div class="container mt-1">
                        <div class="row">
                            <div class="col-12">
                                <hr>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
    <?php
        }
    }

    ?>
    <!--------------------------->
    <!------------------------------------------------------------------------------------------------------------------>
    <?php
    $pedido = "SELECT * FROM historia WHERE id='6'";
    $resultado = $ligacao->query($pedido);

    if ($resultado->num_rows > 0) {
        while ($row = $resultado->fetch_assoc()) {
    ?>
            <div class="container mt-4">
                <div class="row">
                    <div class="col-12">
                        <center>

                            <table width="1296px" bgcolor="#FED969" height="40px">

                                <tr>
                                    <td>
                                        <center>
                                            <p></p>
                                            <h6><?php echo $row["ano"]; ?></h6>
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
            <!-------------------------------------------------------------->

            <div class="container mt-3">
                <div class="row">
                    <div class="col-7">
                        <p4>
                            <?php echo $row["titulo"]; ?> </p4>
                        <p></p>
                        <p3>
                            <?php echo $row["descricao"]; ?>
                        </p3>
                    </div>
                    <div class="col-5">
                        <img src="Imagens/História/<?php echo $row["foto"]; ?>" style="width:100%">
                    </div>
                    <div class="container mt-1">
                        <div class="row">
                            <div class="col-12">
                                <hr>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
    <?php
        }
    }

    ?>
    <?php
    $pedido = "SELECT * FROM historia WHERE id='5'";
    $resultado = $ligacao->query($pedido);

    if ($resultado->num_rows > 0) {
        while ($row = $resultado->fetch_assoc()) {
    ?>
            <div class="container mt-4">
                <div class="row">
                    <div class="col-12">
                        <center>

                            <table width="1296px" bgcolor="#FED969" height="40px">

                                <tr>
                                    <td>
                                        <center>
                                            <p></p>
                                            <h6><?php echo $row["ano"]; ?></h6>
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
            <!-------------------------------------------------------------->

            <div class="container mt-3">
                <div class="row">

                    <div class="col-5">
                        <img src="Imagens/História/<?php echo $row["foto"]; ?>" style="width:100%">
                    </div>
                    <div class="col-7">
                        <p4>
                            <?php echo $row["titulo"]; ?> </p4>
                        <p></p>
                        <p3>
                            <?php echo $row["descricao"]; ?>
                        </p3>
                    </div>
                    <div class="container mt-1">
                        <div class="row">
                            <div class="col-12">
                                <hr>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
    <?php
        }
    }

    ?>
    <!--------------------------->
    <!------------------------------------------------------------------------------------------------------------------>
    <?php
    $pedido = "SELECT * FROM historia WHERE id='4'";
    $resultado = $ligacao->query($pedido);

    if ($resultado->num_rows > 0) {
        while ($row = $resultado->fetch_assoc()) {
    ?>
            <div class="container mt-4">
                <div class="row">
                    <div class="col-12">
                        <center>

                            <table width="1296px" bgcolor="#FED969" height="40px">

                                <tr>
                                    <td>
                                        <center>
                                            <p></p>
                                            <h6><?php echo $row["ano"]; ?></h6>
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
            <!-------------------------------------------------------------->

            <div class="container mt-3">
                <div class="row">
                    <div class="col-7">
                        <p4>
                            <?php echo $row["titulo"]; ?> </p4>
                        <p></p>
                        <p3>
                            <?php echo $row["descricao"]; ?>
                        </p3>
                    </div>
                    <div class="col-5">
                        <img src="Imagens/História/<?php echo $row["foto"]; ?>" style="width:100%">
                    </div>
                    <div class="container mt-1">
                        <div class="row">
                            <div class="col-12">
                                <hr>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
    <?php
        }
    }

    ?>
    <?php
    $pedido = "SELECT * FROM historia WHERE id='3'";
    $resultado = $ligacao->query($pedido);

    if ($resultado->num_rows > 0) {
        while ($row = $resultado->fetch_assoc()) {
    ?>
            <div class="container mt-4">
                <div class="row">
                    <div class="col-12">
                        <center>

                            <table width="1296px" bgcolor="#FED969" height="40px">

                                <tr>
                                    <td>
                                        <center>
                                            <p></p>
                                            <h6><?php echo $row["ano"]; ?></h6>
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
            <!-------------------------------------------------------------->

            <div class="container mt-3">
                <div class="row">

                    <div class="col-5">
                        <img src="Imagens/História/<?php echo $row["foto"]; ?>" style="width:100%">
                    </div>
                    <div class="col-7">
                        <p4>
                            <?php echo $row["titulo"]; ?> </p4>
                        <p></p>
                        <p3>
                            <?php echo $row["descricao"]; ?>
                        </p3>
                    </div>
                    <div class="container mt-1">
                        <div class="row">
                            <div class="col-12">
                                <hr>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
    <?php
        }
    }

    ?>
    <!--------------------------->
    <!------------------------------------------------------------------------------------------------------------------>
    <?php
    $pedido = "SELECT * FROM historia WHERE id='2'";
    $resultado = $ligacao->query($pedido);

    if ($resultado->num_rows > 0) {
        while ($row = $resultado->fetch_assoc()) {
    ?>
            <div class="container mt-4">
                <div class="row">
                    <div class="col-12">
                        <center>

                            <table width="1296px" bgcolor="#FED969" height="40px">

                                <tr>
                                    <td>
                                        <center>
                                            <p></p>
                                            <h6><?php echo $row["ano"]; ?></h6>
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
            <!-------------------------------------------------------------->

            <div class="container mt-3">
                <div class="row">
                    <div class="col-7">
                        <p4>
                            <?php echo $row["titulo"]; ?> </p4>
                        <p></p>
                        <p3>
                            <?php echo $row["descricao"]; ?>
                        </p3>
                    </div>
                    <div class="col-5">
                        <img src="Imagens/História/<?php echo $row["foto"]; ?>" style="width:100%">
                    </div>
                    <div class="container mt-1">
                        <div class="row">
                            <div class="col-12">
                                <hr>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
    <?php
        }
    }

    ?>
    <?php
    $pedido = "SELECT * FROM historia WHERE id='1'";
    $resultado = $ligacao->query($pedido);

    if ($resultado->num_rows > 0) {
        while ($row = $resultado->fetch_assoc()) {
    ?>
            <div class="container mt-4">
                <div class="row">
                    <div class="col-12">
                        <center>

                            <table width="1296px" bgcolor="#FED969" height="40px">

                                <tr>
                                    <td>
                                        <center>
                                            <p></p>
                                            <h6><?php echo $row["ano"]; ?></h6>
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
            <!-------------------------------------------------------------->

            <div class="container mt-3">
                <div class="row">

                    <div class="col-5">
                        <img src="Imagens/História/<?php echo $row["foto"]; ?>" style="width:100%">
                    </div>
                    <div class="col-7">
                        <p4>
                            <?php echo $row["titulo"]; ?> </p4>
                        <p></p>
                        <p3>
                            <?php echo $row["descricao"]; ?>
                        </p3>
                    </div>
                    <div class="container mt-1">
                        <div class="row">
                            <div class="col-12">
                                <hr>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
    <?php
        }
    }

    ?>
    <!--------------------------->
    <?php include 'footer.php'; ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>


</html>