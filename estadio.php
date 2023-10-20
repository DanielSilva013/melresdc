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
    <link href="css.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</head>

<body>
    <?php include 'header.php'; ?>
    <!-------------------------------------CSS-------------------------------------------------------------------------------------------------->
    <style>
        p2 {
            font-family: avalors;
            text-align: justify;
            font-size: medium;
            color: #FFD968;
        }

        p3 {
            font-family: "LEMON MILK Regular";
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

        p6 {
            font-family: "LEMON MILK Regular";
            font-size: small;
            color: white;
            text-align: justify;
        }

        hr {
            width: 100%;
            background: #ffe18d;
            height: 5px;
        }

        h6 {
            font-family: avalors;
            color: #212529;
        }

        p7 {
            font-family: "LEMON MILK Regular";
            font-size: medium;
            color: white;
            text-align: justify;
        }
    </style>

    <!------------------------------------------------------------------------------------------------------------------------------------------>
    <img src="Imagens/Carrossel/Bandeira_Carrossel.png" width="1900px">
    <!----------------------------------------------------------------------------------------------------------------->
    <p></p>
    <div class="container mt-5">
        <div class="row">
            <div class="col-12">
                <center>
                    <table width="1296px" bgcolor="#FED969" height="40px">
                        <tr>
                            <td>
                                <center>
                                    <p>
                                    <h6>Estádio</h6>
                                    </p>
                                </center>
                            </td>
                        </tr>
                    </table>
                </center>
            </div>
        </div>
    </div>
    <!----------------------------------------------------------------------------------------------------------------->
    <div class="container mt-4">
        <div class="row">
            <div class="col-12">
                <p6>
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.<p></p>
                    It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).
                </p6>
                <hr>
            </div>
        </div>
    </div>
    <!--------------------------------Carroseel----------------------------------------------------------------------->
    <div class="container mt-4">
        <div class="row">
            <div class="col-12 align-self-center">
            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <a href="loja.php"><img src="Imagens/Estádio/carrossel_estadio_1.jpg" class="d-block w-100" alt="..."></a>
            </div>
            <div class="carousel-item">
                <a href="bilheietira.php"><img src="Imagens/Estádio/carrossel_estadio_2.jpg" class="d-block w-100" alt="..."></a>
            </div>
            <div class="carousel-item">
                <a href="classificacao.php"><img src="Imagens/Estádio/carrossel_estadio_3.jpg" class="d-block w-100" alt="..."></a>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
            </div>
        </div>

    </div>
    <p></p>
    <div class="container mt-4">
        <div class="row">
            <div class="col-12">
                <hr>
            </div>
        </div>
    </div>
    
    <p></p>
    <!--------------------------------------------LOCALIZAÇÃO-------------------------------------------------------------------------------------------------->
    <div class="container mt-4">
        <div class="row">
            <div class="col-12">
                <center>
                    <table width="1296px" bgcolor="#FED969" height="40px">
                        <tr>
                            <td>
                                <center>
                                    <p>
                                    <h6>Localização</h6>
                                    </p>
                                </center>
                            </td>
                        </tr>
                    </table>
                </center>
            </div>
        </div>
    </div>
    <div class="container mt-4">
        <div class="row">
            <div class="col-12">
                <center>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12032.859982093953!2d-8.407458101690207!3d41.06429288744081!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd2486aab7910bed%3A0x8cb78f3f73789651!2sCampo%20De%20Futebol%20De%20Melres!5e0!3m2!1spt-PT!2spt!4v1673393697302!5m2!1spt-PT!2spt" width="1296" height="500" frameborder="2" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </center>
            </div>
        </div>
    </div>
    <p></p>
    <div class="container mt-4">
        <div class="row">
            <div class="col-12">
                <hr>
            </div>
        </div>
    </div>
    <p></p>
    <!-------------------------------------------FOOTER--------------------------------------------------------------------------------------------->
    <?php include 'footer.php'; ?>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>


</html>