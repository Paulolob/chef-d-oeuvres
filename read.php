<?php

require 'models/club.php';

$club = null;

if (isset($_GET['id'])) {
    $club= Club::read($_GET['id']);
}

require 'views/club/read.php';
