<?php 
  include "..\\top_p7.php";
  echo "Exercice 1";
?>
  <p class="topic">Faire une page HTML permettant de donner à l'utilisateur :<br>
son User Agent<br>
son adresse ip<br>
le nom du serveur<br>
  </p>
  <hr>
  <p class="topicTitle">Résultats</p>
    <p>User Agent : <?= $_SERVER['HTTP_USER_AGENT'] ?></p>
    <p>Adresse IP : <?= $_SERVER['REMOTE_ADDR'] ?></p>
    <p>Nom du serveur : <?= $_SERVER['SERVER_NAME'] ?></p>
    
<?php include "..\..\bottom_html.php"; ?>