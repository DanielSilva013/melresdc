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
    <link href="css.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</head>

<body>
    <?php include 'headerconta.php'; ?>
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

        .imagemutilizador {
            border-color: #FED969;
            border-radius: 50%;
        }

        H3 {
            color: white;
        }

        H4 {
            color: #FED969;
            font-family: avalors;
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
            color: white;
        }

  

        h8 {
            color: #212529;
        }
        .button1{
            padding: 10px 56px;
            background-color: #364B40;
        }
    </style>
    <!-----------------------------------------------------------TÍTULO----------------------------------------------------------------------->

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
                        <p3>Informações Pessoais</p3>
                    </p>
                </center>
            </div>
            <div class="col-3">
                <center>
                    <p>
                        <a href="dadosacessocio.php">
                            <p4>Dados de Acesso</p4>
                        </a>
                    </p>
                </center>
            </div>
            <div class="col-3">
                <center>
                    <p>
                        <a href="encomendassocio.php">
                            <p4>Encomendas</p4>
                        </a>
                    </p>
                </center>
            </div>
            <div class="col-3">
                <center>
                    <p>
                        <a href="quotas.php">
                            <p4>Quotas</p4>
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
    <!-------------------------------------------------------------FOTO---------------------------------------------------------------------------->
    <div class="container">
        <div class="row">
            <div class="col-12">
                <center>
                    <?php
                    $pedido = "SELECT * FROM utilizador";
                    $resultado = $ligacao->query($pedido);

                    if ($resultado->num_rows > 0) {
                        while ($row = $resultado->fetch_assoc()) {
                    ?>
                            <div class="col-12 align-self-center">
                                <center>
                                    <img src="Imagens/Utilizadores/<?php echo $row["foto"]; ?>" width="200px" border="3px"  class="imagemutilizador">
                                </center>
                            </div>
                    <?php
                        }
                    }
                    ?>
                </center>
            </div>
        </div>
    </div>
    <p></p>
    <div class="container mt-3">
        <div class="row">
            <div class="col-12">
                <?php
                $pedido = "SELECT * FROM utilizador";
                $resultado = $ligacao->query($pedido);

                if ($resultado->num_rows > 0) {
                    while ($row = $resultado->fetch_assoc()) {
                ?>
                        <div class="col-12 align-self-center">
                            <center>
                                <h4>OLÁ <?php echo $row["nome"]; ?>!</h4>
                            </center>
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
            <div class="col-12">
                <hr>
            </div>
        </div>
    </div>
    <p></p>
    <!----------------------------------------DADOS PESSOAIS-------------------------------------------------------------->
    <div class="container">
        <div class="row">
            <div class="col-12">
                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="#FFD968" class="bi bi-person-fill" viewBox="0 0 16 16">
                    <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3Zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z" />
                </svg>&nbsp;&nbsp;&nbsp;<p6>DADOS PESSOAIS</p6>
            </div>
        </div>
    </div>
    <div class="container mt-4">
        <div class="row">
            <div class="col-5">
                <p6>NOME</p6>
            </div>
            <div class="col-2"></div>
            <div class="col-5">
                <p6>GÉNERO</p6>
            </div>
        </div>
    </div>
    <div class="container mt-1">
        <div class="row">
            <div class="col-5">
                <?php
                $pedido = "SELECT * FROM utilizador";
                $resultado = $ligacao->query($pedido);

                if ($resultado->num_rows > 0) {
                    while ($row = $resultado->fetch_assoc()) {
                ?>
                        <div class="col-12 align-self-center">
                            <form>
                                <fieldset disabled>
                                    <div class="mb-3">
                                        <label for="disabledTextInput" class="form-label">
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
            <div class="col-2"></div>
            <div class="col-5">
                <?php
                $pedido = "SELECT * FROM utilizador";
                $resultado = $ligacao->query($pedido);

                if ($resultado->num_rows > 0) {
                    while ($row = $resultado->fetch_assoc()) {
                ?>
                        <div class="col-12 align-self-center">
                            <form>
                                <fieldset disabled>
                                    <div class="mb-3">
                                        <label for="disabledTextInput" class="form-label">
                                        </label>
                                        <input type="text" id="disabledTextInput" class="form-control" placeholder="<?php echo $row["genero"]; ?>">
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
    <!----------------------------------------------------------------------------------------------------------------------->
    <div class="container mt-4">
        <div class="row">
            <div class="col-5">
                <p6>APELIDO</p6>
            </div>
            <div class="col-2"></div>
            <div class="col-5">
                <p6>DATA DE NASCIMENTO</p6>
            </div>
        </div>
    </div>
    <div class="container mt-1">
        <div class="row">
            <div class="col-5">
                <?php
                $pedido = "SELECT * FROM utilizador";
                $resultado = $ligacao->query($pedido);

                if ($resultado->num_rows > 0) {
                    while ($row = $resultado->fetch_assoc()) {
                ?>
                        <div class="col-12 align-self-center">
                            <form>
                                <fieldset disabled>
                                    <div class="mb-3">
                                        <label for="disabledTextInput" class="form-label">
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
            <div class="col-2"></div>
            <div class="col-5">
                <?php
                $pedido = "SELECT * FROM utilizador";
                $resultado = $ligacao->query($pedido);

                if ($resultado->num_rows > 0) {
                    while ($row = $resultado->fetch_assoc()) {
                ?>
                        <div class="col-12 align-self-center">
                            <form>
                                <fieldset disabled>
                                    <div class="mb-3">
                                        <label for="disabledTextInput" class="form-label">
                                        </label>
                                        <input type="text" id="disabledTextInput" class="form-control" placeholder="<?php echo $row["datanasc"]; ?>">
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
            <div class="col-12">
                <hr>
            </div>
        </div>
    </div>
    <p></p>
    <!-------------------------------------------------CONTACTO--------------------------------------------------------------------------------------->
    <div class="container">
        <div class="row">
            <div class="col-12">
                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="#FED969" class="bi bi-chat-dots-fill" viewBox="0 0 16 16">
                    <path d="M16 8c0 3.866-3.582 7-8 7a9.06 9.06 0 0 1-2.347-.306c-.584.296-1.925.864-4.181 1.234-.2.032-.352-.176-.273-.362.354-.836.674-1.95.77-2.966C.744 11.37 0 9.76 0 8c0-3.866 3.582-7 8-7s8 3.134 8 7zM5 8a1 1 0 1 0-2 0 1 1 0 0 0 2 0zm4 0a1 1 0 1 0-2 0 1 1 0 0 0 2 0zm3 1a1 1 0 1 0 0-2 1 1 0 0 0 0 2z" />
                </svg>&nbsp;&nbsp;&nbsp;<p6>DADOS PESSOAIS</p6>
            </div>
        </div>
    </div>
    <div class="container mt-4">
        <div class="row">
            <div class="col-5">
                <p6>EMAIL</p6>
            </div>
            <div class="col-2"></div>
            <div class="col-5">
                <p6>TELEMÓVEL</p6>
            </div>
        </div>
    </div>
    <div class="container mt-1">
        <div class="row">
            <div class="col-5">
                <?php
                $pedido = "SELECT * FROM utilizador";
                $resultado = $ligacao->query($pedido);

                if ($resultado->num_rows > 0) {
                    while ($row = $resultado->fetch_assoc()) {
                ?>
                        <div class="col-12 align-self-center">
                            <form>
                                <fieldset disabled>
                                    <div class="mb-3">
                                        <label for="disabledTextInput" class="form-label">
                                        </label>
                                        <input type="text" id="disabledTextInput" class="form-control" placeholder="<?php echo $row["email"]; ?>">
                                    </div>
                                </fieldset>
                            </form>

                        </div>
                <?php
                    }
                }
                ?>
            </div>
            <div class="col-2"></div>
            <div class="col-5">
                <?php
                $pedido = "SELECT * FROM utilizador";
                $resultado = $ligacao->query($pedido);

                if ($resultado->num_rows > 0) {
                    while ($row = $resultado->fetch_assoc()) {
                ?>
                        <div class="col-12 align-self-center">
                            <form>
                                <fieldset disabled>
                                    <div class="mb-3">
                                        <label for="disabledTextInput" class="form-label">
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
    <!---------------------------------------------------------------DADOS DE ENTREGA---------------------------------------------------------------------->
    <div class="container">
        <div class="row">
            <div class="col-12">
                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="#FED969" class="bi bi-box-seam-fill" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M15.528 2.973a.75.75 0 0 1 .472.696v8.662a.75.75 0 0 1-.472.696l-7.25 2.9a.75.75 0 0 1-.557 0l-7.25-2.9A.75.75 0 0 1 0 12.331V3.669a.75.75 0 0 1 .471-.696L7.443.184l.01-.003.268-.108a.75.75 0 0 1 .558 0l.269.108.01.003 6.97 2.789ZM10.404 2 4.25 4.461 1.846 3.5 1 3.839v.4l6.5 2.6v7.922l.5.2.5-.2V6.84l6.5-2.6v-.4l-.846-.339L8 5.961 5.596 5l6.154-2.461L10.404 2Z" />
                </svg>&nbsp;&nbsp;&nbsp;<p6>DADOS DE ENTREGA</p6>
            </div>
        </div>
    </div>
    <div class="container mt-4">
        <div class="row">
            <div class="col-5">
                <p6>NOME</p6>
            </div>
            <div class="col-2"></div>
            <div class="col-5">
                <p6>MORADA</p6>
            </div>
        </div>
    </div>
    <div class="container mt-1">
        <div class="row">
            <div class="col-5">
                <?php
                $pedido = "SELECT * FROM utilizador";
                $resultado = $ligacao->query($pedido);

                if ($resultado->num_rows > 0) {
                    while ($row = $resultado->fetch_assoc()) {
                ?>
                        <div class="col-12 align-self-center">
                            <form>
                                <fieldset disabled>
                                    <div class="mb-3">
                                        <label for="disabledTextInput" class="form-label">
                                        </label>
                                        <input type="text" id="disabledTextInput" class="form-control" placeholder="<?php echo $row["nomecomp"]; ?>">
                                    </div>
                                </fieldset>
                            </form>

                        </div>
                <?php
                    }
                }
                ?>
            </div>
            <div class="col-2"></div>
            <div class="col-5">
                <?php
                $pedido = "SELECT * FROM utilizador";
                $resultado = $ligacao->query($pedido);

                if ($resultado->num_rows > 0) {
                    while ($row = $resultado->fetch_assoc()) {
                ?>
                        <div class="col-12 align-self-center">
                            <form>
                                <fieldset disabled>
                                    <div class="mb-3">
                                        <label for="disabledTextInput" class="form-label">
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
    </div>
    <!----------------------------------------------------------------------------------------------------------------------->
    <div class="container mt-4">
        <div class="row">
            <div class="col-5">
                <p6>CÓDIGO POSTAL</p6>
            </div>
            <div class="col-2"></div>
            <div class="col-5">
                <p6>CIDADE</p6>
            </div>
        </div>
    </div>
    <div class="container mt-1">
        <div class="row">
            <div class="col-5">
                <?php
                $pedido = "SELECT * FROM utilizador";
                $resultado = $ligacao->query($pedido);

                if ($resultado->num_rows > 0) {
                    while ($row = $resultado->fetch_assoc()) {
                ?>
                        <div class="col-12 align-self-center">
                            <form>
                                <fieldset disabled>
                                    <div class="mb-3">
                                        <label for="disabledTextInput" class="form-label">
                                        </label>
                                        <input type="text" id="disabledTextInput" class="form-control" placeholder="<?php echo $row["codpostal"]; ?>">
                                    </div>
                                </fieldset>
                            </form>

                        </div>
                <?php
                    }
                }
                ?>
            </div>
            <div class="col-2"></div>
            <div class="col-5">
                <?php
                $pedido = "SELECT * FROM utilizador";
                $resultado = $ligacao->query($pedido);

                if ($resultado->num_rows > 0) {
                    while ($row = $resultado->fetch_assoc()) {
                ?>
                        <div class="col-12 align-self-center">
                            <form>
                                <fieldset disabled>
                                    <div class="mb-3">
                                        <label for="disabledTextInput" class="form-label">
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
    <!----------------------------------------------------------------------------------------------------------------------->
    <div class="container mt-4">
        <div class="row">
            <div class="col-5">
                <p6>Telemóvel</p6>
            </div>
        </div>
    </div>
    <div class="container mt-1">
        <div class="row">
            <div class="col-5">
                <?php
                $pedido = "SELECT * FROM utilizador";
                $resultado = $ligacao->query($pedido);

                if ($resultado->num_rows > 0) {
                    while ($row = $resultado->fetch_assoc()) {
                ?>
                        <div class="col-12 align-self-center">
                            <form>
                                <fieldset disabled>
                                    <div class="mb-3">
                                        <label for="disabledTextInput" class="form-label">
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
    <!-------------------------------------------------DADOS DE FATURAÇÃO--------------------------------------------------------------------------------------->
    <div class="container">
        <div class="row">
            <div class="col-12">
                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="#FED969" class="bi bi-clipboard2-check-fill" viewBox="0 0 16 16">
                    <path d="M10 .5a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5.5.5 0 0 1-.5.5.5.5 0 0 0-.5.5V2a.5.5 0 0 0 .5.5h5A.5.5 0 0 0 11 2v-.5a.5.5 0 0 0-.5-.5.5.5 0 0 1-.5-.5Z" />
                    <path d="M4.085 1H3.5A1.5 1.5 0 0 0 2 2.5v12A1.5 1.5 0 0 0 3.5 16h9a1.5 1.5 0 0 0 1.5-1.5v-12A1.5 1.5 0 0 0 12.5 1h-.585c.055.156.085.325.085.5V2a1.5 1.5 0 0 1-1.5 1.5h-5A1.5 1.5 0 0 1 4 2v-.5c0-.175.03-.344.085-.5Zm6.769 6.854-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 9.793l2.646-2.647a.5.5 0 0 1 .708.708Z" />
                </svg>&nbsp;&nbsp;&nbsp;<p6>DADOS DE FATURAÇÃO</p6>
            </div>
        </div>
    </div>
    <div class="container mt-4">
        <div class="row">
            <div class="col-5">
                <p6>NIF</p6>
            </div>
            <div class="col-2"></div>
            <div class="col-5">
                <p6>IBAN</p6>
            </div>
        </div>
    </div>
    <div class="container mt-1">
        <div class="row">
            <div class="col-5">
                <?php
                $pedido = "SELECT * FROM utilizador";
                $resultado = $ligacao->query($pedido);

                if ($resultado->num_rows > 0) {
                    while ($row = $resultado->fetch_assoc()) {
                ?>
                        <div class="col-12 align-self-center">
                            <form>
                                <fieldset disabled>
                                    <div class="mb-3">
                                        <label for="disabledTextInput" class="form-label">
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
            <div class="col-2"></div>
            <div class="col-5">
                <?php
                $pedido = "SELECT * FROM utilizador";
                $resultado = $ligacao->query($pedido);

                if ($resultado->num_rows > 0) {
                    while ($row = $resultado->fetch_assoc()) {
                ?>
                        <div class="col-12 align-self-center">
                            <form>
                                <fieldset disabled>
                                    <div class="mb-3">
                                        <label for="disabledTextInput" class="form-label">
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
            <div class="col-12">
                <hr>
            </div>
        </div>
    </div>
    <p></p>
    <!------------------------------------------------------------------------------------------------------------------------------------------------->
    <!-------------------------------------------------------BOTÕES----------------------------------------------------------------------------->
    <div class="container mt-4">
        <div class="row">
        <div class="col-1"></div>
            <div class="col-4">
                <center>
                        <button style="border-radius: 10px;">
                            <h8>
                                <font size="2">CANCELAR</font>
                            </h8>
                        </button>
                </center>
            </div>
            <div class="col-2"></div>
            <div class="col-4">
                <center>
                        <button style="border-radius: 10px;">
                            <h8>
                                <font size="2">ALTERAR</font>
                            </h8>
                        </button>
                </center>
            </div>
            <div class="col-1"></div>
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