<?php

namespace Micro\User\Application\Command\DeleteUser;

use Micro\User\Domain\Repository\UserRepository;

/**
 * Class DeleteUserHandler
 *
 * @package Micro\User\Application\Command
 */
class DeleteUserHandler
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
     * @param \Micro\User\Application\Command\DeleteUser\DeleteUser $command
     */
    public function handle(DeleteUser $command)
    {
        $this->userRepository->delete($command->getUuid());
    }
}
