<?php
namespace WS\Entity;

class User
{
  /** @var int */
  protected $id;

  /** @var string */
  protected $name;

  /**
   * @return int
   */
  public function getId(): int
  {
    return $this->id;
  }

  /**
   * @param int $id
   * @return User
   */
  public function setId(int $id): User
  {
    $this->id = $id;

    return $this;
  }

  /**
   * @return string
   */
  public function getName(): string
  {
    return $this->name;
  }

  /**
   * @param string $name
   * @return User
   */
  public function setName(string $name): User
  {
    $this->name = $name;

    return $this;
  }
}