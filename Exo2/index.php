<?php 
  session_start();

  $_SESSION["lastname"] = "DOE";
  $_SESSION["firstname"] = "John";
  $_SESSION["age"] = 28;

  include "..\\top_p7.php";
  echo "Exercice 2";
?>
  <p class="topic">Sur la page index, faire un lien vers une autre page. Passer d'une page à l'autre le contenu des variables lastname, firstname et age grâce aux sessions.<br>
Ces variables auront été définies directement dans le code. <br>
Il faudra afficher le contenu de ces variables sur la deuxième page.<br>
  </p>
  <hr>
  <p class="topicTitle">Résultats</p>
  <p>Prénom : <?= $_SESSION["firstname"] ?></p>
  <p>Nom : <?= $_SESSION["lastname"] ?></p>
  <p>Age : <?= $_SESSION["age"] ?></p>
  <p><a href="session.php">Session</a></p>
  
<?php include "..\..\bottom_html.php"; ?>