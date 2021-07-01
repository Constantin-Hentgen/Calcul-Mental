<?php
    session_start();
    $_SESSION['nombre_A'] = 4;
    $_SESSION['nombre_B'] = 5;
    $_SESSION['operation'] = '+';
    $_SESSION['counter'] = 0;
    $_SESSION['jeu'] = '';
?>
<!DOCTYPE html>
<html>
<?php
    include 'head.php';
?>
    <body>
        <p id='message'>Entrez le mot de passe :</p>
    
        <form id = 'form' action="<?=$_SERVER['PHP_SELF']?>" method="post">
            <input type="password" name="variable" autofocus autocomplete="off"/>
        </form>
        <?php
            include "verify.php";
        ?>
    </body>
</html>