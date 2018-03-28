<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>
      Lire
      <?php
        if ($club) {
          echo '- ' . $club['nom'];
        }
      ?>
    </title>
  </head>
  <body>
    <?php
      if ($club) {
    ?>
    <h1 class="read"><?php echo $club['nom']; ?></h1>
    <p><?php echo $club['adresse']; ?></p>
    <?php
      }
    ?>
    <ul>
      <?php
        if ($todo) {
      ?>
      <li><a href="edit.php?id=<?php echo $club['id']; ?>">modifier...</a></li>
      <li><a href="delete.php?id=<?php echo $club['id']; ?>">supprimer</a></li>
      <?php
        }
      ?>
      <li><a href="index.php">retour à l'index</a></li>
    </ul>
  </body>
</html>
