<?php
include_once("ligacao.php");
?>

<!doctype html>
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
    <style>
        p2 {
            font-family: "LEMON MILK Regular";
            text-align: justify;
            font-size: medium;
            color: white;
        }

        p3 {
            font-family: "LEMON MILK Regular";
            font-size: medium;
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

        .row {
            align-items: center;
        }

        .hr1 {
            width: 1296px;
            background: #BABBBC;
            height: 2px;
        }

        .button2 {
            padding: 10px 20px;
            background-color: #FFD968;
            border-width: 0px;
        }

        .button2:hover,
        .button2:focus {
            opacity: 50%;
        }

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
            float: right;
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

        button:hover h8 {
            color: #212529;
        }

        a:hover {
            color: #FFD968;
            background: none;
        }

        a:link {
            color: #FFD968;

        }

        .anav:hover,
        .anav:focus {
            opacity: 80%;
        }

        p8 {
            font-family: avalors;
            font-size: small;
            color: #BABBBC;
            text-align: justify;
        }

        p9 {
            font-family: "avalors";
            text-align: justify;
            font-size: small;
            color: #BABBBC;
        }

        .echo {
            font-family: "avalors";
            text-align: justify;
            font-size: small;
            color: #BABBBC;
        }
    </style>

    <!----------------------------------------------NOTÍCIAS------------------------------------------------------------->
    <div class="container mt-5">
        <div class="row">
            <div class="col-12">
                <center>
                    <table width="1296px" bgcolor="#FED969">
                        <tr>
                            <td>
                                <center>
                                    <h6>
                                        <p></p>Notícias<p></p>
                                    </h6>
                                </center>
                            </td>
                        </tr>
                    </table>
                </center>
            </div>
        </div>
    </div>
    <p></p>
    <div class="container mt-4">
        <div class="row row1">
            <?php
            $pesquisa = $_POST['pesquisa'];

            $resultado_titulos = "SELECT * FROM noticias WHERE subtitulo LIKE '%$pesquisa%'";
            $resultado_titulos = $ligacao->query($resultado_titulos);

            if ($resultado_titulos->num_rows > 0) {
            ?>
                <?php
                while ($row = $resultado_titulos->fetch_assoc()) {
                ?>
                    <div class="col-1">
                        <img src="<?php echo $row['foto'] ?>" alt=".." width="100%">
                    </div>
                    <div class="col-10">
                        <p5><?php echo $row['titulo'] ?></p5>
                        <br>
                        <p3><?php echo $row['subtitulo'] ?></p3>
                    </div>
                    <div class="col-1">
                        <a href="noticia_individual.php?id=<?php echo $row['id'] ?>">
                            <center>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="white" class="bi bi-arrow-right" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z" />
                                </svg>
                            </center>
                        </a>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <hr class="hr1">
                        </div>
                    </div>
                <?php
                }
                ?>

            <?php
            } else {
                echo '<p></p><center><img src="Imagens/Admin/Erro.png" style="width: 350px"><p></p><p5>Sem Resultados Nesta Categoria</p5></center>';
            }
            ?>
        </div>
        </a>
    </div>
    <div class="container mt-2">
        <div class="row">
            <div class="col-12">
                <hr>
            </div>
        </div>
    </div>
    <!----------------------------------------------MULTIMÉDIA------------------------------------------------------------->
    <div class="container mt-5">
        <div class="row">
            <div class="col-12">
                <center>
                    <table width="1296px" bgcolor="#FED969">
                        <tr>
                            <td>
                                <center>
                                    <h6>
                                        <p></p>Multimédia<p></p>
                                    </h6>
                                </center>
                            </td>
                        </tr>
                    </table>
                </center>
            </div>
        </div>
    </div>
    <div class="container mt-4">
        <div class="row">
            <?php
            $pesquisa = $_POST['pesquisa'];

            $resultado_titulos = "SELECT * FROM multimedia WHERE titulo LIKE '%$pesquisa%'";
            $resultado_titulos = $ligacao->query($resultado_titulos);

            if ($resultado_titulos->num_rows > 0) {
            ?>
                <?php
                while ($row = $resultado_titulos->fetch_assoc()) {
                ?>
                    <div class="col-1">
                        <img src="<?php echo $row['thumbnail'] ?>" alt=".." width="100%">
                    </div>
                    <div class="col-10">
                        <p5><?php echo $row['titulo'] ?></p5>
                    </div>
                    <div class="col-1">
                        <a href="multimedia.php">
                            <center>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="white" class="bi bi-arrow-right" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z" />
                                </svg>
                            </center>
                        </a>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <hr class="hr1">
                        </div>
                    </div>

                <?php
                }
                ?>

            <?php
            } else {
                echo '<p></p><center><img src="Imagens/Admin/Erro.png" style="width: 350px"><p></p><p5>Sem Resultados Nesta Categoria</p5></center>';
            }
            ?>
        </div>
    </div>
    <div class="container mt-2">
        <div class="row">
            <div class="col-12">
                <hr>
            </div>
        </div>
    </div>
    <!----------------------------------------------CALENDARIO------------------------------------------------------------->
    <div class="container mt-5">
        <div class="row">
            <div class="col-12">
                <center>
                    <table width="1296px" bgcolor="#FED969">
                        <tr>
                            <td>
                                <center>
                                    <h6>
                                        <p></p>Calendário<p></p>
                                    </h6>
                                </center>
                            </td>
                        </tr>
                    </table>
                </center>
            </div>
        </div>
    </div>
    <div class="container mt-1">
        <div class="row">
            <?php
            $pesquisa = $_POST['pesquisa'];

            $resultado_titulos = "SELECT * FROM resultados WHERE equipas LIKE '%$pesquisa%'";
            $resultado_titulos = $ligacao->query($resultado_titulos);

            if ($resultado_titulos->num_rows > 0) {
            ?>
                <?php
                while ($row = $resultado_titulos->fetch_assoc()) {
                ?>
                    <div class="container mt-2">
                        <p></p>
                    </div>
                    <div class="container mt-3">
                        <div class="row">
                            <div class="col-12 align-self-center">
                                <center>
                                    <p9><?php echo $row["escalao"]; ?></p9>
                                </center>
                            </div>
                        </div>
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
                                        x
                                    </p10>
                                </center>
                            </div>
                            <div class="col-2 align-self-center">
                                <center>
                                    <img src="<?php echo $row["equipa_fora"]; ?>" style="width: 120px">
                                </center>
                            </div>
                            <div class="col-1"></div>
                            <div class="col-2 align-self-center">
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
                    <div class="row">
                        <div class="col-12">
                            <hr class="hr1">
                        </div>
                    </div>
                <?php
                }
                ?>

            <?php
            } else {
                echo '<p></p><center><img src="Imagens/Admin/Erro.png" style="width: 350px"><p></p><p5>Sem Resultados Nesta Categoria</p5></center>';
            }
            ?>
        </div>
    </div>
    <div class="container mt-2">
        <div class="row">
            <div class="col-12">
                <hr>
            </div>
        </div>
    </div>
    <!----------------------------------------------RESULTADOS------------------------------------------------------------->
    <div class="container mt-5">
        <div class="row">
            <div class="col-12">
                <center>
                    <table width="1296px" bgcolor="#FED969">
                        <tr>
                            <td>
                                <center>
                                    <h6>
                                        <p></p>Resultados<p></p>
                                    </h6>
                                </center>
                            </td>
                        </tr>
                    </table>
                </center>
            </div>
        </div>
    </div>
    <div class="container mt-1">
        <div class="row">
            <?php
            $pesquisa = $_POST['pesquisa'];

            $resultado_titulos = "SELECT * FROM resultados WHERE equipas LIKE '%$pesquisa%'";
            $resultado_titulos = $ligacao->query($resultado_titulos);

            if ($resultado_titulos->num_rows > 0) {
            ?>
                <?php
                while ($row = $resultado_titulos->fetch_assoc()) {
                ?>
                    <div class="container mt-2">
                        <p></p>
                    </div>
                    <div class="container mt-1">
                        <div class="row">
                            <div class="col-12 align-self-center">
                                <center>
                                    <p9><?php echo $row["escalao"]; ?></p9>
                                </center>
                            </div>
                        </div>
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
                            <div class="col-1"></div>
                            <div class="col-2 align-self-center">
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
                    <div class="row">
                        <div class="col-12">
                            <hr class="hr1">
                        </div>
                    </div>
                <?php
                }
                ?>

            <?php
            } else {
                echo '<p></p><center><img src="Imagens/Admin/Erro.png" style="width: 350px"><p></p><p5>Sem Resultados Nesta Categoria</p5></center>';
            }
            ?>
        </div>
    </div>
    <div class="container mt-2">
        <div class="row">
            <div class="col-12">
                <hr>
            </div>
        </div>
    </div>
    <!-------------------------------------------FOOTER--------------------------------------------------------------------------------------------->
    <?php include 'footer.php'; ?>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>


</html>