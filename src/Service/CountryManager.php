<?php

namespace App\Service;

use App\Repository\CountryRepository;

class CountryManager
{
    public function list(CountryRepository $countryRepository): Void
    {
        $countries = $countryRepository->findAll();
        $countriesCount = count($countries);
    }

    public function add(Request $request): void
    {
        $isAdded = false;
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

    }
}