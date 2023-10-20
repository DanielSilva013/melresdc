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
    <?php include 'header_conta.php'; ?>
    <!----------------------------------------------------------------------------------------------------------------------->

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
            color: #BABBBC;
            text-align: justify;
        }

        p4 {
            font-family: avalors;
            text-align: justify;
            font-size: small;
            color: #FED969;

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
            font-size: small;
            color: #BABBBC;
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

        a:hover {
            background: none;
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
            border-radius: 50%;
            border-color: white;
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
            padding: 10px 40px;
            border: none;
            border-radius: 15px;

        }

        h8 {
            color: #212529;
        }

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

        p9 {
            font-family: "avalors";
            text-align: justify;
            font-size: small;
            color: #BABBBC;
        }

        input[type=text] {
            background-color: #212529;
            background-position: 10px 10px;
            background-repeat: no-repeat;
            padding-left: 10px;
            border-style: #212529;
            border-color: #BABBBC;
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

        input[type=password] {
            background-color: #212529;
            background-position: 10px 10px;
            background-repeat: no-repeat;
            padding-left: 10px;
            border-style: #212529;
            border-color: #BABBBC;
            background: #212529;
            border-radius: 10px;
            border-width: 2px;
            width: 100%;
        }

        input[type=password]:focus {
            background: #212529;
            border-color: #FFD968;

        }

        input[type=password]:disabled {
            background: #212529;
            border-color: #BABBBC;

        }

        input[type="password"]::-ms-reveal {
            cursor: pointer;
            filter: invert(1.8) brightness(100%) sepia(100%) saturate(100%) hue-rotate(240deg);
        }

        ::placeholder {
            font-family: avalors;
            color: #212529;
            opacity: 50%;

        }

        p10 {
            font-family: avalors;
            text-align: justify;
            font-size: small;
            color: #212529;

        }

        p12 {
            font-family: avalors;
            text-align: justify;
            font-size: medium;
            color: #FFD968;
        }
    </style>

    <?php
    $id = $_GET['id'];
    $consulta = "SELECT * FROM utilizador where id = $id";
    $resultado = $ligacao->query($consulta);

    if ($resultado->num_rows > 0) {
        while ($row = $resultado->fetch_assoc()) {
    ?>
            <div style="background: url(Imagens/Plantel/Banner_Jogador.jpg) ; padding:50px;">
                <center>
                    <p10 class="display-4">OLÁ <?php echo $row["nome"]; ?>!</p10>
                </center>
            </div>
            <div class="container mt-5">
                <div class="row">
                    <div class="col-12">
                        <center>
                            <table width="1300px" bgcolor="#FED969" height="40px">
                                <tr>
                                    <td>
                                        <center>
                                            <p>
                                            <h6>Perfil</h6>
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
            <!-----------------------------------------------NAVEGAÇÃO---------------------------------------------------------->
            <div class="container mt-4">
                <div class="row">
                    <div class="col-3">
                        <center>
                            <p>
                                <a href="conta.php">
                                    <p4>Informações Pessoais</p4>
                                </a>
                            </p>
                        </center>
                    </div>
                    <div class="col-3">
                        <center>
                            <p>
                                <p3>Dados de Acesso</p3>
                            </p>
                        </center>
                    </div>
                    <div class="col-3">
                        <center>
                            <p>
                                <a href="encomendas.php?id=<?php echo $row['id'] ?>">
                                    <p4>Encomendas</p4>
                                </a>
                            </p>
                        </center>
                    </div>
                    <div class="col-3">
                        <center>
                            <p>
                                <a href="quotas.php?id=<?php echo $row['id'] ?>">
                                    <p4>Quotas de Sócio</p4>
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
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="#FFD968" class="bi bi-key-fill" viewBox="0 0 16 16">
                            <path d="M3.5 11.5a3.5 3.5 0 1 1 3.163-5H14L15.5 8 14 9.5l-1-1-1 1-1-1-1 1-1-1-1 1H6.663a3.5 3.5 0 0 1-3.163 2zM2.5 9a1 1 0 1 0 0-2 1 1 0 0 0 0 2z" />
                        </svg>&nbsp;&nbsp;&nbsp;<p12>Alterar DADOS de Acesso</p12>
                    </div>
                </div>
            </div>
            <form action="validar_dados_de_acesso.php" method="POST" enctype="multipart/form-data">
                <div class="container mt-3">
                    <div class="row">
                        <div class="col-2">

                            <div class="form-group">
                                <label for="disabledTextInput" class="form-label">
                                    <p6>Nº de Utilizador</p6>
                                </label>
                                <input type="text" class="form-control mb-4" name="id" value="<?php echo $row['id'] ?>" style="color: #BABBBC; font-family: avalors;" readonly>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="form-group">
                                <label for="disabledTextInput" class="form-label">
                                    <p6>EMAIL</p6>
                                </label>
                                <input type="text" class="form-control mb-4" name="nome" value="<?php echo $row['email'] ?>" style="color: #BABBBC; font-family: avalors;" readonly>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="form-group">
                                <label for="disabledTextInput" class="form-label">
                                    <p6>Nova Password</p6>
                                </label>
                                <input type="password" minlength="8" class="form-control mb-4" name="password" id="password" style="color: #BABBBC; font-family: Arial;" required>

                            </div>
                        </div>
                        <div class="col-3">
                            <div class="form-group">
                                <label for="disabledTextInput" class="form-label">
                                    <p6>Confirmar Nova Password</p6>
                                </label>
                                <input type="password" minlength="8" class="form-control mb-4" name="novapassword" id="confirm_password" style="color: #BABBBC; font-family: Arial;" required>

                            </div>
                        </div>
                        <script>
                            var password = document.getElementById("password"),
                                confirm_password = document.getElementById("confirm_password");

                            function validatePassword() {
                                if (password.value != confirm_password.value) {
                                    confirm_password.setCustomValidity("As Passwords Não Coincidem");
                                } else {
                                    confirm_password.setCustomValidity('');
                                }
                            }

                            password.onchange = validatePassword;
                            confirm_password.onkeyup = validatePassword;
                        </script>
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
                <div class="container">
                    <div class="row">
                        <div class="col-4"></div>
                        <div class="col-2">
                            <center>
                                <button type="reset" class="button5">
                                    <h8>Cancelar</h8>
                                </button>
                            </center>
                        </div>
                        <div class="col-2">
                            <center>
                                <button type="submit" class="button5" name="submitform">
                                    <h8>Gravar</h8>
                                </button>
                            </center>
                        </div>
                        <div class="col-4"></div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <hr>
                        </div>
                    </div>
                </div>

            </form>
    <?php
        }
    } else {
        echo "Sem resultados...";
    }
    ?>

    <!------------------------------------------------------------------------------------------------------------------------------------------------->
    <?php include 'footer.php'; ?>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>

</html>