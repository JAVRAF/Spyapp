<?php

namespace App\Controller;

use App\Entity\Asset;
use App\Form\AssetType;
use App\Repository\AssetRepository;
use App\Repository\MissionRepository;
use Doctrine\ORM\EntityManagerInterface;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Config\Definition\Exception\Exception;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AssetController extends AbstractController
{
    /**
     * @Route("/asset")
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
     * @Route("/asset/add")
     **/
    public function add(Request $request, MissionRepository $missionrepository): Response
    {
        $today = date_create();
        $isAdded = false;
        $asset = new Asset();
        $form = $this->createForm(AssetType::class, $asset);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $mission = $missionrepository->find($asset->getCurrentMission());
            if ($asset->getNationality() === $mission->getCountry()) {
                if (($asset->getDob()->getTimestamp() < date_timestamp_get($today)) === true) {
                    $entityManager = $this->getDoctrine()->getManager();
                    $entityManager->persist($asset);
                    $entityManager->flush();
                    $isAdded = true;
                } else {
                    echo('<script>alert("Invalid date fo birth")</script>');
                }
            } else {
                echo('<script>alert("Asset must be of mission\'s country nationality")</script>');
            }
        }
        return $this->render('asset/add.html.twig', [
            'asset' => $asset,
            'form' => $form->createView(),
            'isAdded' => $isAdded
        ]);
    }

    /**
     * @Route("/asset/edit/{id}", requirements={"id"="\d+"})
     */
    public function edit(int $id, Request $request, AssetRepository $assetRepository, MissionRepository $missionrepository): Response
    {
        $today = date_create();
        $isedited = false;
        $asset = $assetRepository->find($id);
        try {
            if (!$asset) {
                throw new Exception('<h2>This asset does not exist</h2>');
            }
            $form = $this->createForm(AssetType::class, $asset);
            $form->handleRequest($request);
            if ($form->isSubmitted() && $form->isValid()) {
                $mission = $missionrepository->find($asset->getCurrentMission());
                if ($asset->getNationality() === $mission->getCountry()) {
                    if (($asset->getDob()->getTimestamp() < date_timestamp_get($today)) === true) {
                        $entityManager = $this->getDoctrine()->getManager();
                        $entityManager->persist($asset);
                        $entityManager->flush();
                        $isedited = true;
                    } else {
                        echo('<script>alert("Invalid date of birth")</script>');
                    }
                } else {
                    echo('<script>alert("Asset must be of mission\'s country nationality")</script>');
                }
            }
            return $this->render('asset/edit.html.twig', [
                'asset' => $asset,
                'form' => $form->createView(),
                'isedited' => $isedited
            ]);
        } catch (Exception $e) {
            return new Response($e->getMessage());
        }
    }

    /**
     * @Route("/asset/delete/{id}", requirements={"id"="\d+"})
     */
    public function delete(int $id, AssetRepository $assetRepository): Response
    {
        $asset = $assetRepository->find($id);
        try {
            if (!$asset) {
                throw new Exception('<h2>This asset does not exist</h2>');
            }
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($asset);
            $entityManager->flush();

            return $this->render('asset/delete.html.twig', [
                'asset' => $asset
            ]);
        } catch (Exception $e) {
            return new Response($e->getMessage());
        }
    }
}
