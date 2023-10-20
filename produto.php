<?php
include_once("ligacao.php");

session_start();
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
            font-family: "LEMON MILK Regular";
            text-align: justify;
            font-size: medium;
            color: white;
        }

        p13 {
            font-family: "LEMON MILK Regular";
            font-size: small;
            color: #BABBBC;
            text-align: justify;
        }

        p15 {
            font-family: "LEMON MILK Regular";
            font-size: medium;
            color: white;
            text-align: justify;
        }

        p3 {
            font-family: avalors;
            font-size: small;
            color: white;
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
            border-color: white;
            border-radius: 0px;
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

        .card:hover p2 {
            color: #FED969;
        }
    </style>

    <p></p>
    <div class="container mt-5">
        <?php
        $id = $_GET['id'];
        $consulta = "SELECT * FROM produto where id = $id";
        $resultado = $ligacao->query($consulta);

        if ($resultado->num_rows > 0) {
            while ($row = $resultado->fetch_assoc()) {
        ?>
                <div class="row">
                    <div class="col-5">
                        <div class="card" border="5px">

                            <img src="<?php echo $row['foto'] ?>">

                        </div>
                    </div>
                    <div class="col-1">
                    </div>
                    <div class="col-6">
                        <p9><?php echo ($row['nome']) ?></p9>
                        <p></p>
                        <p6><?php echo ($row['preco']) ?>€</p6>
                        <p></p>
                        <p4>Sócio - <?php echo ($row['preco_socio']) ?>€</p4>
                        <p></p>
                        <div class="carrinho-container">
                            <div class="produto">
                                <a href="?id=<?php echo $id ?>&adicionar=<?php echo $id ?>"><button style="border-radius: 10px;">
                                        <p10>
                                            <font size="2">&nbsp;&nbsp;&nbsp;&nbsp;Adicionar&nbsp;&nbsp;&nbsp;&nbsp;</font>
                                        </p10>
                                    </button></a>
                            </div>
                        </div>
                        <?php
                        if (isset($_GET['adicionar'])) {
                            $idProduto = (int) $_GET['adicionar'];
                            if (isset($_SESSION['carrinho'][$idProduto])) {
                                $_SESSION['carrinho'][$idProduto]['quantidade']++;
                            } else {
                                $_SESSION['carrinho'][$idProduto] = array('quantidade' => 1, 'nome' => $row['nome'], 'preco' => $row['preco'], 'foto' => $row['foto']);
                            }
                            echo '<script>alert("O item foi adicionado ao carrinho")</script>';
                        }
                        ?>
                        <p></p>
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#BABBBC" class="bi bi-card-text" viewBox="0 0 16 16">
                            <path d="M14.5 3a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h13zm-13-1A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-13z" />
                            <path d="M3 5.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zM3 8a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9A.5.5 0 0 1 3 8zm0 2.5a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5z" />
                        </svg>&nbsp;&nbsp;<p13> Pagamento à cobrança</p13>
                        <p></p>
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#BABBBC" class="bi bi-box-seam-fill" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M15.528 2.973a.75.75 0 0 1 .472.696v8.662a.75.75 0 0 1-.472.696l-7.25 2.9a.75.75 0 0 1-.557 0l-7.25-2.9A.75.75 0 0 1 0 12.331V3.669a.75.75 0 0 1 .471-.696L7.443.184l.01-.003.268-.108a.75.75 0 0 1 .558 0l.269.108.01.003 6.97 2.789ZM10.404 2 4.25 4.461 1.846 3.5 1 3.839v.4l6.5 2.6v7.922l.5.2.5-.2V6.84l6.5-2.6v-.4l-.846-.339L8 5.961 5.596 5l6.154-2.461L10.404 2Z" />
                        </svg>&nbsp;&nbsp;<p13> Envios em 8 dias</p13>
                        <p></p>
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#BABBBC" class="bi bi-arrow-repeat" viewBox="0 0 16 16">
                            <path d="M11.534 7h3.932a.25.25 0 0 1 .192.41l-1.966 2.36a.25.25 0 0 1-.384 0l-1.966-2.36a.25.25 0 0 1 .192-.41zm-11 2h3.932a.25.25 0 0 0 .192-.41L2.692 6.23a.25.25 0 0 0-.384 0L.342 8.59A.25.25 0 0 0 .534 9z" />
                            <path fill-rule="evenodd" d="M8 3c-1.552 0-2.94.707-3.857 1.818a.5.5 0 1 1-.771-.636A6.002 6.002 0 0 1 13.917 7H12.9A5.002 5.002 0 0 0 8 3zM3.1 9a5.002 5.002 0 0 0 8.757 2.182.5.5 0 1 1 .771.636A6.002 6.002 0 0 1 2.083 9H3.1z" />
                        </svg>&nbsp;&nbsp;<p13> Devoluções Gratuitas</p13>

                    </div>

                </div>
        <?php
            }
        }

        ?>
    </div>
    <!---------------------------DESCRICAO-------------------------------------->
    <div class="container mt-3">
        <div class="row">
            <div class="col-12">
                <hr>
            </div>
        </div>
    </div>
    <div class="container mt-2">
        <div class="row">
            <div class="col-12">
                <center>
                    <table width="1300px" bgcolor="#212529" height="20px">
                        <tr>
                            <td>
                                <p5>Sobre Este Produto</p5s>
                            </td>
                        </tr>
                    </table>
                </center>
            </div>
        </div>
    </div>
      <!--------------------------------------------------------------------------------->
      <div class="container mt-1">
        <?php
        $id = $_GET['id'];
        $consulta = "SELECT * FROM produto where id = $id";
        $resultado = $ligacao->query($consulta);

        if ($resultado->num_rows > 0) {
            while ($row = $resultado->fetch_assoc()) {
        ?>
                <div class="row">
                    <div class="col-12">
                        <center>
                            <table width="1300px" bgcolor="#212529" height="40px">
                                <tr>
                                    <td>
                                        <p></p>
                                        <p2><?php echo ($row['descricao']) ?></p2>
                                        <p></p>
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
    <div class="container">
        <div class="row">
            <div class="col-12">
                <hr>
            </div>
        </div>
    </div>
    <!--------------------------------------------------------------------------------->
    <p></p>
    <div class="container mt-3">
        <div class="row">
            <div class="col-12">
                <center>
                    <table width="1300px" bgcolor="#FED969" height="40px">
                        <tr>
                            <td>
                                <center>
                                    <p></p>
                                    <h6>Recomendados</h6>
                                    <p></p>
                                </center>
                            </td>
                        </tr>
                    </table>
                </center>
            </div>
        </div>
    </div>
    <!------------------------------------------------------------------------------------------------------------------------>
    <div class="container mt-2">
        <div class="row">
            <p></p>
            <?php
            $pedido = "SELECT * FROM produto where categoria='acessorios' ORDER BY rand() LIMIT 4";
            $resultado = $ligacao->query($pedido);

            if ($resultado->num_rows > 0) {
                while ($row = $resultado->fetch_assoc()) {
            ?>
                    <div class="col-3 align-self-center">
                        <a href="produto_textil.php?id=<?php echo $row['id'] ?>">
                            <div class="card mb-3" border="5px">
                                <img src="<?php echo $row["foto"]; ?>" style="width:100%" border="1px">
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
    <div class="container">
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