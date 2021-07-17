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
        header("Refresh:3;url=menu.php");
    }
    elseif (isset($_POST["variable"]) == false)
    {}
    elseif (isset($_SESSION['tentatives'])===false){
        $_SESSION['tentatives'] = 0;
    }
    else
    {
        $_SESSION['tentatives'] += 1;
        if ($_SESSION['tentatives']>4){
            $_SESSION['tentatives'] = 0;
            echo "<script>document.body.style.display = 'none';</script>";
        }
        elseif ($_SESSION['tentatives'] ==1){
            echo "<p>",$_SESSION['tentatives']," mot de passe incorrect</p>";
        }
        else{
            echo "<p>",$_SESSION['tentatives']," mots de passe incorrects</p>";
        }
    }
?>