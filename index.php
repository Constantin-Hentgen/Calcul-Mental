<?php
    session_start();
    $_SESSION['nombre_A'] = random_int(1,10);
    $_SESSION['nombre_B'] = random_int(1,10);
    $temp_A = random_int(1,10);
    $temp_B = random_int(1,10);
    while ($temp_A < $temp_B){
        $temp_A = random_int(1,10);
        $temp_B = random_int(1,10);
    }
    $_SESSION['nombre_A'] = $temp_A;
    $_SESSION['nombre_B'] = $temp_B;
    $dico = ['+','-','×'];
    $dico_picker = random_int(0,2);
    $_SESSION['operation'] = $dico[$dico_picker];
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
            <input id='password' type="password" name="variable" autofocus autocomplete="off"/>
        </form>
        <?php
            include "verify.php";
        ?>
    </body>
</html>