<?php

namespace App\Controller;

use App\Repository\AgentRepository;
use App\Repository\AssetRepository;
use App\Repository\HideoutRepository;
use App\Repository\MissionRepository;
use App\Repository\TargetRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Twig\Error\RuntimeError;

class DetailsController extends AbstractController
{
    /**
     * @Route("/details/{id}", requirements={"id"="\d+"})
     */
    public function display(int               $id,
                            MissionRepository $missionRepository,
                            AgentRepository   $agentRepository,
                            AssetRepository   $assetRepository,
                            TargetRepository  $targetRepository,
                            HideoutRepository $hideoutRepository): Response
    {
        try {
            return $this->render('details/index.html.twig', [
                'mission' => $missionRepository->find($id),
                'hideouts' => $hideoutRepository->findby(['mission' => $id]),
                'agents' => $agentRepository->findby(['current_mission' => $id]),
                'assets' => $assetRepository->findby(['current_mission' => $id]),
                'targets' => $targetRepository->findby(['mission' => $id]),
            ]);
        } catch (RuntimeError $e) {
            return new Response('<h2>Mission ' . $id . ' doesn\'t exist</h2>');
        }

    }
}
