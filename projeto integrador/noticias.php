<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>+Noticias</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    
</head>
<body style="background-color: #000000;">

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
    
<!--Inicio carrosel-->
<div class="card mb-2 col-md-8" style="margin-left: 220px; margin-top: 10px;">
  <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <a href="https://www.lance.com.br/champions-league/virou-passeio-bayern-faz-a-no-rb-salzburg-com-tres-de-lewandowski-e-vai-as-quartas-de-final-da-champions.html"><img src="IMAGEM/bayern.jpg" class="d-block w-100"></a>
      </div>
      <div class="carousel-item">
        <a href="//ge.globo.com/futebol/times/fluminense/noticia/2022/03/10/analise-dopado-pela-torcida-fluminense-tira-invencibilidade-do-olimpia-e-poe-pe-na-fase-de-grupos.ghtml"><img src="IMAGEM/transferir.png" class="d-block w-100"></a>
      </div>
      <div class="carousel-item">
        <a href="https://ge.globo.com/futebol/times/vasco/noticia/2022/03/10/eliminado-da-copa-do-brasil-e-de-bolso-vazio-delegacao-do-vasco-retorna-ao-rio.ghtml"><img src="IMAGEM/vasco.jpg" class="d-block w-100"></a>
      </div>
    </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
</div>
 <!--Fim carrosel-->


<!--INICIO AREA CARD-->
 <hr style="color: #F9F9F9;">
 <div class="row row-cols-1 row-cols-md-3 g-4 col-md-8" style="margin-left: 220px;">
   <div class="col-4">
     <div class="card h-100">
       <img src="IMAGEM/Raphinha.jpg" class="card-img-top" alt="...">
       <div class="card-body">
         <a href="https://ge.globo.com/futebol/futebol-internacional/noticia/2022/03/14/em-alta-na-selecao-brasileira-raphinha-e-alvo-de-barcelona-e-liverpool-afirma-jornalista.ghtml"> <h5 class="card-title">Raphinha</h5></a>
         <p class="card-text">Barcelona e Liverpool entra na briga pelo brasileiro.</p>
       </div>
     </div>
   </div>
   <div class="col-4">
     <div class="card h-100">
       <img src="IMAGEM/zagueiro-pablo.jpg" class="card-img-top" alt="...">
       <div class="card-body">
         <a href="https://extra.globo.com/esporte/flamengo/zagueiro-pablo-posa-com-bandeira-do-flamengo-antes-de-anuncio-oficial-25431983.html"><h5 class="card-title">Flamengo</h5></a>
         <p class="card-text">Xerife novo chegando.</p>
       </div>
     </div>
   </div>
   <div class="col-4">
     <div class="card h-100">
       <img src="IMAGEM/flamengo.jpeg" class="card-img-top" alt="...">
       <div class="card-body">
         <a href="https://ge.globo.com/espiao-estatistico/noticia/2022/03/14/destaque-do-flamengo-arrascaeta-e-o-3o-na-elite-do-pais-a-superar-marca-de-50-assistencias-por-um-clube.ghtml"><h5 class="card-title">Arrascaeta</h5></a>
         <p class="card-text">Uruguaio chega ao 3º lugar no pais em número de assistência.</p>
       </div>
     </div>
   </div>
 </div>

 <!--FIM AREA CARD-->



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