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
            
            <p5><font size="2">SITE OFICIAL DO MELRES DESPORTO E CULTURA</font></p5>

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
        <a class="navbar-brand" href="index.php"><div class="z-index: 5; margin-top: 30px; display: block;"><img src="Imagens/Classificação/Logotipo.png" width="100" height="100" class="d-inline-block align-center" alt=""></div></a>
      </li>
      <div class="collapse navbar-collapse" id="navbarNavDarkDropdown">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle anav" id="navbarDropdown1" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="color: #212529">
            <h7>CLUBE</h7>
          </a>
          <div class="dropdown-content">
            <ul class="dropdown-menu dropdown-menu-dark align-self-center">
              <p></p>
              <li>
                <p10 style="color:#FFD968">
                  <font size="3">CLUBE</font>
                </p10>
              </li>
              <hr>
              <p></p>
              <li><a class="dropdown-item" href="historia.php" style="color: #FED969">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="2 2 16 16" stroke="white" stroke-width="1">
                    <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z" />
                  </svg>
                  <p5>História</p5>
                </a></li>
              <li><a class="dropdown-item" href="palmares.php">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="2 2 16 16" stroke="white" stroke-width="1">
                    <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z" />
                  </svg>
                  <p5>Palmarés</p5>
                </a></li>
              <li><a class="dropdown-item" href="estadio.php">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="2 2 16 16" stroke="white" stroke-width="1">
                    <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z" />
                  </svg>
                  <p5>Estádio</p5>
                </a></li>
              <li><a class="dropdown-item" href="melrinhos.php">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="2 2 16 16" stroke="white" stroke-width="1">
                    <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z" />
                  </svg>
                  <p5>Melrinhos</p5>
                </a></li>
              <li><a class="dropdown-item" href="estrutura.php">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="2 2 16 16" stroke="white" stroke-width="1">
                    <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z" />
                  </svg>
                  <p5>Estrutura</p5>
                </a></li>
              <li><a class="dropdown-item" href="contactos.php">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="2 2 16 16" stroke="white" stroke-width="1">
                    <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z" />
                  </svg>
                  <p5>Contactos</p5>
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
              <li><a class="dropdown-item" href="equipa_principal.php">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="2 2 16 16" stroke="white" stroke-width="1">
                    <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z" />
                  </svg>
                  <p5>Equipa Principal</p5>
                </a></li>
              <li><a class="dropdown-item" href="equipa_principal.php">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="2 2 16 16" stroke="white" stroke-width="1">
                    <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z" />
                  </svg>
                  <p5>Sub-23</p5>
                </a></li>
              <li><a class="dropdown-item" href="equipa_principal.php">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="2 2 16 16" stroke="white" stroke-width="1">
                    <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z" />
                  </svg>
                  <p5>Sub-17</p5>
                </a></li>
              <li><a class="dropdown-item" href="equipa_principal.php">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="2 2 16 16" stroke="white" stroke-width="1">
                    <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z" />
                  </svg>
                  <p5>Sub-12</p5>
                </a></li>
              <li><a class="dropdown-item" href="equipa_principal.php">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="2 2 16 16" stroke="white" stroke-width="1">
                    <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z" />
                  </svg>
                  <p5>Sub-9</p5>
                </a></li>
              <li><a class="dropdown-item" href="equipa_principal.php">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="2 2 16 16" stroke="white" stroke-width="1">
                    <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z" />
                  </svg>
                  <p5>Sub-7</p5>
                </a></li>
            </ul>
          </div>
        </li>
        <li>
          <div class="a anav">
            <a class="nav-link" href="noticias.php">
              <H7>NOTÍCIAS</H7>
            </a>
          </div>
        </li>
        <li>
          <div class="a anav">
            <a class="nav-link" href="loja.php">
              <H7>LOJA</H7>
            </a>
          </div>
        </li>
        <li>
          <div class="a anav">
            <a class="nav-link" href="bilheteira.php">
              <H7>BILHETEIRA</H7>
            </a>
          </div>
        </li>
        <li>
          <div class="a anav">
            <a class="nav-link" href="agenda.php">
              <H7>AGENDA</H7>
            </a>
          </div>
        </li>

        <li>
          <div class="a anav">
            <a class="nav-link" href="socios.php">
              <H7>SÓCIOS</H7>
            </a>
          </div>
        </li>
        <li>
          <div class="a anav">
            <a class="nav-link" href="multimedia.php">
              <H7>MULTIMÉDIA</H7>
            </a>
          </div>
        </li>
        <li>
          <div class="a anav">
            <a href="pesquisa.php">
              <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="#212529">
                <path d="M23.809 21.646l-6.205-6.205c1.167-1.605 1.857-3.579 1.857-5.711 0-5.365-4.365-9.73-9.731-9.73-5.365 0-9.73 4.365-9.73 9.73 0 5.366 4.365 9.73 9.73 9.73 2.034 0 3.923-.627 5.487-1.698l6.238 6.238 2.354-2.354zm-20.955-11.916c0-3.792 3.085-6.877 6.877-6.877s6.877 3.085 6.877 6.877-3.085 6.877-6.877 6.877c-3.793 0-6.877-3.085-6.877-6.877z" />
              </svg>
            </a>
          </div>
        </li>
        <li>
          <div class="a anav">
            <a href="carrinho.php">
              <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="#212529" class="bi bi-cart-fill" viewBox="0 0 16 16">
                <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
              </svg>
            </a>
          </div>
        </li>
        <li>
          <div class="a anav">
            <a href="conta.php">
              <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="#202529" class="bi bi-person-fill" viewBox="0 0 16 16">
                <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3Zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z" />
              </svg>
            </a>
          </div>
        </li>
      </div>
    </ul>
  </div>
  </div>
</nav>