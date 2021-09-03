<?php

namespace App\Controller;
use App\Entity\Mission;
use App\Repository\AgentRepository;
use App\Repository\MissionRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends AbstractController
{
    /**
     * @Route("/")
     */
    public function index(MissionRepository $missionRepository): Response
    {

        $missions = $missionRepository->findAll();
        $missionsCount = count($missions);

        return $this->render('default/index.html.twig', [
            'controller_name' => 'DefaultController',
            'missions' => $missions,
            'missionsCount' => $missionsCount,
        ]);
    }
}
