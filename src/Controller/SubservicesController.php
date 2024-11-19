<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class SubservicesController extends AbstractController
{
    #[Route('/subservices', name: 'app_subservices')]
    public function index(): Response
    {
        return $this->render('subservices/subservices.html.twig', [
            'controller_name' => 'SubservicesController',
        ]);
    }
}
