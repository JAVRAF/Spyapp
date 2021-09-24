<?php

namespace App\Controller;

use App\Entity\Mission;
use App\Form\MissionType;
use App\Repository\HideoutRepository;
use App\Repository\MissionRepository;
use Doctrine\DBAL\Exception\ForeignKeyConstraintViolationException;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Config\Definition\Exception\Exception;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MissionController extends AbstractController
{
    /**
     * @Route("/mission")
     **/
    public function list(MissionRepository $missionRepository, Request $request, PaginatorInterface $paginator): Response
    {
        $missions = $missionRepository->findAll();

        $pages = $paginator->paginate(
            $missions,
            $request->query->getInt('page', 1), 2
        );
        return $this->render('mission/list.html.twig', [
            'missions' => $missions,
            'missionsCount' => count($missions),
            'pagination' => $pages
        ]);
    }

    /**
     * @Route("/mission/add")
     **/
    public function add(Request $request, HideoutRepository $hideoutRepository): Response
    {
        $isadded = false;
        $mission = new Mission();
        $form = $this->createForm(MissionType::class, $mission);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();

            $entityManager->persist($mission);
            $entityManager->flush();
            $isadded = true;
        }
        return $this->render('mission/add.html.twig', [
            'form' => $form->createView(),
            'mission' => $mission,
            'isadded' => $isadded
        ]);
    }

    /**
     * @Route("/mission/edit/{id}", requirements={"id"="\d+"})
     */
    public function edit(int $id, Request $request, MissionRepository $missionRepository): Response
    {
        $isedited = false;
        $mission = $missionRepository->find($id);

        try {
            if (!$mission) {
                throw new Exception('<h2>This mission does not exist, it can\'t be edited</h2>');
            }
            $form = $this->createForm(MissionType::class, $mission);
            $form->handleRequest($request);
            if ($form->isSubmitted() && $form->isValid()) {
                $entityManager = $this->getDoctrine()->getManager();

                $entityManager->persist($mission);
                $entityManager->flush();
                $isedited = true;
            }
            return $this->render('mission/edit.html.twig', [
                'mission' => $mission,
                'form' => $form->createView(),
                'isedited' => $isedited
            ]);
        } catch (Exception $e) {
            return new Response($e->getMessage());
        }
    }

    /**
     * @Route("/mission/delete/{id}", requirements={"id"="\d+"})
     */
    public function delete(int $id, MissionRepository $missionRepository): Response
    {
        $mission = $missionRepository->find($id);
        try {
            if (!$mission) {
                throw new Exception('<h2>This mission does not exist, it can\'t be deleted</h2>');
            }
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($mission);
            $entityManager->flush();
            return $this->render('mission/delete.html.twig', [
                'mission' => $mission
            ]);
        } catch (ForeignKeyConstraintViolationException $e) {
            return new Response('<h2>Deletion is impossible.</h2><p>Be sure no agents, assets, targets or hideouts are linked to the mission</p>');
        } catch (Exception $e) {
            return new Response($e->getMessage());
        }
    }
}