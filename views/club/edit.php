<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <title>
      Modifier
      <?php
        if ($todo) {
          echo '- ' . $todo['nom'];
        }
      ?>
    </title>
  </head>
  <body>
    <?php
      if ($todo) {
    ?>
    <form action="" method="post">
      <div>
        <label>
          titre :
          <input type="text" name="title" value="<?php echo $club['nom']; ?>">
        </label>
      </div>
      <div>
        <label>
          description :
          <textarea name="description"><?php echo $club['adresse']; ?></textarea>
        </label>
      </div>
      <div>
        <input type="submit" value="envoyer">
      </div>
    </form>
    <?php
      }
    ?>
    <ul>
      <?php
        if ($club && isset($club['id'])) {
      ?>
      <li><a href="read.php?id=<?php echo $club['id']; ?>">annuler</a></li>
      <?php
        }
      ?>
      <li><a href="index.php">retour à l'index</a></li>
    </ul>
  </body>
</html>
