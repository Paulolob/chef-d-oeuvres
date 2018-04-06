<?php

require 'models/club.php';

$club = null;

if (isset($_GET['id'])) {
    if (isset($_POST['nom'], $_POST['adresse'])) {
        if (Club::update($_GET['id'], $_POST)) {
            header('Location:read.php?id=' . $_GET['id']);
            exit;
        }
    } else {
        $todo = Club::read($_GET['id']);
    }
}

require 'views/club/edit.php';
