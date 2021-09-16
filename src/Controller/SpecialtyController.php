<?php

namespace App\Controller;

use App\Entity\Specialty;
use App\Form\SpecType;
use App\Repository\SpecialtyRepository;
use Doctrine\ORM\EntityManagerInterface;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SpecialtyController extends AbstractController
{
    /**
     *@Route("/spec")
     **/
    public function list(SpecialtyRepository $specialtyRepository, Request $request, PaginatorInterface $paginator): Response
    {
        $specialties = $specialtyRepository->findAll();

        $pages = $paginator->paginate(
            $specialties,
            $request->query->getInt('page', 1), 3
        );
        return $this->render('specialty/list.html.twig', [
            'specs' => $specialties,
            'specsCount' => $specialties,
            'pagination' => $pages
        ]);
    }

    /**
     *@Route("/spec/add")
     **/
    public function add(Request $request): Response
    {

        $spec = new Specialty();
        $form = $this->createForm(SpecType::class, $spec);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid())
        {
            $entityManager = $this->getDoctrine()->getManager();

            $entityManager->persist($spec);
            $entityManager->flush();
        }
        return $this->render('specialty/add.html.twig', [
            'form' => $form->createView()
        ]);
    }

    /**
     *@Route("/spec/edit/{id}", requirements={"id"="\d+"})
     */
    public function edit(int $id,Request $request, SpecialtyRepository $specialtyRepository): Response
    {
        $isedited = false;
        $spec = $specialtyRepository->find($id);

        $form = $this->createForm(SpecType::class, $spec);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid())
        {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($spec);
            $entityManager->flush();
            $isedited = true;
        }
        return $this->render('specialty/edit.html.twig', [
            'specialty' => $spec,
            'form' => $form->createView(),
            'isedited' => $isedited
        ]);
    }

    /**
     *@Route("/spec/delete/{id}", requirements={"id"="\d+"})
     */
    public function delete(int $id, SpecialtyRepository $specialtyRepository): Response
    {
        $spec = $specialtyRepository->find($id);

        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->remove($spec);
        $entityManager->flush();

        return new Response('Specialty deleted');
    }
}
