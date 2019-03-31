<?php


namespace App\Controller;


use App\Message\MessageService;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

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