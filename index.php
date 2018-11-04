<?php
require_once 'vendor/autoload.php';

use WS\Entity\Square;

$square = new Square() ;
$square->setLength(3);

print_r($square->area()); // expects 9
