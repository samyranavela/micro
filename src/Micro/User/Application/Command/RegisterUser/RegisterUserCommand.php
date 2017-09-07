<?php

namespace Micro\User\Application\Command\RegisterUser;

use Ramsey\Uuid\Uuid;
use Symfony\Component\HttpFoundation\Request;

/**
 * Class RegisterUserFromRequest
 *
 * @package Micro\User\Application\Command\RegisterUser
 */
class RegisterUserFromRequest implements RegisterUser
{

    /**
     * @var \Symfony\Component\HttpFoundation\Request
     */
    private $request;

    /**
     * @var string
     */
    private $uuid;

    /**
     * RegisterUserFromRequest constructor.
     *
     * @param \Symfony\Component\HttpFoundation\Request $request
     */
    public function __construct(Request $request)
    {
        $this->uuid = Uuid::uuid4()->toString();
        $this->request = $request;
    }

    /**
     * {@inheritdoc}
     */
    public function getUuid()
    {
        return $this->uuid;
    }

    /**
     * {@inheritdoc}
     */
    public function getLogin()
    {
        return $this->request->get('login');
    }

    /**
     * {@inheritdoc}
     */
    public function getPassword()
    {
        return $this->request->getPassword();
    }
}
