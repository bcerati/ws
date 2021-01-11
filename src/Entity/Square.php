<?php
namespace WS\Entity;

class Square implements ShapeInterface
{
    protected float $side;

    /** @inheritdoc */
  public function setSide(int $value): Square
  {
    $this->side = $value;
    return $this;
  }

    public function area(): float
    {
        return $this->side ** 2;
    }
}
