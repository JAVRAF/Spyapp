<?php

namespace App\Controller;

use App\Entity\Agent;
use App\Entity\Mission;
use App\Entity\Target;
use App\Form\AgentType;
use App\Repository\AgentRepository;
use App\Repository\MissionRepository;
use App\Repository\TargetRepository;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Config\Definition\Exception\Exception;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AgentController extends AbstractController
{
    /**
     * @Route("/agent")
     **/
    public function list(AgentRepository $agentRepository, Request $request, PaginatorInterface $paginator): Response
    {
        $agents = $agentRepository->findAll();

        $pages = $paginator->paginate(
            $agents,
            $request->query->getInt('page', 1), 3
        );
        return $this->render('agent/list.html.twig', [
            'agents' => $agents,
            'agentsCount' => count($agents),
            'pagination' => $pages,
        ]);
    }

    /**
     * @Route("/agent/add")
     **/
    public function add(Request $request, TargetRepository $targetRepository): Response
    {
        $today = date_create();
        $isadded = false;
        $agent = new Agent();


        $form = $this->createForm(AgentType::class, $agent);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $targets = $targetRepository->findBy(['mission' => $agent->getCurrentMission()->getId()]);
            if (!in_array($targetRepository->findOneBy(['nationality' => $agent->getNationality()->getId()]), $targets)) {
                if (($agent->getDob()->getTimestamp() < date_timestamp_get($today)) === true) {
                    $entityManager = $this->getDoctrine()->getManager();

                    $entityManager->persist($agent);
                    $entityManager->flush();
                    $isadded = true;
                } else {
                    echo('<script>alert("Invalid date of birth")</script>');
                }
            } else {
                echo('<script>alert("Agent and mission\'s target can\'t have the same nationality")</script>');
            }

        }
        return $this->render('agent/add.html.twig', [
            'form' => $form->createView(),
            'isadded' => $isadded,
            'agent' => $agent
        ]);
    }

    /**
     * @Route("/agent/edit/{id}", requirements={"id"="\d+"})
     */
    public function edit(int $id, Request $request, AgentRepository $agentRepository, TargetRepository $targetRepository): Response
    {

        $today = date_create();
        $isedited = false;
        $agent = $agentRepository->find($id);

        try {
            if (!$agent) {
                throw new Exception('<h2>This agent does not exist</h2>');
            }
            $form = $this->createForm(AgentType::class, $agent);
            $form->handleRequest($request);
            if ($form->isSubmitted() && $form->isValid()) {
                $targets = $targetRepository->findBy(['mission' => $agent->getCurrentMission()->getId()]);
                if (!in_array($targetRepository->findOneBy(['nationality' => $agent->getNationality()->getId()]), $targets)) {
                    if (($agent->getDob()->getTimestamp() < date_timestamp_get($today)) === true) {
                        $entityManager = $this->getDoctrine()->getManager();
                        $entityManager->persist($agent);
                        $entityManager->flush();
                        $isedited = true;
                    } else {
                        echo('<script>alert("Invalid date of birth")</script>');

                    }
                } else {
                    echo('<script>alert("Agent and mission\'s targets can\'t have the same nationality")</script>');
                }
            }
            return $this->render('agent/edit.html.twig', [
                'agent' => $agent,
                'form' => $form->createView(),
                'isedited' => $isedited
            ]);
        } catch (Exception $e) {
            return new Response ($e->getMessage());
        }
    }

    /**
     * @Route("/agent/delete/{id}", requirements={"id"="\d+"})
     */
    public function delete(int $id, AgentRepository $agentRepository): Response
    {
        $agent = $agentRepository->find($id);

        try {
            if (!$agent) {
                throw new Exception('<h2>This agent does not exist</h2>');
            }
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($agent);
            $entityManager->flush();

            return $this->render('agent/delete.html.twig', [
                'agent' => $agent,
            ]);
        } catch (Exception $e) {
            return new Response ($e->getMessage());
        }
    }
}