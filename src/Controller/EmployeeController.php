<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class EmployeeController extends AbstractController
{
    /**
     * @Route("/employee", methods={"GET"})
     */
    public function list(): Response
    {
        return new JsonResponse(
            [
                'id' => 1
            ]
        );
    }
}