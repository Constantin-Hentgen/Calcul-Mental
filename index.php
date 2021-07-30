<?php
    session_start();
    $_SESSION['ultimate_counter'] = 0;
?>

<!DOCTYPE html>
<html>

<?php
    include 'head.php';
?>

    <body>
        <p id='message'>Entrez le mot de passe :</p>
    
        <form id = 'form' action="<?=$_SERVER['PHP_SELF']?>" method="post">
            <input id='password' type="password" name="variable" autofocus autocomplete="off"/>
        </form>
        <?php
            include "verify.php";
        ?>
    </body>
</html>