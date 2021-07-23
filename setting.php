<?php
    session_start();
?>

<!DOCTYPE html>
<html>
    <?php
        include 'head.php';
    ?>

    <body>
    <h1 id='specialtitle'>Préférences</h1>
    <h2>Difficulté</h2>
<div class="alignement">
<label class="container1">One
  <input type="radio" checked="checked" name="radio">
  <span class="checkmark1"></span>
</label>
<label class="container1">Two
  <input type="radio" checked="checked" name="radio">
  <span class="checkmark1"></span>
</label>
<label class="container1">Three
  <input type="radio" checked="checked" name="radio">
  <span class="checkmark1"></span>
</label>
</div>
<hr/>
<h2>Type d'opération</h2>
<div class="alignement">
<label class="container">One
  <input type="checkbox" checked="checked">
  <span class="checkmark"></span>
</label>
<label class="container">Two
  <input type="checkbox" checked="checked">
  <span class="checkmark"></span>
</label>
<label class="container">Three
  <input type="checkbox" checked="checked">
  <span class="checkmark"></span>
</label></div>
<hr/>

<h2>Temps en contre la montre</h2>
<form>
  <label for="quantity">Entrez une durée en secondes :</label>
  <input type="number" id="quantity" name="quantity" min="1" max="5">
</form> 
    </body>
</html>