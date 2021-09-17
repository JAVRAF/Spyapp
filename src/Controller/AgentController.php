<?php

namespace App\Controller;

use App\Entity\Agent;
use App\Form\AgentType;
use App\Repository\AgentRepository;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Config\Definition\Exception\Exception;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AgentController extends AbstractController
{
    /**
     *@Route("/agent")
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
    public function edit(int $id,Request $request, AgentRepository $agentRepository): Response
    {
        $isedited = false;
        $agent = $agentRepository->find($id);
        try {
            if (!$agent) {
                throw new Exception('<h2>This agent does not exist</h2>');
            }
            $form = $this->createForm(AgentType::class, $agent);
            $form->handleRequest($request);
            if ($form->isSubmitted() && $form->isValid())
            {
                $entityManager = $this->getDoctrine()->getManager();
                $entityManager->persist($agent);
                $entityManager->flush();
                $isedited = true;
            }
            return $this->render('Agent/edit.html.twig', [
                'agent' => $agent,
                'form' => $form->createView(),
                'isedited' => $isedited
            ]);
        } catch (Exception $e) {
            return new Response ($e->getMessage());
        }

    }

    /**
     *@Route("/agent/delete/{id}", requirements={"id"="\d+"})
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

            return new Response('Agent deleted');
        } catch (Exception $e) {
            return new Response ($e->getMessage());
        }
    }
}
