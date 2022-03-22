<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projeto Integrador</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

</head>
<body style="background-color: #000000;">
    <!--Inicio Menu-->
    <nav class="navbar navbar-expand-lg navbar-light bg-info">
        <div class="container-fluid">
            <img src="IMAGEM/logo.png" width="150px">
          <a class="navbar-brand" href="site.php">Interact Futebol</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="noticias.php">+Noticias</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="quemsomos.php">Quem somos</a>
              </li>
            </ul>
            <form class="d-flex">
              <input class="form-control me-2" type="search" placeholder="Pesquise" aria-label="Search">
              <button class="btn btn-outline-dark" type="submit">Pesquise</button>
            </form>
          </div>
        </div>
      </nav>

      <!--Fim menu-->

      <!--Inicio Corpo-->

      <!-- INÍCIO NOTICIA PRINCIPAL -->
      <div class="card mb-2 col-md-8" style="margin-left: 250px; margin-top: 15px;">
        <a href="https://www.lance.com.br/galerias/galeria-veja-como-esta-o-novo-gramado-do-maracana-para-receber-flamengo-e-fluminense/"><img src="IMAGEM/maracana.jpg" width="400px" class="card-img-top img-fluid d-block"></a>
        <div class="card-body">
          <h5 class="card-title">>MARACANÃ</h5>
          <p class="card-text">Como ficou o novo gramado. </p>
        </div>
      </div>
      <!-- FIM NOTÍCIA PRINCIPAL  -->
      <br>

      <!-- INÍCIO ÁREA POSTAGEM  -->
  
      <div class="row row-cols-1 row-cols-md-2 g-4" style="margin-left: 350px;">
        <div class="col-md-4">
          <div class="card">
            <a href="https://ge.globo.com/futebol/times/palmeiras/noticia/2022/03/10/noticias-palmeiras-abel-ferreira-granada-benfica.ghtml"><img src="IMAGEM/abel-ferreira.jpeg" class="card-img-top img-fluid d-block" width="250px" height="300px"></a>
            <div class="card-body">
              <h5 class="card-title">Abel Ferreira</h5>
              <p class="card-text">Dois times na disputa pelo técnico.</p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card">
            <a href="https://ge.globo.com/futebol/futebol-internacional/futebol-ingles/noticia/2022/03/10/patrocinadora-do-chelsea-rompe-contrato-e-exige-retirada-imediata-da-marca-na-camisa.ghtml"><img src="IMAGEM/jorginho-11.webp" class="card-img-top img-fluid d-block" width="250px" height="300px"></a>
            <div class="card-body">
              <h5 class="card-title">Chelsea</h5>
              <p class="card-text">Patrocinador rompe contrato.</p>
            </div>
          </div>
        </div>
      </div>

      <!--FIM ÁREA POSTAGEM -->
<br>

    <h3 style="color: #F9F9F9; margin-left: 15px;">Mais visitados</h3>
    <hr style="color: #F9F9F9;">
      <div class="row row-cols-1 row-cols-md-3 g-4 col-sm-8" style="margin-left: 220px;">
        <div class="col-md-4">
          <div class="card h-100">
            <img src="IMAGEM/treinadores.jpg" class="card-img-top img-fluid d-block" alt="...">
            <div class="card-body">
              <a href="https://ge.globo.com/pe/futebol/noticia/2022/03/10/renato-gaucho-luxemburgo-cuca-e-mais-veja-lista-de-tecnicos-sem-contrato-e-livres-no-mercado.ghtml"> <h5 class="card-title">Treinadores livres no mercado</h5></a>
              <p class="card-text">Seu time estar precisando de treinador? Veja quem estar livre no mercado.</p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card h-100">
            <img src="IMAGEM/neymar.jfif" class="card-img-top img-fluid d-block" alt="...">
            <div class="card-body">
              <a href="https://ge.globo.com/futebol/futebol-internacional/liga-dos-campeoes/noticia/2022/03/10/neymar-e-donnarumma-brigam-e-precisam-ser-separados-no-vestiario-do-psg-diz-jornal.ghtml"><h5 class="card-title">Desentendimento</h5></a>
              <p class="card-text">Confusão no vestiario do psg.</p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card h-100">
            <img src="IMAGEM/benzema.jpeg" class="card-img-top img-fluid d-block" alt="...">
            <div class="card-body">
              <a href="https://ge.globo.com/futebol/futebol-internacional/noticia/2022/03/10/em-noite-magica-benzema-bate-recordes-e-vira-o-terceiro-maior-artilheiro-do-real-madrid.ghtml"><h5 class="card-title">Real Madrid</h5></a>
              <p class="card-text">Noite mágica do Benzema.</p>
            </div>
          </div>
        </div>
      </div>

    <!--Fim Corpo-->

<br><br>
<div class="card bg-info">
  <div class="card-body">
    <p class="align-center">© Copyright 2022</p>
    <a href="#" class="btn btn-dark">Quem somos</a>
    <a href="#" class="btn btn-dark">Contato</a>
    <a href="#" class="btn btn-outline-dark ml-2"> 
      <i class="fab fa-facebook"></i>
    </a>
    <a href="#" class="btn btn-outline-dark ml-2">
      <i class="fab fa-twitter"></i>
    </a>
    </a>
    <a href="#" class="btn btn-outline-dark ml-2">
    <i class="fab fa-instagram"></i>
    </a>
    </a>
    <a href="#" class="btn btn-outline-dark ml-2">
    <i class="fab fa-youtube"></i>
    </a>
  </div>
</div>

 <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>   
</body>
</html>