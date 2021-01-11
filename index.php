<?php
require_once 'vendor/autoload.php';

use WS\Calculator\AreaCalculator;
use WS\Entity\Rectangle;
use WS\Entity\Square;

$rectangle = new Rectangle() ;
$rectangle->setHeight(3);
$rectangle->setWidth(2);


$square = new Square() ;
$square->setSide(3);

$areaCalculator = new AreaCalculator();

print_r($rectangle->area()); // expects 6

echo "\n";

print_r($square->area()); // expects 9

echo "\n";

$rectangle = new Square() ;
$rectangle->setSide(5);

print_r($rectangle->area()); // ???
