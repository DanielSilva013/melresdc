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
    <script src="script.js"></script>
</head>

<body>
    <?php include 'header.php'; ?>

    <style>
        p2 {
            font-family: "Lemon Milk Regular";
            text-align: justify;
            font-size: larger;
            color: white;
        }

        p3 {
            font-family: "avalors";
            font-size: small;
            color: #BABBBC;
            text-align: justify;
        }

        p9 {
            font-family: avalors;
            font-size: x-large;
            color: white;
            text-align: justify;
        }

        p10 {

            font-family: avalors;
            font-size: small;
            color: #212529;
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
            border-color: #FFD968;
            border-radius: 0px;
            border-width: 2px;
            ;
        }

        a:link {
            text-decoration: none;
        }

        a:hover {
            background: none;
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

        img {
            border-color: white;
        }

        button {
            background-color: #FFD968;
            padding: 8px 10px;
            border-color: #FFD968;
            border-radius: 15px;
            margin-bottom: 10px;
        }

        select {
            background-color: #212529;
            border-color: #BABBBC;
            padding: 12px 12px;
            font-family: "LEMON MILK Regular";
            font-size: large;
            color: #BABBBC;
            margin-top: 10px;
            margin-bottom: 10px;
        }

        img {
            max-width: 100%;
        }

        .imgcard {
            width: 100%;
            height: 100%;
            margin: 0px;
            overflow: hidden;
        }

        .imgcard img {
            -webkit-transition: all 0.7s ease;
            transition: all 0.7s ease;
        }


        .imgdestaque {
            width: 100%;
            height: 100%;
            margin: 0px;
            overflow: hidden;
        }

        .imgdestaque img {
            -webkit-transition: all 0.7s ease;
            transition: all 0.7s ease;
        }

        .imgdestaque img:hover {
            -webkit-transform: scale(1.2);
            transform: scale(1.2);
        }

        .card {
            background-color: #212529;
            border-color: #FFD968;
            border-radius: 0px;
            border-width: 2px;

        }

        .card:hover .imgcard img {
            -webkit-transform: scale(1.2);
            transform: scale(1.2);
        }

        .card:hover p2 {
            color: #FED969;
        }

        h6 {
            font-family: avalors;
            color: #212529;

        }
    </style>
    <div class="container mt-4 mb-4">
        <div class="row">
            <div class="col-12">
                <center>

                    <table width="1296px" bgcolor="#FED969" height="40px">

                        <tr>
                            <td>
                                <center>
                                    <p></p>
                                    <h6>Multimédia</h6>
                                    <p></p>
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
            <div class="col-4">
                <center>
                    <p>
                        <a href="multimedia.php">
                            <p4>Fotografias</p4>
                        </a>
                    </p>
                </center>
            </div>
            <div class="col-4">
                <center>
                    <p>
                        <p3>Vídeos</p3>
                    </p>
                </center>
            </div>
            <div class="col-4">
                <center>
                    <p>
                        <a href="multimedia_wallpapers.php">
                            <p4>Wallpapers</p4>
                        </a>
                    </p>
                </center>
            </div>
        </div>
    </div>
    <div class="container mt-1">
        <div clas="row">
            <div class="col-12">
                <hr>
            </div>
        </div>
    </div>
    <!--------------------------------------------------------------------------------------------------------------------------------->
    <div class="container mt-5">
        <div class="row">
            <?php
            $pedido = "SELECT * FROM multimedia WHERE tipologia = 'video' ORDER BY id";
            $resultado = $ligacao->query($pedido);

            if ($resultado->num_rows > 0) {
                while ($row = $resultado->fetch_assoc()) {
            ?>
                    <div class="col-4 align-self-center">
                        <a href="multimedia_video_individual.php?id=<?php echo $row['id'] ?>">
                            <div class="card mb-3">
                                <div class="imgcard">
                                    <img src="<?php echo $row['thumbnail'] ?>" style="width:100%">
                                </div>
                                <div class="container mt-2">
                                    <div class="row">
                                        <DIV CLASS="col-1"></DIV>
                                        <div class="col-9">
                                            <p></p>
                                            <p2><?php echo $row['equipa_casa'] ?></p2>
                                        </div>
                                        <div class="col-1">
                                            <center>
                                                <p></p>
                                                <p2><?php echo $row['resultado_casa'] ?></p2>
                                            </center>
                                        </div>
                                        <DIV CLASS="col-1"></DIV>
                                    </div>
                                    <div class="row">
                                        <DIV CLASS="col-1"></DIV>
                                        <div class="col-9">
                                            <p2><?php echo $row['equipa_fora'] ?></p2>
                                            <P></P>
                                        </div>
                                        <div class="col-1">
                                            <p2><?php echo $row['resultado_fora'] ?></p2>
                                            <P></P>
                                        </div>
                                        <DIV CLASS="col-1"></DIV>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
            <?php
                }
            }
            ?>
        </div>
    </div>
    <!------------------------------------------------------------------------------------------------------------------------------>
    <div class="container mt-4">
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