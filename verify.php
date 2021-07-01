<?php
    if (isset($_POST['variable']) AND $_POST['variable'] == "test")
    {
        echo "
        <script>
            document.getElementById('form').style.display = 'none';
            document.getElementById('message').innerHTML = 'Bienvenue';
            document.getElementById('message').style.fontSize = '100px';
            document.getElementById('message').style.color = 'yellowgreen';
            document.body.style.width = '100%';
            document.body.style.height = '100%';
            document.body.style.padding = '0';
            document.body.style.margin = '0';
            document.style.height = '100%';
            document.style.width = '100%';
            document.body.style.color = 'black';
            document.getElementById('message').style.color = '#282828';
        </script>";
        header("Refresh:3;url=menu.php");//math.php
    }
    elseif (isset($_POST["variable"]) == false)
    {}
    else
    {
        echo "<small>Mot de passe incorrect</small>";
    }
?>