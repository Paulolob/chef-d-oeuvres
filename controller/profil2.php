<?php
session_start();

require ('../models/config.php');
if(isset($_GET['id']) AND $_GET['id'] > 0)
{
    $getid = intval($_GET['id']);
    $requser = $bdd->prepare('SELECT * FROM users where id = ?');
    $requser->execute(array($getid));
    $userinfo = $requser->fetch();
}


?>

<html>
  <head>
    <meta charset="utf-8">
    <title>Mon profil</title>
  </head>
  <body>
    <div align="center">
      <h2>Profil de <?php echo $userinfo['username']; ?></h2>
      <br><br>
      Pseudo = <?php echo $userinfo['name']; ?>
      <br>
      Mail = <?php echo $userinfo['email']; ?>
    </div>
    <?php
    // Si l'utilisateur est connecté
    if ($userinfo['id'] == $_SESSION['id'])
    {
    // ?>
    <p> aloooooooooo </p>
    <a href="#">Editer mon profil</a>

    <a href="deconnexion.php">Se déconnecter</a>

    <?php
    }
    ?>

  </body>
</html>
