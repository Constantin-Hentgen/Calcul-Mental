
<!DOCTYPE html>
<html>
<?php
    include 'head.php';
    //faire un système de traces historique pour comptabiliser les points
?>

    <body>
        <p id='message'>Choisissez un mode de jeu</p>
    <form id='menu'>
        <input type="button" onClick='window.location.replace("math.php");'id="Entrainement"value='💪'>
        <input type="button" id="Marathon" value="🦵">
        <input type="button" id="Top_Chrono" value="⏱">
    </form>
    </body>
</html>