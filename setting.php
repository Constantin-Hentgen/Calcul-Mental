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
<label class="container1">Facile
  <input type="radio" checked="checked" name="facile">
  <span class="checkmark1"></span>
</label>
<label class="container1">Difficile
  <input type="radio" checked="checked" name="difficile">
  <span class="checkmark1"></span>
</label>
<label class="container1">Expert
  <input type="radio" checked="checked" name="expert">
  <span class="checkmark1"></span>
</label>
<label class="container1">Cauchemar
  <input type="radio" checked="checked" name="cauchemar">
  <span class="checkmark1"></span>
</label>
</div>
<hr/>
<h2>Type d'opération</h2>

<div class="alignement">
    <label class="container">Addition
      <input name = 'isAdition' type="checkbox" checked="checked">
      <span class="checkmark"></span>
    </label>

    <label class="container">Soustraction
      <input name = 'isSubstraction' type="checkbox" checked="checked">
      <span class="checkmark"></span>
    </label>

    <label class="container">Multiplication
      <input name = 'isMultiplication' type="checkbox" checked="checked">
      <span class="checkmark"></span>
    </label>
</div>

<hr/>

<h2>Temps en contre la montre</h2>
<form>
  <label for="quantity">Entrez une durée en secondes :</label>
  <input id='duree' type="number" id="quantity" name="quantity" min="1" max="5">
</form>
<a href='menu.php'>🎮</a>
    </body>
</html>