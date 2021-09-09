<?php

namespace App\DataFixtures;

use App\Entity\Categories;
use App\Entity\Comments;
use App\Entity\Products;
use App\Entity\User;
use App\Repository\ProductsRepository;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Faker\Factory;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class AppFixtures extends Fixture
{


    private UserPasswordEncoderInterface $passwordEncoder;

    public function __construct(UserPasswordEncoderInterface $passwordEncoder)
    {
        $this->passwordEncoder = $passwordEncoder;
    }

    public function load(ObjectManager $manager)
    {
        $faker = Factory::create();

        // name of the categories.
        $categorie_names = [
            'Océanie',
            'Inde',
            'Afrique',
            'Amérique centrale',
            'Amérique du sud',
            'Asie'
        ];

        //  create new categorie
        foreach ($categorie_names as $name) {
            $categories = new Categories();
            $categories->setCategoryName($name)
                ->setCategoryImage('images/categories/categories_img.png')
                ->setCategoryDescription($faker->sentences(2, true));

            //  Store the category into $manager.
            $manager->persist($categories);

            //  Creating 20 to 60 products per category.
            for ($i = 0; $i < rand(20, 60); $i++) {

                $product = new Products();

                $product
                    ->setName($faker->words(3, true))
                    ->setShortDescription($faker->sentences(1, true))
                    ->setLongDescription($faker->sentences(3, true))
                    ->setBuyPrice($faker->randomFloat(2, 5, 55))
                    ->setSellPrice($faker->randomFloat(2, 7, 77))
                    ->setAvailableStock($faker->numberBetween(5, 199))
                    ->setAlertStock($faker->numberBetween(10, 30))
                    ->setWeightGram($faker->numberBetween(150, 2000));

                //  Store the new product into $manager.
                $manager->persist($product);

                // add the product to the category stored in $manager.
                $categories->addProduct($product);


                $rand = rand(1, 10);
                if ($rand == 1) {

                    $user = new User();
                    $user
                        ->setEmail($faker->email())
                        ->setpassword($this->passwordEncoder->encodePassword(
                            $user,
                            "password"
                        ))
                        ->setFirstName($faker->name())
                        ->setLastName($faker->lastName())
                        ->setPhoneNumber($faker->e164PhoneNumber())
                        ->setShippingAddress($faker->address())
                        ->setBillingAddress($faker->address());

                    $manager->persist($user);

                    $comment = new Comments();
                    $comment
                        ->setRating($faker->numberBetween(3,5))
                        ->setComment($faker->sentences(5, true))
                        ->setProduct($product)
                        ->setUser($user);

                    $manager->persist($comment);

                }

            }

            // push everything stored in $manager into DB.
            $manager->flush();
        }
    }
}