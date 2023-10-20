<?php include_once("ligacao.php");
session_start();

if (!isset($_SESSION['userAdminEmail']) or !isset($_SESSION['userAdminPasswd'])) {
    header("Location: loginadmin.php");
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
    <?php include 'header_admin.php'; ?>
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
            font-size: medium;
            color: #FED969;
        }

        hr {
            width: 100%;
            background: #FED969;
            height: 5px;
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
    </style>
    <?php
    $id = $_GET['id'];
    $consulta = "SELECT * FROM utilizador WHERE id = $id";
    $resultado = $ligacao->query($consulta);

    if ($resultado->num_rows > 0) {
        while ($row = $resultado->fetch_assoc()) {
    ?>
            <div style="background: url(Imagens/Plantel/Banner_Jogador.jpg) ; padding:50px;">
                <center>
                    <p4 class="display-4">Utilizador <?php echo $row['id'] ?></p4>
                </center>
            </div>

            <div class="container mb-5 mt-5">
                <div class="row">
                    <div class="col-12 mb-5">
                        <form action="validar_editar_utilizador.php" method="POST" enctype="multipart/form-data">
                            <div class="form-group">
                                <label>
                                    <p7>ID</p7>
                                </label>
                                <input type="text" class="form-control mb-4" name="id" value="<?php echo $row['id'] ?>" style="color: #BABBBC; font-family: avalors;" readonly>

                                <label>
                                    <p7>Nome</p7>
                                </label>
                                <input type="text" class="form-control mb-4" name="nome" value="<?php echo $row['nome'] ?>" style="color: #BABBBC; font-family: avalors;">

                                <label>
                                    <p7>Apelido</p7>
                                </label>
                                <input type="text" class="form-control mb-4" name="apelido" value="<?php echo $row['apelido'] ?>" style="color: #BABBBC; font-family: avalors;">

                                <label>
                                    <p7>Email</p7>
                                </label>
                                <input type="email" class="form-control mb-4" name="email" value="<?php echo $row['email'] ?>" style="color: #BABBBC; font-family: avalors;">

                                <label>
                                    <p7>Password</p7>
                                </label>
                                <input type="password" class="form-control mb-4" name="passwd" value="<?php echo $row['passwd'] ?>" style="color: #BABBBC; font-family: avalors;">

                                <label>
                                    <p7>Data de Nascimento</p7>
                                </label>
                                <input type="date" class="form-control mb-4" name="data_nascimeto" value="<?php echo $row['data_nascimento'] ?>" style="color: #BABBBC; font-family: avalors;">

                                <label>
                                    <p7>Telemóvel</p7>
                                </label>
                                <input type="text" maxlength="9" class="form-control mb-4" name="preco_socio" value="<?php echo $row['telemovel'] ?>" style="color: #BABBBC; font-family: avalors;">

                                <label>
                                    <p7>Morada</p7>
                                </label>
                                <input type="text" class="form-control mb-4" name="morada" value="<?php echo $row['morada'] ?>" style="color: #BABBBC; font-family: avalors;">

                                <label>
                                    <p7>Código Postal</p7>
                                </label>
                                <input type="text" maxlength="8" class="form-control mb-4" name="codigo_postal" value="<?php echo $row['codigo_postal'] ?>" style="color: #BABBBC; font-family: avalors;">

                                <label>
                                    <p7>Cidade</p7>
                                </label>
                                <input type="text" class="form-control mb-4" name="cidade" value="<?php echo $row['cidade'] ?>" style="color: #BABBBC; font-family: avalors;">

                                <label>
                                    <p7>NIF</p7>
                                </label>
                                <input type="text" class="form-control mb-4" name="nif" value="<?php echo $row['nif'] ?>" style="color: #BABBBC; font-family: avalors;">

                                <label>
                                    <p7>IBAN</p7>
                                </label>
                                <input type="text" maxlength="25" class="form-control mb-4" name="iban" value="<?php echo $row['iban'] ?>" style="color: #BABBBC; font-family: avalors;">

                                <label>
                                    <p7>Nível</p7>
                                </label>
                                <input type="text" class="form-control mb-4" name="nivel" value="<?php echo $row['nivel'] ?>" style="color: #BABBBC; font-family: avalors;">

                                <label>
                                    <p7>Sócio</p7>
                                </label>
                                <input type="text" class="form-control mb-4" name="socio" value="<?php echo $row['socio'] ?>" style="color: #BABBBC; font-family: avalors;">

                                <label>
                                    <p7>Categoria de Sócio</p7>
                                </label>
                                <select class="form-select" aria-label="Default select example" name="categoria_socio" style="color: #BABBBC; font-family: avalors;">
                                    <option value="Adulto">Adulto</option>
                                    <option value="Reformado">Reformado</option>
                                    <option value="Estudante">Estudante</option>
                                    <option value="Criança">Criança</option>
                                    <option value="Correspondente">Correspondente</option>
                                </select>
                                <p></p>
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
                        </form>
                <?php
            }
        } else {
            echo "Sem resultados...";
        }
                ?>
                    </div>
                </div>
            </div>


            <?php include 'footer.php'; ?>

            <!-- JavaScript Bundle with Popper -->
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>

</html>