<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class EmployeeController extends AbstractController
{
    /**
     * @Route("/employee", methods={"GET"})
     */
    public function list(): JsonResponse
    {
        return new JsonResponse(
            [
                'id' => 1
            ]
        );
    }
}