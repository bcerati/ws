<?php
require_once 'vendor/autoload.php';

use WS\Entity\User;

$user = (new User())
  ->setId(1)
  ->setName('Thea Swanson')
  ->setAddress('3161 Marietta Street');

echo $user->formatJson();