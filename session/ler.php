<?php

// Inicia a sessão (necessário para acessar os dados)
session_start();

// Verifica se a sessão existe e se há um usuário armazenado
if (isset($_SESSION['usuario'])) {
  $nomeUsuario = $_SESSION['usuario'];
  echo "Bem-vindo de volta, " . $nomeUsuario . "!";
} else {
  echo "Você não está logado.";
}

?>
