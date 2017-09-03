<?php

namespace Micro\User\Domain\Model;

/**
 * Class User
 *
 * @package Micro\User\Domain\Model
 */
final class User
{

    /**
     * @var string
     */
    private $uuid;

    /**
     * @var string
     */
    private $login;

    /**
     * @var string
     */
    private $password;

    /**
     * User constructor.
     *
     * @param string $uuid
     * @param string $login
     * @param string $password
     */
    public function __construct($uuid, $login, $password)
    {
        $this->uuid = $uuid;
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
