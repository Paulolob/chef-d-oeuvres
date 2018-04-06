<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Mon profil</title>
  </head>
  <body>
    <div align="center">
      <h2>Bienvenue <?php echo $userinfo['username']; ?></h2>
      <br><br>

      <br>
      Mail = <?php echo $userinfo['email']; ?>
    </div>
    <?php
    // Si l'utilisateur est connecté
    if ($userinfo['id'] == $_SESSION['id'])
    {
    // ?>
    <p> aloooooooooo </p>
    <a href="../edit.php">Editer mon profil</a>

    <a href="deconnexion.php">Se déconnecter</a>

    <?php
    }
    ?>

  </body>
</html>
