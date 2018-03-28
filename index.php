<?php

require 'models/config.php';

require 'models/club.php';

$clubs = Club::readAll();

require 'views/club/browse.php';
