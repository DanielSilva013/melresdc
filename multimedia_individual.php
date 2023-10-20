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
            font-family: "avalors";
            text-align: justify;
            font-size: medium;
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
            border-color: #FED969;
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
    <!---------------------------------------------------------------------------------------------------------------------------------------->
    <div class="container mt-5">
        <?php
        $id = $_GET['id'];
        $consulta = "SELECT * FROM multimedia where id = $id";
        $resultado = $ligacao->query($consulta);

        if ($resultado->num_rows > 0) {
            while ($row = $resultado->fetch_assoc()) {
        ?>

                <div class="row">
                    <div class="col-12">
                        <img src="<?php echo ($row['foto']) ?>" width="100%">
                    </div>
                </div>

        <?php
            }
        }
        ?>
    </div>
    <div class="container mt-2">
        <div class="row">
            <?php
            $id = $_GET['id'];
            $consulta = "SELECT * FROM multimedia where id = $id";
            $resultado = $ligacao->query($consulta);

            if ($resultado->num_rows > 0) {
                while ($row = $resultado->fetch_assoc()) {
            ?>
                    <div class="col-3">
                        <img src="<?php echo ($row['foto']) ?>" width="100%" border="4px">
                    </div>
            <?php
                }
            }
            ?>

            <?php
            $id = $_GET['id'];
            $pedido = "SELECT * FROM multimedia WHERE id = $id";
            $resultado = $ligacao->query($pedido);

            if ($resultado->num_rows > 0) {
                while ($row = $resultado->fetch_assoc()) {
            ?>

                    <div class="col-3">
                        <a href="multimedia_individual_1.php?id=<?php echo $row['id'] ?>">
                            <img src="<?php echo ($row['foto_1']) ?>" width="100%">
                        </a>
                    </div>
                    <div class="col-3">
                        <a href="multimedia_individual_2.php?id=<?php echo $row['id'] ?>">
                            <img src="<?php echo ($row['foto_2']) ?>" width="100%">
                        </a>
                    </div>
                    <div class="col-3">
                        <a href="multimedia_individual_3.php?id=<?php echo $row['id'] ?>">
                            <img src="<?php echo ($row['foto_3']) ?>" width="100%">
                        </a>
                    </div>
            <?php
                }
            }
            ?>
        </div>
    </div>
        <!------------------------------------------------------CARROSSEL-------------------------------------------------------------------------->

        <!-------------------------------------------FOOTER--------------------------------------------------------------------------------------------->
        <?php include 'footer.php'; ?>
        <!-- JavaScript Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>


</html>