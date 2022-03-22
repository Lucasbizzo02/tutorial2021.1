<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

</head>
<body style="background-color: #000000;">

<!--Inicio Menu-->
<nav class="navbar navbar-expand-lg navbar-light bg-info">
    <div class="container-fluid">
        <img src="../IMAGEM/logo.png" width="150px">
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
      </div>
    </div>
  </nav>

  <!--Fim menu-->

  <!--INICIO LOGIN-->

<div class="col-2" method="POST" action="site.php"style="margin-left: 650px; padding: 15px;  border: 4px solid blue; border-radius: 12px; margin-top: 100px;">
    
    <div class="form-group mb-4">
    <label for="floatingInput" class="control-label"></label>
    <input type="email" class="form-control" id="floatingInput" placeholder="E-mail" name="email">
    </div>

    <div class="form-group">
    <label for="floatingPassword" class="control-label"></label>
    <input type="password" class="form-control" id="floatingPassword" placeholder="Senha" name="senha">
    <br>
    <a href="../site.php"> <input class="btn btn-primary" type="submit" value="Entrar" style="margin-left: 72px"></a>
    </div>
    
</div>

<!--FIM LOGIN--> 

<br><br><br><br><br><br><br><br><br><br>

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

<?php
if(isset($_POST['btn-logar'])){

//CONEXÃO AO BANCO DE DADOS:
require_once("./app/scripts/conecta.php");

//DECLARAÇÃO DE VARIÁVEIS:
$email = $_POST['email'];
$senha = $_POST['senha'];

//MONTAGEM DA QUERY:
$query = $conecta->prepare("SELECT * FROM tb_login WHERE email = :EMAIL AND senha = :SENHA");

//EXECUTAR A QUERY:
$query->execute(array(
    ':EMAIL'=>$email,
    ':SENHA'=>$senha
));

$users = $query->fetchAll(PDO::FETCH_ASSOC);
var_dump($users);
    
    //VERIFICAR SE TEM DADOS NA TABELA
    // COUNT - VERIFICA O TAMANHO DO ARRAY
        if(count($users)<=0){
            echo "Email e Senha não encontrados";
        }else{
            $acheiVc =  $users[0];
            session_start();
            $_SESSION['nome'] = $acheiVc['nome'];
            $_SESSION['email'] = $acheiVc['email'];
            $_SESSION['nivel'] = $acheiVc['nivel'];
            //Verifica se o usuário está logado:
            $_SESSION['login'] = true;
            header("Location: ./includes/home.php");
        }
}
?>