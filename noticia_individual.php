<?php
include_once("ligacao.php");
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../imagens/geral/Logotipo.png">
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
            font-family: avalors;
            font-size: 20PX;
            color: #212529;
            text-align: justify;
            opacity: 70%;
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
            border-color: white;
            border-radius: 0px;
        }

        a:link {
            text-decoration: none;
        }

        h1 {
            color: #212529;
            font-size: 50px;
            font-family: avalors;
        }

        h2 {
            color: white;
            font-size: 50px;
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
            color: white;
        }

        p8 {
            color: white;
            font-size: 20px;
            font-family: "LEMON MILK Regular";
            opacity: 70%;
        }

        p9 {
            color: #212529;
            font-size: 15px;
            font-family: avalors;
        }
        h6{
            color: #212529;
            font-family: avalors;
        }
    </style>

    <!-------------------------------------------------------------------------------IMAGEM------------------------------------------------------------------------>
    <?php
    $id = $_GET['id'];
    $consulta = "SELECT * FROM noticias where id = $id";
    $resultado = $ligacao->query($consulta);

    if ($resultado->num_rows > 0) {
        while ($row = $resultado->fetch_assoc()) {
    ?>

            <img src="<?php echo ($row['banner']) ?>" width="100%">

    <?php
        }
    }

    ?>
    <!-----------------------------------------------DESCRICAO JOGADOR-------------------------------------------------------------------------->
    <div class="container mt-4">
        <?php
        $id = $_GET['id'];
        $consulta = "SELECT * FROM noticias where id = $id";
        $resultado = $ligacao->query($consulta);

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
                                            <h6><?php echo ($row['titulo']) ?></h6>
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
        <div class="row">
            <div class="col-12">
                <p></p>
                <p2>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p2>
                <p></p>
                <p2>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p2>
                <p></p>
                <p2>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.</p2>
            </div>
        </div>
        <hr>
    </div>
    <P></P>

    <!-------------------------------------------FOOTER--------------------------------------------------------------------------------------------->
    <?php include 'footer.php'; ?>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>


</html>