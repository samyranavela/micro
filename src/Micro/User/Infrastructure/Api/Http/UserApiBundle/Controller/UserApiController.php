<?php

namespace UserApiBundle\Controller;

use League\Tactician\CommandBus;
use Micro\User\Application\Command\DeleteUser\DeleteUserFromRequest;
use Micro\User\Application\Command\RegisterUser\RegisterUserFromRequest;
use Micro\User\Domain\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;

class UserApiController extends Controller
{

    /**
     * @var \Micro\User\Domain\Repository\UserRepository
     */
    private $userRepository;

    /**
     * @var \League\Tactician\CommandBus
     */
    private $commandBus;

    /**
     * UserApiController constructor.
     *
     * @param \League\Tactician\CommandBus                 $commandBus
     * @param \Micro\User\Domain\Repository\UserRepository $userRepository
     */
    public function __construct(CommandBus $commandBus, UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
        $this->commandBus = $commandBus;
    }

    /**
     * @param \Symfony\Component\HttpFoundation\Request $request
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render(
          'default/index.html.twig',
          [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
          ]
        );
    }

    /**
     * @param string                                    $uuid
     * @param \Symfony\Component\HttpFoundation\Request $request
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function showAction($uuid, Request $request)
    {
        $user = $this->userRepository->findOneByUuid($uuid);

        return new JsonResponse($user);
    }

    /**
     * @param \Symfony\Component\HttpFoundation\Request $request
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function registerAction(Request $request)
    {
        $command = new RegisterUserFromRequest($request);

        return new JsonResponse(['uuid' => $command->getUuid()], '201');
    }

    /**
     * @param \Symfony\Component\HttpFoundation\Request $request
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function authenticateAction(Request $request)
    {
        //@todo Authentication

        return new JsonResponse();
    }

    /**
     * @param string                                    $uuid
     * @param \Symfony\Component\HttpFoundation\Request $request
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function deleteAction($uuid, Request $request)
    {
        $command = new DeleteUserFromRequest($request);
        $this->commandBus->handle($command);

        return new JsonResponse([$uuid]);
    }
}
