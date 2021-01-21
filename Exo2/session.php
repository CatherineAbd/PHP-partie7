<?php
  session_start();
  
?>

<p>
  <a href="index.php">Retour vers index</a>
</p>

<p>
<?php
    echo "Prénom : " . $_SESSION["firstname"];
    echo "<br>Nom : " . $_SESSION["lastname"];
    echo "<br>Age : " . $_SESSION["age"];
?>
</p>