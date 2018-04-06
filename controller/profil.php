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

require ('../views/profil_html.php');
?>
