<?php

namespace App\Controller\Admin;

use App\Entity\Subservices;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IntegerField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use phpDocumentor\Reflection\Types\Integer;

class SubservicesCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Subservices::class;
    }

    
    public function configureFields(string $pageName): iterable
    {
        return [
            
            TextField::new('name'),
            TextField::new('description'),
            IntegerField::new('price'),
            IntegerField::new('duration'),
            AssociationField::new('services')
            ->setLabel('Services')
            ->setFormTypeOptions([
                'by_reference' => true,
                'multiple' => false,  
            ])
            ->setRequired(true)

        ];
    }
    
}
