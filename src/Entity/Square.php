<?php
namespace WS\Entity;

class Square implements ShapeInterface
{
  /** @var int */
  protected $length;

  /**
   * @return int
   */
  public function getLength(): int
  {
    return $this->length;
  }

  /**
   * @param int $length
   * @return Square
   */
  public function setLength(int $length): Square
  {
    $this->length = $length;

    return $this;
  }

  /** @inheritdoc */
  public function area(): int
  {
    return $this->getLength() ** 2;
  }

  /** @inheritdoc */
  public function volume(): float
  {
    return 0.0;
  }
}
