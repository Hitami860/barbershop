<?php

namespace App\Controller;

use App\Entity\Produits;
use App\Entity\Subcategories;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class SubcategoriesController extends AbstractController
{
    #[Route('/subcategories/{id}', name: 'app_subcategories')]
    public function index($id, EntityManagerInterface $entity, EntityManagerInterface $produit): Response
    {
        $Subcategories = $entity->getRepository(Subcategories::class)->findOneBy(['id' => $id]) ;
        $produit = $produit->getRepository(Produits::class)->findBy(['Subcategories' => $Subcategories]);
        return $this->render('subcategories/subcategories.html.twig', [
            'controller_name' => 'SubcategoriesController',
            'produit' => $produit,
            'Subcategories' => $Subcategories, 

        ]);
    }
}
