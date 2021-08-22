
<!DOCTYPE html>
<html>

<?php
    include 'head.php';
    $_SESSION['borneA'] = 1;
    $_SESSION['borneB'] = 9;
?>

    <body id="invisible">
    <form id='menu'>
        <div id="up">
            <input type="button" onClick='window.location.replace("setting.php");' id="settings"value='⚙'>
        </div>
        <div id="down">
            <input type="button" onClick='window.location.href="entrainement.php";' id="Entrainement" value='🏃'>
            <input type="button" onClick='window.location.href="entrainement.php";' id="Entrainement" class='rocket'value='🚀'>
            <input type="button" onClick='window.location.href="entrainement.php";' id="Entrainement" class='trophy'value='🏆'>
        </div>
        <div id="bellow">
            <input type="button" onClick='window.location.replace("setting.php");' id="about"value='💡'>
        </div>
    </form>
    </body>
</html>