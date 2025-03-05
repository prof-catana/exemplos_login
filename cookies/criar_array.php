<?php

// Define o nome do cookie
$nomeCookie = "meuCookieArray";

// Define o array de valores
$valorArray = array("valor1", "valor2", "valor3");

// Serializa o array em JSON
$valorJson = json_encode($valorArray);

// Define o tempo de expiração do cookie (em segundos)
$tempoExpiracao = time() + 3600; // Expira em 1 hora

// Cria o cookie
setcookie($nomeCookie, $valorJson, $tempoExpiracao);

echo "Cookie com array criado com sucesso!";

?>
