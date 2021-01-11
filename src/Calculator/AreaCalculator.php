<?php
namespace WS\Calculator;

use WS\Entity\ShapeInterface;

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

    foreach ($shapes as $shape) {
        if (!$shape instanceof ShapeInterface) {
            throw new \Exception('Not an instance of ShapeInterface');
        }
    }
  }

  public function sum()
  {
    $area = [];

    /** @var ShapeInterface $shape */
      foreach($this->shapes as $shape) {
        $area[] = $shape->area();
    }

    return array_sum($area);
  }
}
