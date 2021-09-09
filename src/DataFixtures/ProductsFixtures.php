<?php

namespace App\DataFixtures;

use App\Entity\Categories;
use App\Entity\Products;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Faker\Factory;

class ProductsFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
//        $faker = Factory::create();
//
//        // name of the categories.
//        $categorie_names = [
//            'Océanie',
//            'Inde',
//            'Afrique',
//            'Amérique centrale',
//            'Amérique du sud',
//            'Asie'
//        ];
//
//        //  create new categorie
//        foreach ($categorie_names as $name) {
//            $categories = new Categories();
//            $categories->setCategoryName($name)
//                ->setCategoryImage('images/categories/categories_img.png')
//                ->setCategoryDescription($faker->sentences(2, true));
//
//            //  Store the category into $manager.
//            $manager->persist($categories);
//
//            //  Creating 20 to 60 products per category.
//            for ($i = 0; $i < rand(20, 60); $i++) {
//
//                $product = new Products();
//
//                $product
//                    ->setName($faker->words(3, true))
//                    ->setShortDescription($faker->sentences(1, true))
//                    ->setLongDescription($faker->sentences(3, true))
//                    ->setBuyPrice($faker->randomFloat(2, 5, 55))
//                    ->setSellPrice($faker->randomFloat(2, 7, 77))
//                    ->setAvailableStock($faker->numberBetween(5, 199))
//                    ->setAlertStock($faker->numberBetween(10, 30))
//                    ->setWeightGram($faker->numberBetween(150, 2000));
//
//                //  Store the new product into $manager.
//                $manager->persist($product);
//
//                // add the product to the category stored in $manager.
//                $categories->addProduct($product);
//            }
//
//            // push everything stored in $manager into DB.
//            $manager->flush();

     //   }
    }
}
