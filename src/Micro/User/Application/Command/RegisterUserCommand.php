<?php

namespace Micro\User\Application\Command;

use Ramsey\Uuid\Uuid;

/**
 * Class RegisterUserCommand
 *
 * @package Micro\User\Application\Command
 */
class RegisterUserCommand
{

    /**
     * @var string
     */
    private $login;

    /**
     * @var string
     */
    private $uuid;

    /**
     * @var string
     */
    private $password;

    /**
     * RegisterUserCommand constructor.
     *
     * @param $login
     * @param $password
     */
    public function __construct($login, $password)
    {
        $this->uuid = Uuid::uuid4()->toString();
        $this->login = $login;
        $this->password = $password;
    }

    /**
     * @return string
     */
    public function getUuid()
    {
        return $this->uuid;
    }

    /**
     * @return string
     */
    public function getLogin()
    {
        return $this->login;
    }

    /**
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }
}
