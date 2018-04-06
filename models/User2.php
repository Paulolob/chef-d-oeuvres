<?php

class User
{
    public static function createStatement($sql)
    {
        try {
            require __DIR__.'/config.php';

            $pdo = new PDO(
                "mysql:dbname=$dbname;host=$host;charset=utf8", $user, $password
              );

            $pdo_statement = $pdo->prepare($sql);
        } catch (PDOException $e) {
            echo 'erreur : ' . $e->getMessage();

            $pdo_statement = null;
        }

        return $pdo_statement;
    }


public static function insertuser () {
  $insertuser = self::createStatement('INSERT INTO users (username, email, password) VALUES (?,?,?)');
  $insertuser->execute(array($pseudo, $mail, $mdp));
  return $insertuser;
}

public static function insert_user($pseudo,$mail,$mdp) {

    $bdd= new PDO("mysql:host=localhost;dbname=sportsmatch;charset=utf8",'root','');



  $pdo_statement = $bdd->prepare('INSERT INTO users (username, email, password) VALUES (:username,:email,:password)');
  $pdo_statement->bindparam(':username', $pseudo) &&
  $pdo_statement->bindparam(':email', $mail) &&
  $pdo_statement->bindparam(':password', $mdp) &&
  $pdo_statement->execute();

  return $pdo_statement;
}
    }
