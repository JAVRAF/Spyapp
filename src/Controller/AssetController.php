<?php

namespace App\Controller;

use App\Entity\Asset;
use App\Form\AssetType;
use App\Repository\AssetRepository;
use Doctrine\ORM\EntityManagerInterface;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AssetController extends AbstractController
{
    /**
     *@Route("/asset")
     */
    public function list(AssetRepository $assetRepository, PaginatorInterface $paginator, Request $request): Response
    {
        $assets = $assetRepository->findAll();

        $pages = $paginator->paginate(
            $assets,
            $request->query->getInt('page', 1), 2
        );
        return $this->render('asset/list.html.twig', [
            'assets' => $assets,
            'assetsCount' => count($assets),
            'pagination' => $pages
        ]);
    }

    /**
     *@Route("/asset/add")
     **/
    public function add(Request $request): Response
    {
        $isAdded = false;
        $asset = new Asset();
        $form = $this->createForm(AssetType::class, $asset);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid())
        {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($asset);
            $entityManager->flush();
            $isAdded = true;
        }
        return $this->render('asset/add.html.twig', [
            'asset' => $asset,
            'form' => $form->createView(),
            'isAdded' => $isAdded
        ]);
    }

    /**
     *@Route("/asset/edit/{id}", requirements={"id"="\d+"})
     */
    public function edit(int $id,Request $request, AssetRepository $assetRepository): Response
    {
        $isedited = false;
        $asset = $assetRepository->find($id);

        $form = $this->createForm(AssetType::class, $asset);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid())
        {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($asset);
            $entityManager->flush();
            $isedited = true;
        }
        return $this->render('asset/edit.html.twig', [
            'asset' => $asset,
            'form' => $form->createView(),
            'isedited' => $isedited
        ]);
    }

    /**
     *@Route("/asset/delete/{id}", requirements={"id"="\d+"})
     */
    public function delete(int $id, AssetRepository $assetRepository): Response
    {
        $asset = $assetRepository->find($id);

        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->remove($asset);
        $entityManager->flush();

        return new Response('Asset deleted');
    }
}
