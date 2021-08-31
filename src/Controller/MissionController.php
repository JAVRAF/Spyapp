<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MissionController extends AbstractController
{
    #[Route('/mission', name: 'mission')]
    public function index(): Response
    {
        return $this->render('mission/index.html.twig', [
            'controller_name' => 'MissionController',
        ]);
    }
}

/*
insert into mission (id, Title, Description, Codename, Type, Status, begin_date, end_date) values (1, 'porta volutpat', 'Integer a nibh.', 'Lima', 'intel', 'Success', '5/27/2021', '5/29/2021');
insert into mission (id, Title, Description, Codename, Type, Status, begins, ends) values (2, 'ante nulla', 'Nullam molestie nibh in lectus.', 'Zulu', 'In progress', 'Alpha', '3/31/2021', '');
insert into mission (id, Title, Description, Codename, Type, Status, begins, ends) values (3, 'nulla suscipit ligula', 'Phasellus in felis.', 'India', 'intel', 'Failure', '6/26/2021', '9/21/2020');
 */
