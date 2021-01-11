<?php
namespace WS\Entity;

/**
 * Interface Shape2dInterface
 * @package WS\Entity
 */
interface Shape2dInterface extends ShapedInterface
{
  public function area(): int;
}
