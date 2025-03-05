<?php
session_start();

if(!isset($_SESSION['usuario'])){
    echo "voce não esta logado";
    die();
}
echo "bem vindo ".$_SESSION['usuario'];

?>
<a href="sair.php">Sair</a>