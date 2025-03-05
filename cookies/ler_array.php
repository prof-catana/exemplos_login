<?php

// Define o nome do cookie
$nomeCookie = "meuCookieArray";

// Verifica se o cookie existe
if (isset($_COOKIE[$nomeCookie])) {

  // Obtém o valor do cookie
  $valorJson = $_COOKIE[$nomeCookie];

  // Desserializa o JSON em um array
  $valorArray = json_decode($valorJson, true);

  // Exibe os valores do array
  foreach ($valorArray as $valor) {
    echo "Valor: " . $valor . "<br>";
  }

} else {

  echo "O cookie não existe.";

}

?>
