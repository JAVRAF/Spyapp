<?php

namespace App\Controller;

use App\Repository\MissionRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DetailsController extends AbstractController
{
    /**
     * @Route("/details/{id}", requirements={"id"="\d+"})
     */
    public function display(int $id, MissionRepository $MissionRepository): Response
    {
        $mission = $MissionRepository->find($id);
        $name = $mission->getTitle();
        dump($mission->getAgent());
        dump($mission->getRequiredSpecialty());
        dump($mission->getCountry());
        dump($mission->getBeginDate());


        return $this->render('details/index.html.twig', [
            'mission_name' => $name,
            'mission' => $mission
        ]);
    }
}
