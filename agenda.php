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
    <style>
        h6 {
            font-family: avalors;
            color: #212529;

        }

        p1 {
            font-family: arial;
            text-align: center;
            font-size: medium;
        }

        p2 {
            font-family: avalors;
            text-align: justify;
            font-size: small;
            color: white;
        }

        
        p22 {
            font-family: avalors;
            text-align: justify;
            font-size: small;
            color: white;
            opacity: 30%;
        }

        p5 {

            font-family: avalors;
            text-align: justify;
            font-size: small;
            color: #FFD968;

        }

        p6 {
            font-family: avalors;
            text-align: RIGHT;
            font-size: small;
            color: white;
        }

        P7 {
            font-family: avalors;
            font-size: small;
            color: #BABBBC;
        }

        hr {
            width: 100%;
            background: #BABBBC;
        }

        .card {
            background-color: #212529;
            border-color: #FFD968;
            border-radius: 0px;
        }

        p4 {
            font-family: avalors;
            color: #212529;
            font-size: med;
        }

        scroll-container {
            display: block;
            margin: 0 auto;
        }


        scroll-container {
            display: block;
            width: 645;
            height: 400px;
            overflow-y: scroll;
            scroll-behavior: smooth;
        }

        scroll-page {


            justify-content: center;
            height: 70%;

        }

        h8 {
            font-family: avalors;
            color: #212529;
        }

        p3 {
            font-family: "LEMON MILK Regular";
            font-weight: regular;
            color: #BABBBC;
            text-align: justify;
            font-size: medium;
        }

        body {
            background-color: #212529;
        }

        button {
            background-color: #FED969;
            padding: 10px 20px;
            border: none;
            border-radius: 15px;

        }

        h8 {
            color: #212529;
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
    </style>


    <p></p>
    <div class="container mt-5">
        <div class="row">
            <div class="col-12">
                <center>
                    <table width="1296px" bgcolor="#FED969">
                        <tr>
                            <td>
                                <center>
                                    <h6>
                                        <p></p>AGENDA<p></p>
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

    <!----------------------------------------------CALENDÁRIO------------------------------------------------------------------------------------------>
    <div class="container mt-4">
        <div class="row">
            <div class="col-6">
                <center>
                    <table bgcolor="#212529" align="center" cellspacing="21" cellpadding="21">
                        <thead>
                            <tr>
                                <p5>Junho</p5>
                            </tr>
                            <br>
                            <tr>
                                <p2>2023</p2>
                            </tr>
                            <tr>
                                <th>
                                    <p2>DOM<p2>
                                </th>
                                <th>
                                    <p2>SEG</p2>
                                </th>
                                <th>
                                    <p2>TER</p2>
                                </th>
                                <th>
                                    <p2>QUA</p2>
                                </th>
                                <th>
                                    <p2>QUI</p2>
                                </th>
                                <th>
                                    <p2>SEG</p2>
                                </th>
                                <th>
                                    <p2>SAB</p2>
                                </th>
                            </tr>
                        <tbody>
                            <tr>
                                </thead>
                                <?php
                                $pedido = "SELECT * FROM agendateste WHERE semana = 1 ORDER BY id LIMIT 7";
                                $resultado = $ligacao->query($pedido);

                                if ($resultado->num_rows > 0) {
                                    while ($row = $resultado->fetch_assoc()) {
                                ?>
                                        <td>
                                            <center>
                                                <p2><?php echo $row["dia"]; ?></p2>
                                            </center>
                                        </td>
                                <?php
                                    }
                                }
                                ?>
                                
                            </tr>
                            <tr>
                                </thead>
                                <?php
                                $pedido = "SELECT * FROM agendateste WHERE semana = 2 ORDER BY id LIMIT 7 ";
                                $resultado = $ligacao->query($pedido);

                                if ($resultado->num_rows > 0) {
                                    while ($row = $resultado->fetch_assoc()) {
                                ?>
                                        <td>
                                            <center>
                                                <p2><?php echo $row["dia"]; ?></p2>
                                            </center>
                                        </td>
                                <?php
                                    }
                                }
                                ?>
                                
                            </tr>
                            <tr>
                                </thead>
                                <?php
                                $pedido = "SELECT * FROM agendateste WHERE semana = 3 ORDER BY id LIMIT 7 ";
                                $resultado = $ligacao->query($pedido);

                                if ($resultado->num_rows > 0) {
                                    while ($row = $resultado->fetch_assoc()) {
                                ?>
                                        <td>
                                            <center>
                                                <p2><?php echo $row["dia"]; ?></p2>
                                            </center>
                                        </td>
                                <?php
                                    }
                                }
                                ?>
                                
                            </tr>
                            <tr>
                                </thead>
                                <?php
                                $pedido = "SELECT * FROM agendateste WHERE semana = 4 ORDER BY id LIMIT 7 ";
                                $resultado = $ligacao->query($pedido);

                                if ($resultado->num_rows > 0) {
                                    while ($row = $resultado->fetch_assoc()) {
                                ?>
                                        <td>
                                            <center>
                                                <p2><?php echo $row["dia"]; ?></p2>
                                            </center>
                                        </td>
                                <?php
                                    }
                                }
                                ?>
                                
                            </tr>
                            <tr>
                                </thead>
                                <?php
                                $pedido = "SELECT * FROM agendateste WHERE semana = 5 ORDER BY id LIMIT 7 ";
                                $resultado = $ligacao->query($pedido);

                                if ($resultado->num_rows > 0) {
                                    while ($row = $resultado->fetch_assoc()) {
                                ?>
                                        <td>
                                            <center>
                                                <p2><?php echo $row["dia"]; ?></p2>
                                            </center>
                                        </td>
                                <?php
                                    }
                                }
                                ?>
                                
                            </tr>
                        </tbody>

                    </table>
                </center>
            </div>
            <!--------------------------------------------------------EVENTOS----------------------------------------------------------------------------->
            <div class="col-6">

                <p></p>
                <p></p>
                <!--------SCROLL------------------------------------------>

                <scroll-container>
                    <scroll-page id="page-1">
                        <table width="600px">
                            <tbody>
                                <tr>
                                    <th>
                                        <p5>14 DE JUNHO</p5>
                                        <p1> | </p1>
                                        <p2>14:30h&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Camp. de Juniores AF Porto</p2>
                                    </th>
                                </tr>
                                <tr>
                                    <th>
                                        <p></p>
                                    </th>
                                </tr>
                                <tr>
                                    <th>
                                        <p5>Melres DC SUB-17</p5>
                                        <p7>VS </p7>
                                        <P2>Gens SC SUB-17</P2>
                                    </th>
                                </tr>
                                <tr>
                                    <th>
                                        <p></p>
                                    </th>
                                </tr>
                                <tr>
                                    <th>
                                        <p7>Estádio da Gaivota</p7>
                                    </th>
                                </tr>
                                <tr>
                                    <th>
                                        <hr>
                                    </th>
                                </tr>
                            </tbody>
                        </table>
                    </scroll-page>
                    <scroll-page id="page-2">
                        <table width="600px">
                            <tbody>
                                <tr>
                                    <th>
                                        <p5>15 de JUNHO</p5>
                                        <p1> | </p1>
                                        <p2>16:00h&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;AF Porto 2ª Divisão</p2>
                                    </th>
                                </tr>
                                <tr>
                                    <th>
                                        <p></p>
                                    </th>
                                </tr>
                                <tr>
                                    <th>
                                        <p5>Melres DC</p5>
                                        <p7>VS </p7>
                                        <P2>CR Ataense</P2>
                                    </th>
                                </tr>
                                <tr>
                                    <th>
                                        <p></p>
                                    </th>
                                </tr>
                                <tr>
                                    <th>
                                        <p7>Estádio da Gaivota</p7>
                                    </th>
                                </tr>
                                <tr>
                                    <th>
                                        <hr>
                                    </th>
                                </tr>
                            </tbody>
                        </table>
                    </scroll-page>
                    <scroll-page id="page-3">
                        <table width="600px">
                            <tbody>
                                <tr>
                                    <th>
                                        <p5>19 de JUNHO</p5>
                                        <p1> | </p1>
                                        <p2>16:00h&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Evento Administrativo</p2>
                                    </th>
                                </tr>
                                <tr>
                                    <th>
                                        <p></p>
                                    </th>
                                </tr>
                                <tr>
                                    <th>
                                        <P2>Reunião de Associados do</P2>
                                        <p5> Melres DC</p5>
                                    </th>
                                </tr>
                                <tr>
                                    <th>
                                        <p></p>
                                    </th>
                                </tr>
                                <tr>
                                    <th>
                                        <p7>Instalações Internas do Estádio da Gaivota</p7>
                                    </th>
                                </tr>
                                <tr>
                                    <th>
                                        <hr>
                                    </th>
                                </tr>
                            </tbody>
                        </table>
                    </scroll-page>
                    <scroll-page id="page-4">
                        <table width="600px">
                            <tbody>
                                <tr>
                                    <th>
                                        <p5>21 de JUNHO</p5>
                                        <p1> | </p1>
                                        <p2>10:30h&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Taça de Gondomar Sub-9</p2>
                                    </th>
                                </tr>
                                <tr>
                                    <th>
                                        <p></p>
                                    </th>
                                </tr>
                                <tr>
                                    <th>
                                        <p5>FC Fânzeres SUB-9</p5>
                                        <p7>VS </p7>
                                        <P2>Melres DC Sub-9</P2>
                                    </th>
                                </tr>
                                <tr>
                                    <th>
                                        <p></p>
                                    </th>
                                </tr>
                                <tr>
                                    <th>
                                        <p7>Estádio Estrelas de Fânzeres</p7>
                                    </th>
                                </tr>
                                <tr>
                                    <th>
                                        <hr>
                                    </th>
                                </tr>
                            </tbody>
                        </table>
                    </scroll-page>
                    <scroll-page id="page-5">
                        <table width="600px">
                            <tbody>
                                <tr>
                                    <th>
                                        <p5>28 de JUNHO</p5>
                                        <p1> | </p1>
                                        <p2>10:00&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Camp. de Gondomar Sub-7</p2>
                                    </th>
                                </tr>
                                <tr>
                                    <th>
                                        <p></p>
                                    </th>
                                </tr>
                                <tr>
                                    <th>
                                        <p5>SC Rio Tinto SUB-7</p5>
                                        <p7>VS </p7>
                                        <P2>Melres DC Sub-7</P2>
                                    </th>
                                </tr>
                                <tr>
                                    <th>
                                        <p></p>
                                    </th>
                                </tr>
                                <tr>
                                    <th>
                                        <p7>Estádio Cidade de Rio Tinto</p7>
                                    </th>
                                </tr>
                                <tr>
                                    <th>
                                        <hr>
                                    </th>
                                </tr>
                            </tbody>
                        </table>
                    </scroll-page>
                    <scroll-page id="page-6">
                        <table width="600px">
                            <tbody>
                                <tr>
                                    <th>
                                        <p5>29 de JUNHO</p5>
                                        <p1> | </p1>
                                        <p2>16:30h&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;AF Porto 2ª Divisão</p2>
                                    </th>
                                </tr>
                                <tr>
                                    <th>
                                        <p></p>
                                    </th>
                                </tr>
                                <tr>
                                    <th>
                                        <p5>Melres DC</p5>
                                        <p7>VS </p7>
                                        <P2>FC Parada</P2>
                                    </th>
                                </tr>
                                <tr>
                                    <th>
                                        <p></p>
                                    </th>
                                </tr>
                                <tr>
                                    <th>
                                        <p7>Estádio da Gaivota</p7>
                                    </th>
                                </tr>
                                <tr>
                                    <th>
                                        <hr>
                                    </th>
                                </tr>
                            </tbody>
                        </table>
                    </scroll-page>
                </scroll-container>
                <!--------/SCROLL------------------------------------------>

                <p></p>

            </div>
        </div>
    </div>
    <p></p>
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
                                <?php echo $row["hora"]; ?>h
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
                            <p8>VS</p8>
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