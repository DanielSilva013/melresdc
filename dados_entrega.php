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
    <?php include 'header.php'; ?>
    <!----------------------------------------------------------------------------------------------------------------------->

    <style>
        p2 {
            font-family: "avalors";
            text-align: justify;
            font-size: x-small;
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

        .hr1 {
            width: 100%;
            background: #BABBBC;
            height: 4px;
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

        .imagemutilizador {
            border-color: white;
            border-radius: 50%;
        }

        H3 {
            color: white;
        }

        H4 {
            color: white;
            font-family: avalors;
            font-size: 50px;
        }

        button {
            background-color: #FED969;
            padding: 10px 20px;
            border: none;
            border-radius: 15px;

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

        p10 {
            font-family: avalors;
            text-align: justify;
            font-size: medium;
            color: #212529;
        }



        h8 {
            color: #212529;
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
            font-family: avalors;
        }

        input[type=text] {
            background-color: #212529;
            background-position: 10px 10px;
            background-repeat: no-repeat;
            padding-left: 10px;
            border-style: #212529;
            border-color: #FFD968;
            background: #212529;
            border-radius: 10px;
            border-width: 2px;
            width: 100%;
        }

        input[type=text]:focus {
            background: #212529;
            border-color: #FFD968;

        }

        input[type=text]:disabled {
            background: #212529;
            border-color: #BABBBC;

        }

        ::placeholder {
            font-family: avalors;
            color: #212529;
            opacity: 50%;

        }

        /*--------------------------------------------BOTAO 1--------------------------------------------*/
        .button5 {
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

        .button5:before {
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

        .button5:hover,
        .button5:focus,
        .button5:active {
            color: #212529;
        }

        .button5:hover:before,
        .button5:focus:before,
        .button5:active:before {
            -webkit-transform: scaleY(1);
            transform: scaleY(1);
        }

        .button5 h8 {
            color: #FED969;
            font-family: avalors;
        }

        button:hover h8 {
            color: #212529;
            font-family: avalors;
        }

        a:hover {
            background: none;
        }
        p14 {
            font-family: avalors;
            color: white;
            font-size: medium;
        }
    </style>

    <!-----------------------------------------------------------TÍTULO----------------------------------------------------------------------->
    <div class="container">
        <div class="row">
            <div class="col-12">
                <center>
                    <?php
                    $id = $_SESSION['userId'];
                    $pedido = "SELECT * FROM utilizador WHERE id=$id";
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
    <p></p>
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
                                    <h6>Finalizar Encomenda</h6>
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
                        <a href="carrinho.php">
                            <p4>Carrinho</p4>
                        </a>
                    </p>
                </center>
            </div>
            <div class="col-3">
                <center>
                    <p>
                        <p3>Entrega</p3>
                    </p>
                </center>
            </div>
            <div class="col-3">
                <center>
                    <p>
                        <p4>Pagamento</p4>
                    </p>
                </center>
            </div>
            <div class="col-3">
                <center>
                    <p>
                        <p4>Confirmação</p4>
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
    <div class="container">
        <div class="row">
            <div class="col-6">
                <hr class="hr1">
            </div>
            <div class="col-6">
                <hr class="hr1">
            </div>
        </div>
    </div>
    <p></p>

    <!----------------------------------------DADOS PESSOAIS-------------------------------------------------------------->
    <div class="container">
        <div class="row">
            <div class="col-6">
                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="#FFD968" class="bi bi-person-fill" viewBox="0 0 16 16">
                    <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3Zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z" />
                </svg>&nbsp;&nbsp;&nbsp;<p6>DADOS PESSOAIS</p6>
            </div>
            <div class="col-6">
                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="#FED969" class="bi bi-box-seam-fill" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M15.528 2.973a.75.75 0 0 1 .472.696v8.662a.75.75 0 0 1-.472.696l-7.25 2.9a.75.75 0 0 1-.557 0l-7.25-2.9A.75.75 0 0 1 0 12.331V3.669a.75.75 0 0 1 .471-.696L7.443.184l.01-.003.268-.108a.75.75 0 0 1 .558 0l.269.108.01.003 6.97 2.789ZM10.404 2 4.25 4.461 1.846 3.5 1 3.839v.4l6.5 2.6v7.922l.5.2.5-.2V6.84l6.5-2.6v-.4l-.846-.339L8 5.961 5.596 5l6.154-2.461L10.404 2Z" />
                </svg>&nbsp;&nbsp;&nbsp;<p6>DADOS DE ENTREGA</p6>
            </div>
        </div>

    </div>
    <div class="container mt-3">
        <div class="row">
            <div class="col-3">
                <?php
                $pedido = "SELECT * FROM utilizador WHERE id=$id";
                $resultado = $ligacao->query($pedido);

                if ($resultado->num_rows > 0) {
                    while ($row = $resultado->fetch_assoc()) {
                ?>

                        <form>
                            <fieldset disabled>
                                <div class="mb-3">
                                    <label for="disabledTextInput" class="form-label">
                                        <p9>Nº de Utilizador</p9>
                                    </label>
                                    <input type="text" id="disabledTextInput" class="form-control" placeholder="<?php echo $row["id"]; ?>" readonly>
                                </div>
                            </fieldset>
                        </form>

                <?php
                    }
                }
                ?>
            </div>
            <div class="col-3">
                <?php
                $pedido = "SELECT * FROM utilizador WHERE id=$id";
                $resultado = $ligacao->query($pedido);

                if ($resultado->num_rows > 0) {
                    while ($row = $resultado->fetch_assoc()) {
                ?>
                        <div class="col-12 align-self-center">
                            <form>
                                <fieldset disabled>
                                    <div class="mb-3">
                                        <label for="disabledTextInput" class="form-label">
                                            <p9>Primeiro Nome</p9>
                                        </label>
                                        <input type="text" id="disabledTextInput" class="form-control" placeholder="<?php echo $row["nome"]; ?>">
                                    </div>
                                </fieldset>
                            </form>

                        </div>
                <?php
                    }
                }
                ?>
            </div>
            <div class="col-6">
                <?php
                $pedido = "SELECT * FROM utilizador WHERE id=$id";
                $resultado = $ligacao->query($pedido);

                if ($resultado->num_rows > 0) {
                    while ($row = $resultado->fetch_assoc()) {
                ?>
                        <div class="col-12 align-self-center">
                            <form>
                                <fieldset disabled>
                                    <div class="mb-3">
                                        <label for="disabledTextInput" class="form-label">
                                            <p9>Morada</p9>
                                        </label>
                                        <input type="text" id="disabledTextInput" class="form-control" placeholder="<?php echo $row["morada"]; ?>">
                                    </div>
                                </fieldset>
                            </form>

                        </div>
                <?php
                    }
                }
                ?>
            </div>
        </div>
        <div class="row">
            <div class="col-3">
                <?php
                $pedido = "SELECT * FROM utilizador WHERE id=$id";
                $resultado = $ligacao->query($pedido);

                if ($resultado->num_rows > 0) {
                    while ($row = $resultado->fetch_assoc()) {
                ?>

                        <form>
                            <fieldset disabled>
                                <div class="mb-3">
                                    <label for="disabledTextInput" class="form-label">
                                        <p9>Data de Nascimento</p9>
                                    </label>
                                    <input type="text" id="disabledTextInput" class="form-control" placeholder="<?php echo $row["data_nascimento"]; ?>" readonly>
                                </div>
                            </fieldset>
                        </form>

                <?php
                    }
                }
                ?>
            </div>
            <div class="col-3">
                <?php
                $pedido = "SELECT * FROM utilizador WHERE id=$id";
                $resultado = $ligacao->query($pedido);

                if ($resultado->num_rows > 0) {
                    while ($row = $resultado->fetch_assoc()) {
                ?>
                        <div class="col-12 align-self-center">
                            <form>
                                <fieldset disabled>
                                    <div class="mb-3">
                                        <label for="disabledTextInput" class="form-label">
                                            <p9>Apelido</p9>
                                        </label>
                                        <input type="text" id="disabledTextInput" class="form-control" placeholder="<?php echo $row["apelido"]; ?>">
                                    </div>
                                </fieldset>
                            </form>

                        </div>
                <?php
                    }
                }
                ?>
            </div>
            <div class="col-3">
                <?php
                $pedido = "SELECT * FROM utilizador WHERE id=$id";
                $resultado = $ligacao->query($pedido);

                if ($resultado->num_rows > 0) {
                    while ($row = $resultado->fetch_assoc()) {
                ?>

                        <form>
                            <fieldset disabled>
                                <div class="mb-3">
                                    <label for="disabledTextInput" class="form-label">
                                        <p9>Código Postal</p9>
                                    </label>
                                    <input type="text" id="disabledTextInput" class="form-control" placeholder="<?php echo $row["codigo_postal"]; ?>" readonly>
                                </div>
                            </fieldset>
                        </form>

                <?php
                    }
                }
                ?>
            </div>
            <div class="col-3">
                <?php
                $pedido = "SELECT * FROM utilizador WHERE id=$id";
                $resultado = $ligacao->query($pedido);

                if ($resultado->num_rows > 0) {
                    while ($row = $resultado->fetch_assoc()) {
                ?>
                        <div class="col-12 align-self-center">
                            <form>
                                <fieldset disabled>
                                    <div class="mb-3">
                                        <label for="disabledTextInput" class="form-label">
                                            <p9>Cidade</p9>
                                        </label>
                                        <input type="text" id="disabledTextInput" class="form-control" placeholder="<?php echo $row["cidade"]; ?>">
                                    </div>
                                </fieldset>
                            </form>

                        </div>
                <?php
                    }
                }
                ?>
            </div>
        </div>
    </div>
    <p></p>
    <div class="container">
        <div class="row">
            <div class="col-6">
                <hr class="hr1">
            </div>
            <div class="col-6">
                <hr class="hr1">
            </div>
        </div>
    </div>
    <p></p>
    <!----------------------------------------DADOS PESSOAIS-------------------------------------------------------------->
    <div class="container">
        <div class="row">
            <div class="col-6">
                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="#FED969" class="bi bi-chat-dots-fill" viewBox="0 0 16 16">
                    <path d="M16 8c0 3.866-3.582 7-8 7a9.06 9.06 0 0 1-2.347-.306c-.584.296-1.925.864-4.181 1.234-.2.032-.352-.176-.273-.362.354-.836.674-1.95.77-2.966C.744 11.37 0 9.76 0 8c0-3.866 3.582-7 8-7s8 3.134 8 7zM5 8a1 1 0 1 0-2 0 1 1 0 0 0 2 0zm4 0a1 1 0 1 0-2 0 1 1 0 0 0 2 0zm3 1a1 1 0 1 0 0-2 1 1 0 0 0 0 2z" />
                </svg>&nbsp;&nbsp;&nbsp;<p6>CONTACTOS</p6>
            </div>
            <div class="col-6">
                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="#FED969" class="bi bi-clipboard2-check-fill" viewBox="0 0 16 16">
                    <path d="M10 .5a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5.5.5 0 0 1-.5.5.5.5 0 0 0-.5.5V2a.5.5 0 0 0 .5.5h5A.5.5 0 0 0 11 2v-.5a.5.5 0 0 0-.5-.5.5.5 0 0 1-.5-.5Z" />
                    <path d="M4.085 1H3.5A1.5 1.5 0 0 0 2 2.5v12A1.5 1.5 0 0 0 3.5 16h9a1.5 1.5 0 0 0 1.5-1.5v-12A1.5 1.5 0 0 0 12.5 1h-.585c.055.156.085.325.085.5V2a1.5 1.5 0 0 1-1.5 1.5h-5A1.5 1.5 0 0 1 4 2v-.5c0-.175.03-.344.085-.5Zm6.769 6.854-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 9.793l2.646-2.647a.5.5 0 0 1 .708.708Z" />
                </svg>&nbsp;&nbsp;&nbsp;<p6>DADOS DE FATURAÇÃO</p6>
            </div>
        </div>

    </div>
    <div class="container mt-3">
        <div class="row">
            <div class="col-6">
                <?php
                $pedido = "SELECT * FROM utilizador WHERE id=$id";
                $resultado = $ligacao->query($pedido);

                if ($resultado->num_rows > 0) {
                    while ($row = $resultado->fetch_assoc()) {
                ?>

                        <form>
                            <fieldset disabled>
                                <div class="mb-3">
                                    <label for="disabledTextInput" class="form-label">
                                        <p9>Email</p9>
                                    </label>
                                    <input type="text" id="disabledTextInput" class="form-control" placeholder="<?php echo $row["email"]; ?>">
                                </div>
                            </fieldset>
                        </form>

                <?php
                    }
                }
                ?>
            </div>
            <div class="col-6">
                <?php
                $pedido = "SELECT * FROM utilizador WHERE id=$id";
                $resultado = $ligacao->query($pedido);

                if ($resultado->num_rows > 0) {
                    while ($row = $resultado->fetch_assoc()) {
                ?>
                        <div class="col-12 align-self-center">
                            <form>
                                <fieldset disabled>
                                    <div class="mb-3">
                                        <label for="disabledTextInput" class="form-label">
                                            <p9>NIF</p9>
                                        </label>
                                        <input type="text" id="disabledTextInput" class="form-control" placeholder="<?php echo $row["nif"]; ?>">
                                    </div>
                                </fieldset>
                            </form>

                        </div>
                <?php
                    }
                }
                ?>
            </div>
        </div>
        <div class="row">
            <div class="col-6">
                <?php
                $pedido = "SELECT * FROM utilizador WHERE id=$id";
                $resultado = $ligacao->query($pedido);

                if ($resultado->num_rows > 0) {
                    while ($row = $resultado->fetch_assoc()) {
                ?>
                        <div class="col-12 align-self-center">
                            <form>
                                <fieldset disabled>
                                    <div class="mb-3">
                                        <label for="disabledTextInput" class="form-label">
                                            <p9>Telemóvel</p9>
                                        </label>
                                        <input type="text" id="disabledTextInput" class="form-control" placeholder="<?php echo $row["telemovel"]; ?>">
                                    </div>
                                </fieldset>
                            </form>

                        </div>
                <?php
                    }
                }
                ?>
            </div>
            <div class="col-6">
                <?php
                $pedido = "SELECT * FROM utilizador WHERE id=$id";
                $resultado = $ligacao->query($pedido);

                if ($resultado->num_rows > 0) {
                    while ($row = $resultado->fetch_assoc()) {
                ?>
                        <div class="col-12 align-self-center">
                            <form>
                                <fieldset disabled>
                                    <div class="mb-3">
                                        <label for="disabledTextInput" class="form-label">
                                            <p9>IBAN</p9>
                                        </label>
                                        <input type="text" id="disabledTextInput" class="form-control" placeholder="<?php echo $row["iban"]; ?>">
                                    </div>
                                </fieldset>
                            </form>

                        </div>
                <?php
                    }
                }
                ?>
            </div>
        </div>
    </div>
    <p></p>
    <div class="container">
        <div class="row">
            <div class="col-6">
                <hr class="hr1">
            </div>
            <div class="col-6">
                <hr class="hr1">
            </div>
        </div>
    </div>
    <p></p>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <hr>
            </div>
        </div>
    </div>
    <p></p>

    
    <!-------------------------------------------------------BOTÕES----------------------------------------------------------------------------->
    <div class="container mt-4">
        <div class="row">
            <div class="col-3"></div>
            <div class="col-2">
                <?php
                $consulta = "SELECT * FROM utilizador WHERE id=$id";
                $resultado = $ligacao->query($consulta);

                if ($resultado->num_rows > 0) {
                ?>
                    <?php
                    while ($row = $resultado->fetch_assoc()) {
                    ?>
                        <center>
                            <a href="editar_perfil.php?id=<?php echo $row['id'] ?>">
                                <button style="border-radius: 10px;" class="button5">
                                    <h8>
                                        <font size="2">EDITAR DADOS</font>
                                    </h8>
                                </button>
                            </a>
                        </center>
                    <?php
                    }
                    ?>
                <?php
                } else {
                    echo "Sem resultados...";
                }
                ?>
            </div>
            <div class="col-2"></div>
            <div class="col-2">
                <center>
                    <a href="pagamento.php">
                        <button class="button1">
                            <h8>Avançar</h8>
                        </button>
                    </a>
                </center>
            </div>
            <div class="col-3"></div>
        </div>
    </div>
    <p></p>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <hr>
            </div>
        </div>
    </div>
    <p></p>

    <!------------------------------------------------------------------------------------------------------------------------------------------------->
    <?php include 'footer.php'; ?>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>

</html>