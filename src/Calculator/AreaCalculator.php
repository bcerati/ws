<?php
namespace WS\Calculator;

use WS\Entity\Rectangle;
use WS\Entity\Square;

/**
 * Class AreaCalculator
 * @package WS\Calculator
 */
class AreaCalculator
{
  public function areaForSquare(Square $square): int
  {
    return $square->getHeight() ** 2;
  }

  public function areaForRectangle(Rectangle $rectangle): int
  {
    return $rectangle->getHeight() * $rectangle->getWidth();
  }
}
