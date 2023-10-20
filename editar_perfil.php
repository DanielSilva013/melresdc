<?php include_once("ligacao.php");
session_start();

if (!isset($_SESSION['userEmail']) or !isset($_SESSION['userPasswd'])) {
    header("Location: login.php");
}
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="Imagens/Logotipo.png">
    <title>Melres DC</title>

    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>

<body>
    <?php include 'header_conta.php'; ?>
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
            background: #FED969;
            height: 5px;
        }

        .hr1 {
            width: 100%;
            background: #BABBBC;
            height: 4px;
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

        p4 {
            font-family: avalors;
            color: #212529;
            font-size: medium;
        }

        scroll-container {
            display: block;
            margin: 0 auto;
        }


        scroll-container {
            display: block;
            width: 645;
            height: 420px;
            overflow-y: scroll;
            scroll-behavior: smooth;
        }

        scroll-page {


            justify-content: center;
            height: 100%;

        }

        p3 {
            font-family: avalors;
            font-weight: regular;
            color: #BABBBC;
            text-align: justify;
            font-size: small;
        }

        body {
            background-color: #212529;
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

        /*--------------------------------------------BOTAO 1--------------------------------------------*/
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

        /*--------------------------------------------BOTAO 2--------------------------------------------*/

        .button2 {
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

        .button2:before {
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

        .button2:hover,
        .button2:focus,
        .button2:active {
            color: #212529;
        }

        .button2:hover:before,
        .button2:focus:before,
        .button2:active:before {
            -webkit-transform: scaleY(1);
            transform: scaleY(1);
        }

        .button2 h8 {
            color: #FED969;
            font-family: avalors;
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

        ::placeholder {
            font-family: avalors;
            color: #212529;
            opacity: 50%;

        }

        input[type=file] {
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

        input[type=file]:focus {
            background: #212529;
            border-color: #FFD968;

        }

        ::placeholder {
            font-family: avalors;
            color: #212529;
            opacity: 50%;

        }

        p6 {
            font-family: avalors;
            text-align: justify;
            font-size: small;
            color: WHITE;
        }

        p12 {
            font-family: avalors;
            text-align: justify;
            font-size: medium;
            color: #FED969;
        }

        select[class=form-select] {
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

        select[class=form-select]:focus {
            background: #212529;
            border-color: #FFD968;

        }

        input[type=date] {
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

        input[type=date]:focus {
            background: #212529;
            border-color: #FFD968;

        }

        input[type="date"]::-webkit-calendar-picker-indicator {
            cursor: pointer;
            filter: invert(1.8) brightness(100%) sepia(100%) saturate(100%) hue-rotate(240deg);
        }

        select[class="form-select"]::-webkit-appearance {
            color: #FED969;
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
                    <p4 class="display-4">Editar Perfil de <?php echo $row['nome'] ?></p4>
                </center>
            </div>
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
                    <div class="col-6">
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="#FFD968" class="bi bi-person-fill" viewBox="0 0 16 16">
                            <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3Zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z" />
                        </svg>&nbsp;&nbsp;&nbsp;<p12>DADOS PESSOAIS</p12>
                    </div>
                    <div class="col-6">
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="#FED969" class="bi bi-box-seam-fill" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M15.528 2.973a.75.75 0 0 1 .472.696v8.662a.75.75 0 0 1-.472.696l-7.25 2.9a.75.75 0 0 1-.557 0l-7.25-2.9A.75.75 0 0 1 0 12.331V3.669a.75.75 0 0 1 .471-.696L7.443.184l.01-.003.268-.108a.75.75 0 0 1 .558 0l.269.108.01.003 6.97 2.789ZM10.404 2 4.25 4.461 1.846 3.5 1 3.839v.4l6.5 2.6v7.922l.5.2.5-.2V6.84l6.5-2.6v-.4l-.846-.339L8 5.961 5.596 5l6.154-2.461L10.404 2Z" />
                        </svg>&nbsp;&nbsp;&nbsp;<p12>DADOS de Entrega</p12>
                    </div>
                </div>
            </div>
            <form action="validar_editar_perfil.php" method="POST" enctype="multipart/form-data">
                <div class="container mt-4">
                    <div class="row">
                        <div class="col-3">

                            <div class="form-group">
                                <label>
                                    <p6>Número de Utilizador</p6>
                                </label>
                                <input type="text" class="form-control mb-4" name="id" value="<?php echo $row['id'] ?>" style="color: #BABBBC; font-family: avalors;" readonly>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="form-group">
                                <label>
                                    <p6>PRIMEIRO NOME</p6>
                                </label>
                                <input type="text" class="form-control mb-4" name="nome" value="<?php echo $row['nome'] ?>" style="color: #BABBBC; font-family: avalors;" required>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label>
                                    <p6>Morada</p6>
                                </label>
                                <input type="text" class="form-control mb-4" name="morada" value="<?php echo $row['morada'] ?>" style="color: #BABBBC; font-family: avalors;" required>

                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-3">
                            <div class="form-group">
                                <label>
                                    <p6>Data de Nascimento</p6>
                                </label>
                                <input type="date" class="form-control mb-4" name="data_nascimento" value="<?php echo $row['data_nascimento'] ?>" style="color: #BABBBC; font-family: avalors;" required>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="form-group">
                                <label>
                                    <p6>Apelido</p6>
                                </label>
                                <input type="text" class="form-control mb-4" name="apelido" value="<?php echo $row['apelido'] ?>" style="color: #BABBBC; font-family: avalors;" required>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="form-group">
                                <label>
                                    <p6>Código Postal</p6>
                                </label>
                                <input type="text" maxlength="8" class="form-control mb-4" name="codigo_postal" value="<?php echo $row['codigo_postal'] ?>" style="color: #BABBBC; font-family: avalors;" required>

                            </div>
                        </div>
                        <div class="col-3">
                            <div class="form-group">
                                <label>
                                    <p6>Cidade</p6>
                                </label>
                                <input type="text" class="form-control mb-4" name="cidade" value="<?php echo $row['cidade'] ?>" style="color: #BABBBC; font-family: avalors;" required>

                            </div>
                        </div>
                    </div>
                </div>
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
                        <div class="col-6">
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="#FED969" class="bi bi-chat-dots-fill" viewBox="0 0 16 16">
                                <path d="M16 8c0 3.866-3.582 7-8 7a9.06 9.06 0 0 1-2.347-.306c-.584.296-1.925.864-4.181 1.234-.2.032-.352-.176-.273-.362.354-.836.674-1.95.77-2.966C.744 11.37 0 9.76 0 8c0-3.866 3.582-7 8-7s8 3.134 8 7zM5 8a1 1 0 1 0-2 0 1 1 0 0 0 2 0zm4 0a1 1 0 1 0-2 0 1 1 0 0 0 2 0zm3 1a1 1 0 1 0 0-2 1 1 0 0 0 0 2z" />
                            </svg>&nbsp;&nbsp;&nbsp;<p12>Contactos</p12>
                        </div>
                        <div class="col-6">
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="#FED969" class="bi bi-clipboard2-check-fill" viewBox="0 0 16 16">
                                <path d="M10 .5a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5.5.5 0 0 1-.5.5.5.5 0 0 0-.5.5V2a.5.5 0 0 0 .5.5h5A.5.5 0 0 0 11 2v-.5a.5.5 0 0 0-.5-.5.5.5 0 0 1-.5-.5Z" />
                                <path d="M4.085 1H3.5A1.5 1.5 0 0 0 2 2.5v12A1.5 1.5 0 0 0 3.5 16h9a1.5 1.5 0 0 0 1.5-1.5v-12A1.5 1.5 0 0 0 12.5 1h-.585c.055.156.085.325.085.5V2a1.5 1.5 0 0 1-1.5 1.5h-5A1.5 1.5 0 0 1 4 2v-.5c0-.175.03-.344.085-.5Zm6.769 6.854-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 9.793l2.646-2.647a.5.5 0 0 1 .708.708Z" />
                            </svg>&nbsp;&nbsp;&nbsp;<p12>DADOS de Faturação</p12>
                        </div>
                    </div>
                </div>
                <div class="container mt-4">
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <label>
                                    <p6>Email</p6>
                                </label>
                                <input type="text" class="form-control mb-4" name="email" value="<?php echo $row['email'] ?>" style="color: #BABBBC; font-family: avalors;" required>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label>
                                    <p6>NIF</p6>
                                </label>
                                <input type="text" maxlength="9" class="form-control mb-4" name="nif" value="<?php echo $row['nif'] ?>" style="color: #BABBBC; font-family: avalors;" required>

                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <label>
                                    <p6>Telemóvel</p6>
                                </label>
                                <input type="text" maxlength="9" class="form-control mb-4" name="telemovel" value="<?php echo $row['telemovel'] ?>" style="color: #BABBBC; font-family: avalors;" required>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label>
                                    <p6>Iban</p6>
                                </label>
                                <input type="text" maxlength="25" class="form-control mb-4" name="iban" value="<?php echo $row['iban'] ?>" style="color: #BABBBC; font-family: avalors;" required>

                            </div>

                        </div>
                    </div>
                </div>
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
                <div class="container mt-2">
                    <div class="row">
                        <div class="col-4"></div>
                        <div class="col-2">
                            <center>
                                <button type="reset" class="button1">
                                    <h8>Cancelar</h8>
                                </button>
                            </center>
                        </div>
                        <div class="col-2">
                            <center>
                                <button type="submit" class="button1" name="submitform">
                                    <h8>Gravar</h8>
                                </button>
                            </center>
                        </div>
                        <div class="col-4"></div>
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

            </form>
    <?php
        }
    } else {
        echo "Sem resultados...";
    }
    ?>



    <!------------------FOOTER-------------------------------------------------------------------->
    <?php include 'footer.php'; ?>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>

</html>