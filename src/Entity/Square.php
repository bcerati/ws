<?php
namespace WS\Entity;

class Square implements Shape2dInterface
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
}
