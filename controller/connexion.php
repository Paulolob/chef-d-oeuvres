<?php
session_start();

require ('../models/config.php');

if (isset($_POST['formconnexion']))
	{
    	if (!empty($_POST['mailconnect']) AND !empty($_POST['mdpconnect']))
		{
         $mailconnect= htmlspecialchars($_POST['mailconnect']);
		 $mdpconnect= sha1($_POST['mdpconnect']);

		 //verifier si l'utilisateur existe ($requser=requete sur l'utilisateur)
		 $requser= $bdd->prepare('SELECT * FROM users WHERE email=? AND password=?');
		 $requser->execute(array($mailconnect, $mdpconnect));
		 $userexist=$requser->rowCount();
		 if ($userexist==1)
		 {
		 	$userinfo = $requser->fetch();
		 	$_SESSION['id'] = $userinfo['id'];
		 	$_SESSION['pseudo'] = $userinfo['username'];
		 	$_SESSION['mail'] = $userinfo['mail'];
		 	header("Location: profil.php?id=".$_SESSION['id']);
		 }
		 else
		 {
		 	$erreur= "Erreur d'identification";
		 }

		}
		else
		{
			$erreur="Veuillez remplir tous les champs";
		}



	}

	if(isset($erreur))
	{
     echo $erreur;
	}
	require ('../views/connexion.view.php');
