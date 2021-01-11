<?php
namespace WS\Entity;

/**
 * Class Circle
 * @package WS\Entity
 */
class Circle implements ShapeInterface
{
  /** @var int */
  public $radius;

  public function __construct(int $radius)
  {
    $this->radius = $radius;
  }

    public function area(): float
    {
        return M_PI * $this->radius ** 2;
    }
}
