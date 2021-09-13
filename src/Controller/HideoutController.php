<?php

namespace App\Controller;

use App\Entity\Hideout;
use App\Form\HideoutType;
use App\Repository\HideoutRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HideoutController extends AbstractController
{
    /**
     *@Route("/hideout")
     */
    public function list(HideoutRepository $hideoutRepository): Response
    {
        $hideouts = $hideoutRepository->findAll();
        $hideoutsCount = count($hideouts);
        return $this->render('hideout/list.html.twig', [
            'hideouts' => $hideouts,
            'hideoutsCount' => $hideoutsCount,
        ]);
    }

    /**
     *@Route("/hideout/add")
     **/
    public function add(Request $request): Response
    {
        $hideout = new Hideout();
        $form = $this->createForm(HideoutType::class, $hideout);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid())
        {
            $entityManager = $this->getDoctrine()->getManager();

            $entityManager->persist($hideout);
            $entityManager->flush();
        }
        return $this->render('hideout/add.html.twig', [
            'form' => $form->createView()
        ]);
    }
}
