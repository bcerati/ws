<?php
namespace WS\Entity;

/**
 * Class Square
 * @package WS\Entity
 */
class Square implements ShapeInterface
{
  /** @var int */
  public $length;

  public function __construct(int $length)
  {
    $this->length = $length;
  }

    public function area(): float
    {
        return $this->length ** 2;
    }
}
