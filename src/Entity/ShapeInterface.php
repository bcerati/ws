<?php
namespace WS\Entity;

/**
 * Interface ShapeInterface
 * @package WS\Entity
 */
interface ShapeInterface {
  public function area(): int;

  public function volume(): float;
}
