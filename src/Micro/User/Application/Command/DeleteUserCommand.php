<?php

namespace Micro\User\Application\Command;

/**
 * Class DeleteUserCommand
 *
 * @package Micro\User\Application\Command
 */
class DeleteUserCommand
{

    /**
     * @var string
     */
    private $uuid;

    /**
     * DeleteUserCommand constructor.
     *
     * @param $uuid
     */
    public function __construct($uuid)
    {
        $this->uuid = $uuid;
    }

    /**
     * @return string
     */
    public function getUuid()
    {
        return $this->uuid;
    }
}
