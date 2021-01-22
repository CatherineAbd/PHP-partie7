<?php 
  setcookie("nameCook", "valCook", time() + 600, "/", null, null, true);

  include "..\\top_p7.php";
  echo "Exercice 3";
?>
  <p class="topic">Faire un formulaire qui permet de récupérer le login et le mot de passe de l'utilisateur. A la validation du formulaire, stocker les informations dans un cookie.<br>
  </p>
  <hr>
  <p class="topicTitle">Résultats</p>
  <p>

  <?php 
    if (isset($_POST["submitbutton"]) && isset($_POST["name"]) && isset($_POST["password"])){
      if (!empty($_POST["name"]) && !empty($_POST["password"])){
        setcookie("nameCook", $_POST["name"] . " " . $_POST["password"], time() + 600, "/", null, null, true);
      }
    }
  ?>

  <form method="post" action="index.php">
    <fieldset>
      <legend>Connexion</legend>
      <label for="name">Nom</label><input type="text" name="name"><br><br>
      <label for="password">Mot de passe</label><input type="password" name="password">
      <input type="submit" name="submitbutton">
    </fieldset>
  </form>
  <?php
  ?>
  </p>
  
<?php include "..\..\bottom_html.php"; ?>