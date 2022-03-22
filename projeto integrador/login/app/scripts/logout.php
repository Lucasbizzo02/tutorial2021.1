<?php
//INICIAR SESSÃO:
session_start();

//MUDAR STATUS DA CONEXÃO:
$_SESSION['login'] = false;

//DESCONECTA A SESSÃO:
session_destroy();

echo "Voce se desconectou <br> ";
echo "Para acessar novamente <a href='../../index.php'>Clique aqui</a>";
?>