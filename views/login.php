<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="../style.css">
    <title>login</title>
  </head>
  <body>
    <h1 class="accueil">Connectez-vous</h1>
    <form action="" method="post">
      <div>
        <label>
          login :<br>
          <input type="text" name="login" value="<?php echo $login; ?>">
        </label>
      </div>
      <div>
        <label>
          mot de passe :<br>
          <input type="password" name="password" value="<?php echo $password; ?>">
        </label>
      </div>
      <div>
        <input type="submit" value="envoyer">
      </div>
    </form>
  </body>
</html>
