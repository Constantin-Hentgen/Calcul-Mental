<?php
    include "form.php";
    if (isset($_POST['variable']) AND ctype_digit($_POST["variable"]))
    {
        echo "<strong>",$_POST["variable"]*$_POST["variable"],"</strong>";
        //echo random_int(0,100);
    }
    else
    {
        header("math.php");
        echo "<small>Your input is wrong, try again…</small>";
    }
?>