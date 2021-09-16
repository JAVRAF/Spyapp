<?php

namespace App\Controller;

use App\Entity\Hideout;
use App\Form\HideoutType;
use App\Repository\HideoutRepository;
use Doctrine\ORM\EntityManagerInterface;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HideoutController extends AbstractController
{
    /**
     *@Route("/hideout")
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

    /**
     *@Route("/hideout/edit/{id}", requirements={"id"="\d+"})
     */
    public function edit(int $id, Request $request, HideoutRepository $hideoutRepository): Response
    {
        $isedited = false;
        $hideout = $hideoutRepository->find($id);

        $form = $this->createForm(HideoutType::class, $hideout);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid())
        {

            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($hideout);
            $entityManager->flush();
            $isedited = true;
        }
        return $this->render('Hideout/edit.html.twig', [
            'hideout' => $hideout,
            'form' => $form->createView(),
            'isedited' => $isedited
        ]);
    }

    /**
     *@Route("/hideout/delete/{id}", requirements={"id"="\d+"})
     */
    public function delete(int $id, HideoutRepository $hideoutRepository): Response
    {
        $hideout = $hideoutRepository->find($id);

        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->remove($hideout);
        $entityManager->flush();

        return new Response('Hideout deleted');
    }
}
