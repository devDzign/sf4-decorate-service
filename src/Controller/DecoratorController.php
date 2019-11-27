<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class DecoratorController extends AbstractController
{
    /**
     * @Route("/decorator/{id}", name="route_decorator")
     * @param int $id
     *
     * @return JsonResponse
     */
    public function index($id)
    {

        dd($this->generateUrl('route_decorator', ['id' =>$id]));

        return $this->json([
            'message' => 'Welcome to your new controller!',
            'path' => 'src/Controller/DecoratorController.php',
        ]);
    }
}
