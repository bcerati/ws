<?php
namespace WS\Entity;

/**
 * Class Circle
 * @package WS\Entity
 */
class Circle
{
  /** @var int */
  public $radius;

  public function __construct(int $radius)
  {
    $this->radius = $radius;
  }
}
