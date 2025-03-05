<?php
session_start();

if(isset($_POST)){

    //verificar se o usuario existe na minha base de dados
    if($_POST['usuario'] == 'catana' && $_POST['senha'] == '1234'){

        $_SESSION['usuario'] = $_POST['usuario'];
        header('location:interno.php');
        
    } else {
        echo "Usuario não encontrado";
    }
} else {
    echo "Envie as informações";
}
?>