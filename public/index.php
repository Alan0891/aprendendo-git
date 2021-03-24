<?php
require_once("../vendor/autoload.php");

use app\controllers\userController;

$user  = new userController;
$user->cadastro();


