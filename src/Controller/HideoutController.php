<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HideoutController extends AbstractController
{
    #[Route('/hideout', name: 'hideout')]
    public function index(): Response
    {
        return $this->render('hideout/index.html.twig', [
            'controller_name' => 'HideoutController',
        ]);
    }
}
