<?php 
    include("header.php");

?>
    <div class="login">
        <h3>Login</h3>
        <form action="processa.php" method="POST">
            <span>Usuário:</span>    
            <input type="text" name="usuario">
            <span>Senha:</span>    
            <input type="password" name="senha">
            <input type="submit" value="Entrar" name="entrar"/>
        </form>
    </div>

    <?php 
 
    include("footer.php");
?>
    