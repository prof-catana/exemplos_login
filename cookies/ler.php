<?php

// Define o nome do cookie
$nomeCookie = "meuCookie";

// Verifica se o cookie existe
if (isset($_COOKIE[$nomeCookie])) {

  // Obtém o valor do cookie
  $valorCookie = $_COOKIE[$nomeCookie];

  echo "O valor do cookie é: " . $valorCookie;
  echo "O valor do cookie é: " . $_COOKIE['usuario'];
} else {

  echo "O cookie não existe.";

}

?>
