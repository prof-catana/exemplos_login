<?php

// Inicia a sessão
session_start();

// Define o nome do usuário
$nomeUsuario = "Visitante";
$login = "catana";
// Verifica se existe um usuário logado (apenas para demonstração)
if (isset($login)) {
  $nomeUsuario = $login;
}

// Armazena o nome do usuário na sessão
$_SESSION['usuario'] = $nomeUsuario;

echo "Olá, " . $_SESSION['usuario'] . "!";

?>
