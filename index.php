<?php
require_once 'vendor/autoload.php';

use WS\Entity\User;
use WS\Serializer\ArraySerializer;
use WS\Serializer\JsonSerializer;

$user = (new User())
  ->setId(1)
  ->setName('Thea Swanson')
  ->setAddress('3161 Marietta Street');

$arraySerializer = new ArraySerializer();
$jsonSerializer = new JsonSerializer();

print_r($arraySerializer->serialize($user));
print_r($jsonSerializer->serialize($user));
