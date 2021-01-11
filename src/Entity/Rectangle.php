<?php
namespace WS\Entity;

/**
 * Class Rectangle
 * @package WS\Entity
 */
class Rectangle implements ShapeInterface
{
  /** @var int */
  protected $width;

  /** @var int */
  protected $height;

  /**
   * @return int
   */
  public function getWidth(): int
  {
    return $this->width;
  }

  /**
   * @param int $width
   * @return Rectangle
   */
  public function setWidth(int $width): Rectangle
  {
    $this->width = $width;

    return $this;
  }

  /**
   * @return int
   */
  public function getHeight(): int
  {
    return $this->height;
  }

  /**
   * @param int $height
   * @return Rectangle
   */
  public function setHeight(int $height): Rectangle
  {
    $this->height = $height;

    return $this;
  }

    public function area(): float
    {
        return $this->width * $this->height;
    }
}
