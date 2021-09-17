<?php

namespace App\Controller;

use App\Entity\Target;
use App\Form\TargetType;
use App\Repository\TargetRepository;
use Doctrine\ORM\EntityManagerInterface;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TargetController extends AbstractController
{
    /**
     *@Route("/target")
     **/
    public function list(TargetRepository $targetRepository, Request $request, PaginatorInterface $paginator): Response
    {
        $targets = $targetRepository->findAll();

        $pages = $paginator->paginate(
            $targets,
            $request->query->getInt('page', 1), 2
        );
        return $this->render('target/list.html.twig', [
            'targets' => $targets,
            'TargetsCount' => count($targets),
            'pagination' => $pages
        ]);
    }

    /**
     *@Route("/target/add")
     **/
    public function add(Request $request): Response
    {

        $target = new Target();
        $form = $this->createForm(TargetType::class, $target);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid())
        {
            $entityManager = $this->getDoctrine()->getManager();

            $entityManager->persist($target);
            $entityManager->flush();
        }
        return $this->render('target/add.html.twig', [
            'form' => $form->createView()
        ]);
    }

    /**
     *@Route("/target/edit/{id}", requirements={"id"="\d+"})
     */
    public function edit(int $id,Request $request, TargetRepository $targetRepository): Response
    {
        $isedited = false;
        $target = $targetRepository->find($id);

        $form = $this->createForm(TargetType::class, $target);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid())
        {

            $entityManager = $this->getDoctrine()->getManager();

            $entityManager->persist($target);
            $entityManager->flush();
            $isedited = true;
        }
        return $this->render('target/edit.html.twig', [
            'target' => $target,
            'form' => $form->createView(),
            'isedited' => $isedited
        ]);
    }

    /**
     *@Route("/target/delete/{id}", requirements={"id"="\d+"})
     */
    public function delete(int $id, TargetRepository $targetRepository): Response
    {
        $target = $targetRepository->find($id);

        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->remove($target);
        $entityManager->flush();

        return new Response('Target deleted');
    }
}
