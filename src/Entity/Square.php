<?php
namespace WS\Entity;

class Square extends Rectangle
{
  /** @inheritdoc */
  public function setHeight(int $value): Rectangle
  {
    $this->width = $value;
    $this->height = $value;

    return $this;
  }

  /** @inheritdoc */
  public function setWidth(int $value): Rectangle
  {
    $this->width = $value;
    $this->height = $value;

    return $this;
  }
}
