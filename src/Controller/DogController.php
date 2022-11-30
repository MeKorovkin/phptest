<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class DogController extends AbstractController
{
    private $know = '1';
    /**
     * @Route("/dogs", methods={"GET"})
     */
    public function list(): JsonResponse
    {
        if ($this->know == 1){
            return new JsonResponse(
                [
                    'know' => 'true',
                ]
            );
        }else {
            return new JsonResponse(
                [
                    'know' => 'false',
                ]
            );
        }
    }
}