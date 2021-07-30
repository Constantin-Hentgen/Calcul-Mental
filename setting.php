<?php
    session_start();
?>

<!DOCTYPE html>
<html>
    <?php
        include 'head.php';
    ?>


    <body>


    <?php
        if (isset($_POST['facile']) && $_POST['facile'] == 'Oui') 
        {
          $_SESSION['facile'] = 'oui';
          echo "Mode facile activé";
        }
        else
        {
          $_SESSION['facile'] = 'non';
            echo "Mode facile désactivé";
        }

        if (isset($_POST['intermediaire']) && $_POST['intermediaire'] == 'Oui') 
        {
          $_SESSION['intermediaire'] = 'oui';
          echo "<br>Mode intermediaire activé";
        }
        else
        {
          $_SESSION['intermediaire'] = 'non';
          echo "<br>Mode intermediaire désactivé";
        }


        if (isset($_POST['difficile']) && $_POST['difficile'] == 'Oui') 
        {
          $_SESSION['difficile'] = 'oui';
          echo "<br>Mode difficile activé";
        }
        else
        {
          $_SESSION['difficile'] = 'non';
          echo "<br>Mode difficile désactivé";
        }

        if (isset($_POST['cauchemar']) && $_POST['cauchemar'] == 'Oui') 
        {
          $_SESSION['cauchemar'] = 'oui';
          echo "<br>Mode cauchemar activé";
        }
        else
        {
          $_SESSION['cauchemar'] = 'non';
          echo "<br>Mode cauchemar désactivé";
        }
      ?>


      <h1 id='specialtitle'>Préférences</h1>
  
      <h2>Difficulté</h2>
      
      
      <form action="" method="post" id="categorie">
        <div class="selection"><input type="checkbox" name="facile" value="Oui" <?php echo ($_SESSION['facile']=='oui' ? 'checked' : '');?>>Facile</div>
        <div class="selection"><input type="checkbox" name="intermediaire" value="Oui" <?php echo ($_SESSION['intermediaire']=='oui' ? 'checked' : '');?>>Intermédiaire</div>
        <div class="selection"><input type="checkbox" name="difficile" value="Oui" <?php echo ($_SESSION['difficile']=='oui' ? 'checked' : '');?>>Difficile</div>
        <div class="selection"><input type="checkbox" name="cauchemar" value="Oui" <?php echo ($_SESSION['cauchemar']=='oui' ? 'checked' : '');?>>Cauchemar</div>
      
      <hr/>

      <h2>Type d'opération</h2>
      
        <div class="selection"><input type="checkbox" name="facile" value="Oui">Addition</div>
        <div class="selection"><input type="checkbox" name="intermediaire" value="Oui">Soustraction</div>
        <div class="selection"><input type="checkbox" name="difficile" value="Oui">Multiplication</div>
      
        <hr/>
        
        <h2>Temps en contre la montre</h2>
        <label for="quantity">Entrez une durée en secondes :</label>
        <input id='duree' type="number" id="quantity" name="quantity" min="1" max="5">
        <input type="submit" name="formSubmit" value="Valider" />
      </form>


      
      

      <a href='menu.php'>🎮</a>
    </body>
</html>