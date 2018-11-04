<?php

require_once 'vendor/autoload.php';

use WS\Entity\User;
use WS\Manager\UserManager;
use WS\Persistance\FileSystemPersitance;

$user = new User();
$user->setId(1)
  ->setName('Amanda Nox');

(new UserManager(new FileSystemPersitance()))
  ->saveUser($user);