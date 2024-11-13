<?php

namespace App\Controller;

use App\Entity\Categories;
use App\Entity\Produits;
use App\Entity\Subcategories;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class CategoriesController extends AbstractController
{

    #[Route('/categorie/{id}', name: 'app_categorie')]
    public function categorie($id, EntityManagerInterface $entity, EntityManagerInterface $produit, EntityManagerInterface $subcategories): Response
    {
       
        
        $categorie = $entity->getRepository(Categories::class)->findOneBy(['id' => $id]);
        $produit = $produit->getRepository(Produits::class)->findBy(['categories' => $categorie]);
        $subcategories = $subcategories->getRepository(Subcategories::class)->findBy(["categories"=>$categorie]);
        return $this->render('categorie/categorie.html.twig', [
            'controller_name' => 'CategorieController',
            'produit' => $produit,
            'id' => $id,
            'categorie' => $categorie,
            'subcategories'=>$subcategories,
        ]);
        
    }
    
}
