<?php
require_once 'vendor/autoload.php';

use WS\Calculator\AreaCalculator;
use WS\Entity\Circle;
use WS\Entity\Square;

$shapes = array(
  new Circle(2),
  new Square(5),
  new Square(6)
);

$areas = new AreaCalculator($shapes);

echo $areas->sum();