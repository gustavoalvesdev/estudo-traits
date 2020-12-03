<?php

require_once 'vendor/autoload.php';

use Connection\MySqlConnection;
use Model\Usuario;

$connection = new MySqlConnection();
$myUser = new Usuario($connection);
