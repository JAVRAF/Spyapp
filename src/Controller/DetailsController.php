<?php

namespace App\Controller;

use App\Repository\MissionRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DetailsController extends AbstractController
{
     #[Route('/details/{id}')]
    public function display(int $id, MissionRepository $MissionRepository): Response
    {
        $mission = $MissionRepository->find($id);
        $name = $mission->getTitle();

        return $this->render('details/index.html.twig', [
            'mission_name' => $name,
            'mission' => $mission
        ]);
    }
}
