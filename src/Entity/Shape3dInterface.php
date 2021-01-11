<?php
namespace WS\Entity;

/**
 * Interface Shape3dInterface
 * @package WS\Entity
 */
interface Shape3dInterface extends ShapedInterface
{
  public function volume(): float;
}
