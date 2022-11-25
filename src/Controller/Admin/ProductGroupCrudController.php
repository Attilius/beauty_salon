<?php

namespace App\Controller\Admin;

use App\Entity\ProductGroup;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class ProductGroupCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return ProductGroup::class;
    }

    /*
    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id'),
            TextField::new('title'),
            TextEditorField::new('description'),
        ];
    }
    */
}
