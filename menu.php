
<!DOCTYPE html>
<html>
<?php
    include 'head.php';
    //faire un système de traces historique pour comptabiliser les points
?>

    <body>
        <p id='message'>Choississez un mode de jeu</p>
    <form id='menu'>
        <input type="button" onClick='window.location.replace("math.php");'id="Entrainement"value="A">
        <input type="button" id="Marathon" value="B">
        <input type="button" id="Top Chrono" value="C">
    </form>
    <?php
        echo "<strong>",isset($_POST['Entrainement']),"</strong>";
        $gender = '';
    ?>
    </body>
</html>