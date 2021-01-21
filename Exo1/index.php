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
    <p>
    <?php
    echo "User Agent : " . $_SERVER['HTTP_USER_AGENT'];
    echo "<br>Adresse IP : " . $_SERVER['REMOTE_ADDR'];
    echo "<br>Nom du serveur : " . $_SERVER['SERVER_NAME'];
    ?>
    </p>
    
<?php include "..\..\bottom_html.php"; ?>