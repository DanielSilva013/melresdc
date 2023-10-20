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
<style>
    p {
        font-family: avalors;
        color: #FFD968;
        font-size: x-small;

    }

    p1 {
        font-family: avalors;
        text-align: justify;
        font-size: medium;
        color: #FFD968;
    }

    H7 {
        font-family: avalors;
        color: #202529;
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

    li {
        margin-left: 6mm;
        margin-right: 6mm;
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

    p5 {

        font-family: avalors;
        text-align: justify;
        font-size: small;
        color: #FFD968;

    }

    hr {
        height: 3px;
    }

    p3 {
        font-family: avalors;
        text-align: justify;
        font-size: small;
        color: #FFD968;
    }

    p10 {
        font-family: avalors;
        text-align: justify;
        font-size: medium;
        color: #FFD968;
    }

    .navbar-brand:hover,
    .navbar-brande:focus {
        opacity: 100%;
    }

    p11 {
        font-family: avalors;
        text-align: justify;
        font-size: xx-small;
        color: #FFD968;
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

    /*-------------------------------------------------------------------------------------------------------------------*/
</style>

<div class="col-12">
    <table width="100%" bgcolor="#202529" height="40px">
        <tbody>
            <tr>
                <td class="col">
                    <center>

                        <p5>
                            <font size="2">SITE OFICIAL DO MELRES DESPORTO E CULTURA</font>
                        </p5>

                    </center>
                </td>
            </tr>
        </tbody>
    </table>
</div>
<!------------------------------JAVA------------------------------------------------->
<script>
    $(document).ready(function() {
        $(".dropdown").hover(function() {
            var dropdownMenu = $(this).children(".dropdown-menu");
            if (dropdownMenu.is(":visible")) {
                dropdownMenu.parent().toggleClass("open");
            }
        });
    });
</script>
<!----------------------------NAVBAR PRINCIPAL-------------------------------->

<nav class="navbar navbar-expand-lg navbar-dark">
    <div class="container-fluid align-self-center justify-content-center">
        <ul class="navbar nav">
            <li>
                <a class="navbar-brand" href="index.php">
                    <div class="z-index: 5; margin-top: 30px; display: block;"><img src="Imagens/Logotipo.png" width="100" height="100" class="d-inline-block align-center" alt=""></div>
                </a>
            </li>
            <div class="collapse navbar-collapse" id="navbarNavDarkDropdown">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle anav" id="navbarDropdown1" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="color: #212529">
                        <h7>UTILIZADODRES</h7>
                    </a>
                    <div class="dropdown-content">
                        <ul class="dropdown-menu dropdown-menu-dark align-self-center">
                            <p></p>
                            <li>
                                <p10 style="color:#FFD968">
                                    <font size="3">UTILIZADODRES</font>
                                </p10>
                            </li>
                            <hr>
                            <p></p>
                            <li><a class="dropdown-item" href="admin_utilizadores.php">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="2 2 16 16" stroke="white" stroke-width="1">
                                        <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z" />
                                    </svg>
                                    <p5>Contas</p5>
                                </a></li>
                            <li><a class="dropdown-item" href="admin_encomendas.php">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="2 2 16 16" stroke="white" stroke-width="1">
                                        <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z" />
                                    </svg>
                                    <p5>Encomendas</p5>
                                </a></li>

                        </ul>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle anav" id="navbarDropdown1" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="color: #212529">
                        <h7>PRODUTOS</h7>
                    </a>
                    <div class="dropdown-content">
                        <ul class="dropdown-menu dropdown-menu-dark align-self-center">
                            <p></p>
                            <li>
                                <p10 style="color:#FFD968">
                                    <font size="3">Produtos</font>
                                </p10>
                            </li>
                            <hr>
                            <p></p>
                            <li><a class="dropdown-item" href="admin.php">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="2 2 16 16" stroke="white" stroke-width="1">
                                        <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z" />
                                    </svg>
                                    <p5>Têxtil</p5>
                                </a></li>
                            <li><a class="dropdown-item" href="admin_equipamentos.php">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="2 2 16 16" stroke="white" stroke-width="1">
                                        <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z" />
                                    </svg>
                                    <p5>Equipamentos</p5>
                                </a></li>
                            <li><a class="dropdown-item" href="admin_acessorios.php">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="2 2 16 16" stroke="white" stroke-width="1">
                                        <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z" />
                                    </svg>
                                    <p5>Acessórios</p5>
                                </a></li>
                            <li><a class="dropdown-item" href="admin_adeptos.php">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="2 2 16 16" stroke="white" stroke-width="1">
                                        <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z" />
                                    </svg>
                                    <p5>Adeptos</p5>
                                </a></li>

                        </ul>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle anav" id="navbarDropdown2" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="color: #212529">
                        <h7>Equipa</h7>
                    </a>
                    <div class="dropdown-content">
                        <ul class="dropdown-menu dropdown-menu-dark align-self-center">
                            <p></p>
                            <li>
                                <p10 style="color:#FFD968">
                                    <font size="3">EQUIPA</font>
                                </p10>
                            </li>
                            <hr>
                            <p></p>
                            <li><a class="dropdown-item" href="admin_plantel.php">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="2 2 16 16" stroke="white" stroke-width="1">
                                        <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z" />
                                    </svg>
                                    <p5>Equipa Principal</p5>
                                </a></li>
                            <li><a class="dropdown-item" href="admin_plantel.php">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="2 2 16 16" stroke="white" stroke-width="1">
                                        <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z" />
                                    </svg>
                                    <p5>Sub-23</p5>
                                </a></li>
                            <li><a class="dropdown-item" href="admin_plantel.php">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="2 2 16 16" stroke="white" stroke-width="1">
                                        <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z" />
                                    </svg>
                                    <p5>Sub-17</p5>
                                </a></li>
                            <li><a class="dropdown-item" href="admin_plantel.php">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="2 2 16 16" stroke="white" stroke-width="1">
                                        <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z" />
                                    </svg>
                                    <p5>Sub-12</p5>
                                </a></li>
                            <li><a class="dropdown-item" href="admin_plantel.php">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="2 2 16 16" stroke="white" stroke-width="1">
                                        <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z" />
                                    </svg>
                                    <p5>Sub-9</p5>
                                </a></li>
                            <li><a class="dropdown-item" href="admin_plantel.php">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="2 2 16 16" stroke="white" stroke-width="1">
                                        <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z" />
                                    </svg>
                                    <p5>Sub-7</p5>
                                </a></li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle anav" id="navbarDropdown1" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="color: #212529">
                        <h7>JOGOS</h7>
                    </a>
                    <div class="dropdown-content">
                        <ul class="dropdown-menu dropdown-menu-dark align-self-center">
                            <p></p>
                            <li>
                                <p10 style="color:#FFD968">
                                    <font size="3">Jogos</font>
                                </p10>
                            </li>
                            <hr>
                            <p></p>
                            <li><a class="dropdown-item" href="admin_resultados.php">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="2 2 16 16" stroke="white" stroke-width="1">
                                        <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z" />
                                    </svg>
                                    <p5>Resultados</p5>
                                </a></li>
                            <li><a class="dropdown-item" href="admin_classificacao.php">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="2 2 16 16" stroke="white" stroke-width="1">
                                        <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z" />
                                    </svg>
                                    <p5>Classificação</p5>
                                </a></li>
                            <li><a class="dropdown-item" href="admin_bilheteira.php">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="2 2 16 16" stroke="white" stroke-width="1">
                                        <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z" />
                                    </svg>
                                    <p5>Bilheteira</p5>
                                </a></li>

                        </ul>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle anav" id="navbarDropdown1" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="color: #212529">
                        <h7>SÓCIOS</h7>
                    </a>
                    <div class="dropdown-content">
                        <ul class="dropdown-menu dropdown-menu-dark align-self-center">
                            <p></p>
                            <li>
                                <p10 style="color:#FFD968">
                                    <font size="3">SÓCIOS</font>
                                </p10>
                            </li>
                            <hr>
                            <p></p>
                            <li><a class="dropdown-item" href="admin_socios.php">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="2 2 16 16" stroke="white" stroke-width="1">
                                        <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z" />
                                    </svg>
                                    <p5>Inscrições</p5>
                                </a></li>
                            <li><a class="dropdown-item" href="admin_quotas.php">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="2 2 16 16" stroke="white" stroke-width="1">
                                        <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z" />
                                    </svg>
                                    <p5>Quotas</p5>
                                </a></li>

                        </ul>
                    </div>
                </li>
                <li>
                    <div class="a anav">
                        <a class="nav-link" href="admin_noticias.php">
                            <H7>NOTÍCIAS</H7>
                        </a>
                    </div>
                </li>
                <li>
                    <div class="a anav">
                        <a class="nav-link" href="admin_agenda.php">
                            <H7>AGENDA</H7>
                        </a>
                    </div>
                </li>

                <li>
                    <div class="a anav">
                        <a class="nav-link" href="admin_multimedia.php">
                            <H7>MULTIMÉDIA</H7>
                        </a>
                    </div>
                </li>
                <li>
                    <div class="a anav">
                        <a href="logout_admin.php">
                            <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="#212529" class="bi bi-box-arrow-left" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M6 12.5a.5.5 0 0 0 .5.5h8a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5h-8a.5.5 0 0 0-.5.5v2a.5.5 0 0 1-1 0v-2A1.5 1.5 0 0 1 6.5 2h8A1.5 1.5 0 0 1 16 3.5v9a1.5 1.5 0 0 1-1.5 1.5h-8A1.5 1.5 0 0 1 5 12.5v-2a.5.5 0 0 1 1 0v2z" />
                                <path fill-rule="evenodd" d="M.146 8.354a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L1.707 7.5H10.5a.5.5 0 0 1 0 1H1.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3z" />
                            </svg>
                        </a>
                    </div>
                </li>
            </div>
        </ul>
    </div>
    </div>
</nav>