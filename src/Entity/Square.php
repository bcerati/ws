<?php
namespace WS\Entity;

/**
 * Class Square
 * @package WS\Entity
 */
class Square
{
  /** @var int */
  public $length;

  public function __construct(int $length)
  {
    $this->length = $length;
  }
}
