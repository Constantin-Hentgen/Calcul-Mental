<?php
    if (isset($_POST['variable']) AND $_POST['variable'] == "test")
    {
        header("Location:math.php");
    }
    else
    {
        echo '<p>Incorrect password</p>';
    }
?>