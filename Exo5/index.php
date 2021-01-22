<?php 
  include "..\\top_p7.php";
  echo "Exercice 5";
?>
  <p class="topic">Faire une page qui va pouvoir modifier le contenu du cookie de l'exercice 3.<br>
  </p>
  <hr>
  <p class="topicTitle">Résultats</p>
  <p>
  <?php 
    if (isset($_COOKIE["nameCook"])){
      setcookie("nameCook", "valeur modifiée", time() + 600, "/", null, null, true);?>
      <p>Cookie : <br> <?= $_COOKIE["nameCook"]?> </p>
    <?php } ?>
  <br>
  </p>
  <a href="./" class="btnRefresh"> Refresh </a>
  
<?php include "..\..\bottom_html.php"; ?>