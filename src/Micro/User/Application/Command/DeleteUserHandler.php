<?php

namespace Micro\User\Application\Command;

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
     * @param \Micro\User\Application\Command\DeleteUserCommand $command
     */
    public function handle(DeleteUserCommand $command)
    {
        $this->userRepository->delete($command->getUuid());
    }
}
