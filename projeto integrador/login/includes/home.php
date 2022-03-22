<?php
require('../app/scripts/verifica.php');
session_start();

if(logIn()){

    if($_SESSION['nivel'] == 1){
        /* echo "Seja Bem-Vindo ADM: " . $_SESSION['nome'] ."<br>"; */
        include __DIR__ . "../site.php";
    }else{
        /* echo "Seja Bem Vindo Usuário: " . $_SESSION['nome']; */
        include __DIR__ . "../site.php";
    }

    echo "<a href='../app/scripts/logout.php'>Sair</a>";

}else{
    /* header('Location: ../index.php'); */
}

/* include __DIR__ . "../../site.php"; */
?>