<?php
include_once("ligacao.php");
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../Imagens/Admin/Logotipo.png">
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

        img {

            border-color: white;
        }

        a:hover {
            color: #FFD968;
            background: none;
        }

        a:link {
            color: #FFD968;

        }

        a {
            text-decoration: none;
            text-decoration: #FED969;
        }

        h6 {
            font-family: avalors;
            color: #212529;

        }
        .card:hover p2 {
            color: #FED969;
        }
</style>




    <!-----------------------------------------------DESCRICAO JOGADOR-------------------------------------------------------------------------->
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
                                    <h6>Loja</h6>
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
    <!----------------------------------------------------------------------------------------------------------------->
    <div class="container mt-4">
        <div class="row">
            <div class="col-3">
                <center>
                    <p>
                        <a href="loja.php">
                            <p4>Têxtil</p4>
                        </a>
                    </p>
                </center>
            </div>
            <div class="col-3">
                <center>
                    <p>
                        <p3>Equipamentos</p3>
                    </p>
                </center>
            </div>
            <div class="col-3">
                <center>
                    <p>
                        <a href="acessorios.php">
                            <p4>Acessórios</p4>
                        </a>
                    </p>
                </center>
            </div>
            <div class="col-3">
                <center>
                    <p>
                        <a href="adeptos.php">
                            <p4>Adeptos</p4>
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
    <p></p>
    <p></p>
    <div class="container mt-4">
        <div class="row">
            <?php
            $pedido = "SELECT * FROM produto WHERE categoria = 'equipamentos' ORDER BY nome";
            $resultado = $ligacao->query($pedido);

            if ($resultado->num_rows > 0) {
                while ($row = $resultado->fetch_assoc()) {
            ?>
                    <div class="col-3 align-self-center">
                    <a href="produto_textil.php?id=<?php echo $row['id'] ?>">
                        <div class="card mb-3" border="5px">
                            <img src="<?php echo $row['foto'] ?>">
                            <div class="container mt-2">
                                <p3><?php echo $row["preco"]; ?> €</p3>&nbsp;&nbsp;&nbsp;&nbsp;<p4>Sócio <?php echo $row["preco_socio"]; ?> € </p4>
                                <p></p>
                                <p2><?php echo $row["nome"]; ?></p2>
                                <p></p>
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
    <p></p>
    <?php include 'footer.php'; ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
</body>

</html>