<?php

namespace Micro\User\Application\Command\RegisterUser;

use Micro\User\Domain\Model\User;
use Micro\User\Domain\Repository\UserRepository;

/**
 * Class RegisterUserHandler
 *
 * @package Micro\User\Application\Command
 */
class RegisterUserHandler
{

    /**
     * @var \Micro\User\Domain\Repository\UserRepository
     */
    private $userRepository;

    /**
     * DeleteUserHandler constructor.
     *
     * @param \Micro\User\Domain\Repository\UserRepository $userRepository
     */
    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    /**
     * @param \Micro\User\Application\Command\RegisterUser\RegisterUser $command
     */
    public function handle(RegisterUser $command)
    {
        $user = new User($command->getUuid(), $command->getLogin(), $command->getPassword());
        $this->userRepository->persist($user);
    }
}
