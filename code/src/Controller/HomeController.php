<?php


namespace App\Controller;


use App\Message\MessageService;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;

class HomeController
{
    /**
     * @Route("/hello")
     * @param MessageService $messageService
     * @return Response
     */
    public function helloAction(MessageService $messageService): Response {
        return new Response($messageService->getMessage());
    }
}