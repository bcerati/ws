<?php
namespace WS\Manager;

use WS\Entity\User;
use WS\Persistance\FileSystemPersitance;

class UserManager
{
  /** @var FileSystemPersitance */
  protected $persister;

  public function __construct(FileSystemPersitance $fileSystemPersitance)
  {
    $this->persister = $fileSystemPersitance;
  }

  /**
   * @param User $user
   *
   * @return User
   */
  public function saveUser(User $user): User
  {
    $this->persister->persist($user);

    return $user;
  }
}
