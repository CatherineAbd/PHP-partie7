<?php 
  include "..\\top_p7.php";
  echo "Exercice 4";
?>
  <p class="topic">Faire une page qui va récupérer les informations du cookie créé à l'exercice 3 et qui les affiche.<br>
  </p>
  <hr>
  <p class="topicTitle">Résultats</p>
  <p>
  <?php if (isset($_COOKIE["nameCook"])){ ?>
          <p>Mon cookie : <?= $_COOKIE["nameCook"]?></p>
  <?php } ?>
  ?>
  </p>
  
<?php include "..\..\bottom_html.php"; ?>