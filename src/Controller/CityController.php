<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class CityController extends AbstractController
{
    /**
     * @Route("/cities", methods={"GET"})
     */
    public function list(): JsonResponse
    {
        return new JsonResponse(
            [
                'id' => 1,
                'name' => 'Perm'
            ]
        );
    }
}