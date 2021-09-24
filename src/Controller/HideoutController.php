<?php

namespace App\Controller;

use App\Entity\Hideout;
use App\Form\HideoutType;
use App\Repository\HideoutRepository;
use App\Repository\MissionRepository;
use Doctrine\ORM\EntityManagerInterface;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Config\Definition\Exception\Exception;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HideoutController extends AbstractController
{
    /**
     * @Route("/hideout")
     */
    public function list(HideoutRepository $hideoutRepository, Request $request, PaginatorInterface $paginator): Response
    {
        $hideouts = $hideoutRepository->findAll();

        $pages = $paginator->paginate(
            $hideouts,
            $request->query->getInt('page', 1), 2
        );
        return $this->render('hideout/list.html.twig', [
            'hideouts' => $hideouts,
            'hideoutsCount' => count($hideouts),
            'pagination' => $pages
        ]);
    }

    /**
     * @Route("/hideout/add")
     **/
    public function add(Request $request, MissionRepository $missionrepository): Response
    {
        $isAdded = false;
        $hideout = new Hideout();
        $form = $this->createForm(HideoutType::class, $hideout);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $mission = $missionrepository->find($hideout->getMission());
            if ($hideout->getCountry() === $mission->getCountry()) {
                $entityManager = $this->getDoctrine()->getManager();
                $entityManager->persist($hideout);
                $entityManager->flush();
                $isAdded = true;
            } else {
                echo('<script>alert("Hideout must be in mission\'s country")</script>');
            }
        }
        return $this->render('hideout/add.html.twig', [
            'form' => $form->createView(),
            'isAdded' => $isAdded,
            'hideout' => $hideout
        ]);
    }

    /**
     * @Route("/hideout/edit/{id}", requirements={"id"="\d+"})
     */
    public function edit(int $id, Request $request, HideoutRepository $hideoutRepository, MissionRepository $missionrepository): Response
    {
        $isedited = false;
        $hideout = $hideoutRepository->find($id);
        try {
            if (!$hideout) {
                throw new Exception('<h2>This hideout does not exist</h2>');
            }
            $form = $this->createForm(HideoutType::class, $hideout);
            $form->handleRequest($request);
            if ($form->isSubmitted() && $form->isValid()) {
                $mission = $missionrepository->find($hideout->getMission());
                if ($hideout->getCountry() === $mission->getCountry()) {
                    $entityManager = $this->getDoctrine()->getManager();
                    $entityManager->persist($hideout);
                    $entityManager->flush();
                    $isedited = true;
                } else {
                    echo('<script>alert("Hideout must be in mission\'s country")</script>');
                }
            }
            return $this->render('hideout/edit.html.twig', [
                'hideout' => $hideout,
                'form' => $form->createView(),
                'isedited' => $isedited
            ]);
        } catch (Exception $e) {
            return new Response($e->getMessage());
        }
    }

    /**
     * @Route("/hideout/delete/{id}", requirements={"id"="\d+"})
     */
    public function delete(int $id, HideoutRepository $hideoutRepository): Response
    {
        $hideout = $hideoutRepository->find($id);
        try {
            if (!$hideout) {
                throw new Exception('<h2>This hideout does not exist</h2>');
            }
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($hideout);
            $entityManager->flush();

            return $this->render('hideout/delete.html.twig', [
                'hideout' => $hideout
            ]);
        } catch (Exception $e) {
            return new Response($e->getMessage());
        }
    }
}
