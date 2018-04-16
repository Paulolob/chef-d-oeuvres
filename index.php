<?php

require 'models/config.php';

require 'models/club.php';

// require 'models/User.php'

// $clubs = Club::readAll();
// $clubs = Club::readbydpt();
$clubs75 = Club::readParis();
$clubs92 = Club::read92();

require 'views/club/browse.php';
