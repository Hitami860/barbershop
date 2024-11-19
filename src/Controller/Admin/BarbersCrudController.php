<?php

namespace App\Controller\Admin;

use App\Entity\Barbers;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\BooleanField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class BarbersCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Barbers::class;
    }

    
    public function configureFields(string $pageName): iterable
    {
        return [
            TextField::new('name'),
            TextField::new('presentation'),
            BooleanField::new('availability'),
        ];
    }
    
}
