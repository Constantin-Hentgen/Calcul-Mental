<?php
    if (isset($_POST['variable']) AND $_POST['variable'] == "test")
    {
        echo "
        <script>
            document.getElementById('form').style.display = 'none';
            document.getElementById('message').innerHTML = 'Bienvenue';
            document.body.style.background = 'aquamarine';
            document.body.style.color = 'black';
            document.getElementById('message').style.color = '#282828';
        </script>";
        header("Refresh:2;url=math.php");
    }
    elseif (isset($_POST["variable"]) == false)
    {}
    else
    {
        echo "<small>Mot de passe incorrect</small>";
    }
?>