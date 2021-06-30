<?php
    session_start();
    $_SESSION['nombre_A'] = 4;
    $_SESSION['nombre_B'] = 5;
    $_SESSION['operation'] = '+';
    $_SESSION['counter'] = 0;
?>
<!DOCTYPE html>
<html>
    <body>
        <p><strong>Entrez le mot de passe</strong></p>
    
        <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
            <input type="password" name="variable" autofocus autocomplete="off"/>
        </form>
        <?php
            include 'head.php';
            include "verify.php";
        ?>
    </body>
</html>