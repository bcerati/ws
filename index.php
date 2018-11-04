<?php
require_once 'vendor/autoload.php';

use WS\Calculator\AreaCalculator;
use WS\Entity\Rectangle;
use WS\Entity\Square;

$rectangle = new Rectangle() ;
$rectangle->setHeight(3);
$rectangle->setWidth(2);


$square = new Square() ;
$square->setHeight(3);

$areaCalculator = new AreaCalculator();

print_r($areaCalculator->areaForRectangle($rectangle)); // expects 6

echo "\n";

print_r($areaCalculator->areaForSquare($square)); // expects 9

echo "\n";

$rectangle = new Square() ;
$rectangle->setHeight(5);
$rectangle->setWidth(6);

print_r($areaCalculator->areaForRectangle($rectangle)); // ???
