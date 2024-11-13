<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class SubcategoriesController extends AbstractController
{
    #[Route('/subcategories', name: 'app_subcategories')]
    public function index(): Response
    {
        return $this->render('subcategories/subcategories.html.twig', [
            'controller_name' => 'SubcategoriesController',
        ]);
    }
}
