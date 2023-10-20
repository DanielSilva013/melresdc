<?php
include_once("ligacao.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="Imagens/Geral/Logotipo.png">
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
            font-size: small;
            color: #FFD968;
        }

        p3 {
            font-family: "LEMON MILK Regular";
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

        h5 {
            color: white;
            font-family: avalors;
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

        .imgcard img:hover {
            -webkit-transform: scale(1.0);
            transform: scale(1.2);
        }

        a:hover {
            color: #FFD968;
        }

        a:link {
            color: #FFD968;

        }

        a {
            text-decoration: none;
            text-decoration: #FED969;
        }

        .cardnoticias:hover h5 {
            color: #FED969;
        }

        .cardnoticias:hover .imgcard img {
            -webkit-transform: scale(1.2);
            transform: scale(1.2);
        }

        h6 {
            font-family: avalors;
            color: #212529;

        }

        .dropdown-menu {
            border-radius: 0px;

        }

        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #343A40;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
            z-index: 1;
        }

        .dropdown-content a {
            float: none;
            color: black;
            padding: 8px 8px;
            text-decoration: none;
            display: block;
            text-align: left;
        }

        .dropdown-content a:hover {
            background-color: #202529;
        }

        .dropdown:hover .dropdown-content {
            display: block;
        }

        .dropdown {
            float: left;
        }

        .dropdown:hover .dropdown-menu {
            display: block;
        }

        .dropdown-menu {
            margin-top: 0;
        }

        .navbar-brand:hover,
        .navbar-brande:focus {
            opacity: 100%;
        }

        a:hover {
            color: #FFD968;
            background-color: #FED969;
        }

        a:link {
            color: #FFD968;

        }

        .anav:hover,
        .anav:focus {
            opacity: 80%;
        }

        body {
            background-color: #202529;
        }

        nav {
            background-color: #FFD968;
            height: 80px;

        }

        container {
            align-self: center;
        }

        H7 {
            font-family: avalors;
            color: #202529;
        }

        li {
            margin-left: 6mm;
            margin-right: 6mm;
        }
    </style>

    <!------------------------------------------------------------------------------------------------------------------------------------------>

    <p></p>
    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-12">
                <center>
                    <table width="1300px" bgcolor="#FED969" height="40px">
                        <tr>
                            <td>
                                <center>
                                    <p>
                                    <h6>Notícias</h6>
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
    <?php
    $pedido = "SELECT * FROM noticias ORDER BY id";
    $resultado = $ligacao->query($pedido);

    if ($resultado->num_rows > 0) {
        while ($row = $resultado->fetch_assoc()) {
    ?>
            <div class="container mt-3">
                <a href="noticia_individual.php?id=<?php echo $row['id'] ?>">
                    <div class="cardnoticias">
                        <div class="row">

                            <div class="col-4">
                                <div class="imgcard">
                                    <img src="<?php echo $row["foto"]; ?>" style="width:100%">
                                </div>
                            </div>
                            <div class="col-8">
                                <p2><?php echo $row["data"]; ?></p2>
                                <p></p>
                                <H5><?php echo $row["titulo"]; ?></H5>
                                <p></p>
                                <p3><?php echo $row["subtitulo"]; ?></p3>
                            </div>

                        </div>
                    </div>
                </a>
            </div>
            <div class="container mt-1">
                <div class="row">
                    <div class="col-12">
                        <hr>
                    </div>
                </div>
            </div>
    <?php
        }
    }
    ?>

    <!-------------------------------------------FOOTER--------------------------------------------------------------------------------------------->
    <?php include 'footer.php'; ?>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>


</html>