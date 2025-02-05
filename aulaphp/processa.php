<?php
    $usuarioCadastrado = "admin";
    $senhaCadastrada = "admin123";
    
    
    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];

    echo "Seu usuario é ".$usuario." e sua senha é ".$senha;
    
    if (($usuario == $usuarioCadastrada) && ($senha == $senhaCadastrada)) {
        header("location:inicio.php");

        
    }
    else {
        header("location:processa.php");

    }

?>