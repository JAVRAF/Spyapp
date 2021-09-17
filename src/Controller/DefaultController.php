<?php

namespace App\Controller;

use App\Repository\MissionRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Knp\Component\Pager\PaginatorInterface;

class DefaultController extends AbstractController
{
    /**
     * @Route("/")
     */
    public function index(Request $request, MissionRepository $missionRepository, PaginatorInterface $paginator): Response
    {
        $missions = $missionRepository->findAll();

        $pages = $paginator->paginate(
            $missions,
            $request->query->getInt('page', 1), 3
        );

        return $this->render('default/index.html.twig', [
            'controller_name' => 'DefaultController',
            'missions' => $missions,
            'missionsCount' => count($missions),
            'pagination' => $pages
        ]);
    }
}
