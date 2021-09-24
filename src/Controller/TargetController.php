<?php

namespace App\Controller;

use App\Entity\Target;
use App\Form\TargetType;
use App\Repository\TargetRepository;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Config\Definition\Exception\Exception;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;

class TargetController extends AbstractController
{
    /**
     * @Route("/target")
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
     * @Route("/target/add")
     **/
    public function add(Request $request): Response
    {

        $target = new Target();
        $form = $this->createForm(TargetType::class, $target);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();

            $entityManager->persist($target);
            $entityManager->flush();
        }
        return $this->render('target/add.html.twig', [
            'form' => $form->createView()
        ]);
    }

    /**
     * @Route("/target/edit/{id}", requirements={"id"="\d+"})
     */
    public function edit(int $id, Request $request, TargetRepository $targetRepository): Response
    {
        $isedited = false;
        $target = $targetRepository->find($id);
        try {
            if (!$target) {
                throw new Exception('<h2>This target does not exist</h2>');
            }
            $form = $this->createForm(TargetType::class, $target);
            $form->handleRequest($request);
            if ($form->isSubmitted() && $form->isValid()) {

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
        } catch (Exception $e) {
            return new Response($e->getMessage());
        }
    }

    /**
     * @Route("/target/delete/{id}")
     */
    public function delete(int $id, TargetRepository $targetRepository): Response
    {
        $target = $targetRepository->find($id);
        try {
            if (!$target) {
                throw new Exception('<h2>This target does not exist</h2>');
            }
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($target);
            $entityManager->flush();

            return $this->render('target/delete.html.twig', [
                'target' => $target
            ]);
        } catch (Exception $e) {
            return new Response($e->getMessage());
        }
    }
}
