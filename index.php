<?php

require 'models/config.php';

require 'models/club.php';

// require 'models/User.php'

$clubs = Club::readAll();


require 'views/club/browse.php';
