<?php

namespace App\Controller\Admin;

use App\Entity\Products;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IntegerField;
use EasyCorp\Bundle\EasyAdminBundle\Field\MoneyField;
use EasyCorp\Bundle\EasyAdminBundle\Field\SlugField;
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
            SlugField::new('slug')->setTargetFieldName('name')->hideOnIndex(),
            TextField::new('image')->hideOnIndex(),
            AssociationField::new('categorie'),
            AssociationField::new('note'),
            TextEditorField::new('longDescription')->hideOnIndex(),
            TextEditorField::new('shortDescription')->hideOnIndex(),
            IntegerField::new('buyPrice'),
            IntegerField::new('sellPrice'),
            IntegerField::new('availableStock'),
            IntegerField::new('alertStock'),
            IntegerField::new('weightGram')->hideOnIndex(),
        ];
    }

}
