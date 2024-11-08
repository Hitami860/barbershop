<?php

namespace App\Controller\Admin;

use App\Entity\Subcategories;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class SubcategoriesCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Subcategories::class;
    }

    public function configureFields(string $pageName): iterable
    {
        return [
            TextField::new('nom'),
            TextField::new('image'),
            TextField::new('categories'),
            AssociationField::new('categories')
            ->setLabel('Catégorie')
            ->setFormTypeOptions([
                'by_reference' => false,
                'multiple' => false,  
            ])
            ->setRequired(true)
        ];
    }
}
