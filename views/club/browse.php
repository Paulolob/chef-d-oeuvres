<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Parcourir les todos</title>
  </head>
  <body>
    <nav>
      <!-- <ul>
        <li>
        <?php
          if ($connected_user) {
        ?>
          <a href="logout.php">logout</a>
        <?php
          } else {
        ?>
          <!-- <a href="login.php">login</a> -->
        <?php
          }
        ?>
        </li>
      </ul>
    </nav>
    <nav class="navbar navbar-light bg-light">
  <form class="form-inline ">
    <button class="btn btn-outline-success" href="login.php" type="button">Sportsmatch </button>

  <input type="button" class="btn btn-info zeubi" value="Inscrivez-vous" onclick="location.href = 'controller/inscription.php';">
  </form>
</nav>


    <h1 class="accueil"> Sportsmatch </h1>
    <p class="accueil"> Quel parent, désireux d’inscrire son enfant dans un club, n’a jamais été découragé face au parcours du combattant que représente la recherche du club idéal ? Proximité, horaires, coûts sont les principaux tenants de l’adhésion à un club. Pourtant, aucune plateforme ne répond efficacement à cette équation. </p>


    <ul>
    <?php
      foreach ($clubs as $club) {
    ?>
      <li>
        <a href="read.php?id=<?php echo $club['id']; ?>">
         <?php echo $club['nom']; ?><br>
           <?php echo $club['adresse']; ?>
        </a>
      </li>
    <?php
      }
    ?>
      <li><a href="add.php">ajouter une tâche...</a></li>
    </ul>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

  </body>
</html>
