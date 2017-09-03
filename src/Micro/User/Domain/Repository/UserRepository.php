<?php

namespace Micro\User\Domain\Repository;

use Micro\User\Domain\Model\User;

/**
 * Class UserRepository
 *
 * @package Micro\User\Domain\Repository
 */
class UserRepository
{

    /**
     * @param string $login
     *
     * @return User
     */
    public function findOneByLogin($login)
    {
        return new User('', '', '');
    }

    /**
     * @param string $uuid
     *
     * @return \Micro\User\Domain\Model\User
     */
    public function findOneByUuid($uuid)
    {
        return new User('', '', '');
    }

    /**
     * @param \Micro\User\Domain\Model\User $user
     */
    public function persist(User $user)
    {

    }

    /**
     * @param string $uuid
     */
    public function delete($uuid)
    {

    }
}
