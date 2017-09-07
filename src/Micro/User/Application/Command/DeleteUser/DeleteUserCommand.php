<?php

namespace Micro\User\Application\Command\DeleteUser;

use Symfony\Component\HttpFoundation\Request;

/**
 * Class DeleteUserCommand
 *
 * @package Micro\User\Application\Command
 */
class DeleteUserFromRequest implements DeleteUser
{

    /**
     * @var \Symfony\Component\HttpFoundation\Request
     */
    private $request;

    /**
     * DeleteUserFromRequest constructor.
     *
     * @param \Symfony\Component\HttpFoundation\Request $request
     */
    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    /**
     * @return string
     */
    public function getUuid()
    {
        return $this->request->get('uuid');
    }
}
