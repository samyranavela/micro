<?php

namespace Micro\User\Application\Command\RegisterUser;

/**
 * Interface RegisterUser
 *
 * @package Micro\User\Application\Command\RegisterUser
 */
interface RegisterUser
{

    /**
     * @return string
     */
    public function getUuid();

    /**
     * @return string
     */
    public function getLogin();

    /**
     * @return string
     */
    public function getPassword();
}
