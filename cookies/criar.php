<?php

// Define o nome do cookie
$nomeCookie = "usuario";

// Define o valor do cookie
$valorCookie = "catana";

// Define o tempo de expiração do cookie (em segundos)
$tempoExpiracao = time() + 3600; // Expira em 1 hora

// Cria o cookie
setcookie($nomeCookie, $valorCookie, $tempoExpiracao);

echo "Cookie criado com sucesso!";

?>
