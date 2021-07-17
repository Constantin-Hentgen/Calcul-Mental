
<!DOCTYPE html>
<html>
<?php
    include 'head.php';
    //faire un système de traces historique pour comptabiliser les points
?>

    <body id="invisible">
    <form id='menu'>
        <div id="up">
            <input type="button" onClick='window.location.replace("marathon.php");' id="Marathon" value="🦵">
            <input type="button" onClick='window.location.replace("entrainement.php");' id="Entrainement"value='💪'>
        </div>

        <div id="down">
            <input type="button" onClick='window.location.replace("trou.php");' id="trou" value="🕳">
            <input type="button" onClick='window.location.replace("top_chrono.php");' id="Top_Chrono" value="⏱">
        </div>
    </form>
    </body>
</html>