<?php

namespace App\Controller;

use App\Entity\Country;
use App\Repository\CountryRepository;
use App\Form\CountryType;
use Doctrine\ORM\EntityManagerInterface;
use http\Exception;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CountryController extends AbstractController
{
    /**
     *@Route("/country")
     */
    public function list(CountryRepository $countryRepository): Response
    {
        $countries = $countryRepository->findAll();
        $countriesCount = count($countries);

        return $this->render('country/list.html.twig', [
            'countries' => $countries,
            'countriesCount' => $countriesCount
        ]);
    }

    /**
     *@Route("/country/add")
     */
    public function add(Request $request): Response
    {
        $isAdded = true;
        $country = new Country();
        $form = $this->createForm(CountryType::class, $country);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid())
        {

            $entityManager = $this->getDoctrine()->getManager();

            $entityManager->persist($country);
            $entityManager->flush();
            $isAdded = true;
        }
        return $this->render('country/add.html.twig', [
            'country' =>  $country,
            'form' => $form->createView(),
            'isAdded' => $isAdded
        ]);
    }

    /**
     *@Route("/country/edit/{id}", requirements={"id"="\d+"})
     */
    public function edit(int $id,Request $request, CountryRepository $countryRepository, EntityManagerInterface $entityManager): Response
    {
        $isedited = false;
        $country = $entityManager->getRepository(Country::class)->findOneByid($id);

        $form = $this->createForm(CountryType::class, $country);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid())
        {

            $entityManager = $this->getDoctrine()->getManager();

            $entityManager->persist($country);
            $entityManager->flush();
            $isedited = true;
        }
        return $this->render('country/edit.html.twig', [
            'country' => $country,
            'form' => $form->createView(),
            'isedited' => $isedited
        ]);
    }

    /**
     *@Route("/country/delete/{id}", requirements={"id"="\d+"})
     */
    public function delete(int $id,CountryRepository $countryRepository, EntityManagerInterface $entityManager): Response
    {
        $country = $entityManager->getRepository(Country::class)->findOneByid($id);

        $entityManager->remove($country);
        $entityManager->flush();

        return new Response('Country deleted');
    }
}
