<?php

// Define o nome do cookie
$nomeCookie = "meuCookie";

// Define o tempo de expiração do cookie (no passado)
$tempoExpiracao = time() - 3600; // Expirado há 1 hora

// Exclui o cookie
setcookie($nomeCookie, "", $tempoExpiracao);

echo "Cookie excluído com sucesso!";

?>
