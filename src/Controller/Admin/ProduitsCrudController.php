<?php

namespace App\Controller\Admin;

use App\Entity\Produits;
use App\Form\SubcategoriesType;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Field\CollectionField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IntegerField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class ProduitsCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Produits::class;
    }

    public function configureFields(string $pageName): iterable
    {
        return [
            TextField::new('nom'),
            TextField::new('description'),
            IntegerField::new('prix'),
        
            TextField::new('image'),

            AssociationField::new('Subcategories')
            ->setLabel('subcategories')
            ->setFormTypeOptions([
                'by_reference' => false,
                'multiple' => false,  
            ]),
            AssociationField::new('categories')
            ->setLabel('Catégorie')
            ->setFormTypeOptions([
                'by_reference' => false,
                'multiple' => false,  
            ])
            ->setRequired(false)
        ];
    }
}
