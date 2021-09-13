<?php

namespace App\Controller;

use App\Entity\Agent;
use App\Form\AgentType;
use App\Repository\AgentRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AgentController extends AbstractController
{
    /**
     *@Route("/agent")
     **/
    public function list(AgentRepository $agentRepository): Response
    {
        $agents = $agentRepository->findAll();
        $agentsCount = count($agents);

        return $this->render('agent/list.html.twig', [
            'agents' => $agents,
            'agentsCount' => $agentsCount
        ]);
    }

    /**
    *@Route("/agent/add")
    **/
    public function add(Request $request): Response
    {

        $agent = new Agent();
        $form = $this->createForm(AgentType::class, $agent);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid())
        {
            $entityManager = $this->getDoctrine()->getManager();

            $entityManager->persist($agent);
            $entityManager->flush();
        }
        return $this->render('agent/add.html.twig', [
            'form' => $form->createView()
        ]);
    }

    /**
     *@Route("/agent/edit/{id}", requirements={"id"="\d+"})
     */
    public function edit(int $id,Request $request, AgentRepository $countryRepository, EntityManagerInterface $entityManager): Response
    {
        $isedited = false;
        $Agent = $entityManager->getRepository(Agent::class)->findOneByid($id);

        $form = $this->createForm(AgentType::class, $Agent);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid())
        {

            $entityManager = $this->getDoctrine()->getManager();

            $entityManager->persist($Agent);
            $entityManager->flush();
            $isedited = true;
        }
        return $this->render('Agent/edit.html.twig', [
            'Agent' => $Agent,
            'form' => $form->createView(),
            'isedited' => $isedited
        ]);
    }

    /**
     *@Route("/agent/delete/{id}", requirements={"id"="\d+"})
     */
    public function delete(int $id,AgentRepository $countryRepository, EntityManagerInterface $entityManager): Response
    {
        $agent = $entityManager->getRepository(Agent::class)->findOneByid($id);

        $entityManager->remove($agent);
        $entityManager->flush();

        return new Response('Agent deleted');
    }
}
