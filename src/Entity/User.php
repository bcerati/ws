<?php
namespace WS\Entity;

/**
 * Class User
 *
 * @package WS\Entity
 */
class User
{
  /** @var int */
  protected $id;

  /** @var string */
  protected $name;

  /** @var string */
  protected $address;

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
  public function setId(int $id): self
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
  public function setName(string $name): self
  {
    $this->name = $name;

    return $this;
  }

  /**
   * @return string
   */
  public function getAddress(): string
  {
    return $this->address;
  }

  /**
   * @param string $address
   * @return User
   */
  public function setAddress(string $address): self
  {
    $this->address = $address;

    return $this;
  }

  /**
   * @return array
   */
  public function toArray(): array
  {
    return [
      'id' => $this->getId(),
      'name' => $this->getName(),
      'address' => $this->getAddress(),
    ];
  }

  /**
   * Format an User to a string json encoded format
   *
   * @return false|string
   */
  public function formatJson()
  {
    return json_encode($this->toArray());
  }
}