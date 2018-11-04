<?php
namespace WS\Calculator;

use WS\Entity\Circle;
use WS\Entity\Square;

/**
 * Class AreaCalculator
 * @package WS\Calculator
 */
class AreaCalculator
{
  protected $shapes;

  public function __construct($shapes = array())
  {
    $this->shapes = $shapes;
  }

  public function sum()
  {
    $area = [];

    foreach($this->shapes as $shape) {
      if($shape instanceof Square) {
        $area[] = $shape->length ** 2;
      } else if ($shape instanceof Circle) {
        $area[] = M_PI * $shape->radius ** 2;
      }
    }

    return array_sum($area);
  }
}
