<?php
  session_start();
?>

<p>
  <a href="index.php">Retour vers index</a>
</p>

<p>Prénom : <?= $_SESSION["firstname"] ?></p>
<p>Nom : <?= $_SESSION["lastname"] ?></p>
<p>Age : <?= $_SESSION["age"] ?></p>
