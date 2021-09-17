<?php

namespace App\Controller\Admin;

use App\Entity\Products;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IntegerField;
use EasyCorp\Bundle\EasyAdminBundle\Field\MoneyField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class ProductsCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Products::class;
    }


    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id')->hideOnForm(),
            TextField::new('name'),
            TextField::new('image')->hideOnIndex(),
            AssociationField::new('categorie'),
            AssociationField::new('note'),
            TextEditorField::new('longDescription')->hideOnIndex(),
            TextEditorField::new('shortDescription')->hideOnIndex(),
            MoneyField::new('buyPrice')->setCurrency('EUR'),
            MoneyField::new('sellPrice')->setCurrency('EUR'),
            IntegerField::new('availableStock'),
            IntegerField::new('alertStock'),
            IntegerField::new('weightGram')->hideOnIndex(),
        ];
    }

}
