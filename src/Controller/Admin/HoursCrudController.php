<?php

namespace App\Controller\Admin;

use App\Entity\Hours;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TimeField;

class HoursCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Hours::class;
    }

    
    public function configureFields(string $pageName): iterable
    {
        return [
            TimeField::new('starttime'),
            TimeField::new('endtime'),
            AssociationField::new('barbers')
            ->setLabel('barbers')
            ->setFormTypeOptions([
                'by_reference' => true,
                'multiple' => false,  
            ]),
            
        ];
    }
    
}
