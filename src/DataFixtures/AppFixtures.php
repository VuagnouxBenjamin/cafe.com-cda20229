<?php

namespace App\DataFixtures;

use App\Entity\Categories;
use App\Entity\Comments;
use App\Entity\Notes;
use App\Entity\Products;
use App\Entity\User;
use App\Repository\ProductsRepository;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Faker\Factory;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Symfony\Component\String\Slugger\SluggerInterface;

class AppFixtures extends Fixture
{


    private UserPasswordEncoderInterface $passwordEncoder;
    private SluggerInterface $slugger;

    public function __construct(UserPasswordEncoderInterface $passwordEncoder, SluggerInterface $slugger)
    {
        $this->passwordEncoder = $passwordEncoder;
        $this->slugger = $slugger;
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

        $note_names = [
            'Agrumes',
            'Epicé',
            'Floral',
            'Fruité',
            'Gourmand',
            'Grillé',
            'Végétal'
        ];

        for($i = 0; $i < count($note_names); $i++) {
            ${"note$i"} = new Notes();
            ${"note$i"}->setName($note_names[$i]);

            $manager->persist(${"note$i"});
        }

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
                    ->setWeightGram($faker->numberBetween(150, 2000))
                    ->setImage('images/products/product_img.png')
                    ->setSlug($this->slugger->slug($product->getName()));

                $noteIndex = rand(0, count($note_names) - 1);
                ${"note$noteIndex"}->addProduct($product);

                //  Store the new product into $manager.
                $manager->persist($product);
                $manager->persist( ${"note$noteIndex"});

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

                    for ($j =0; $j<5; $j++) {
                        $comment = new Comments();
                        $comment
                            ->setRating($faker->numberBetween(1, 5))
                            ->setComment($faker->sentences(5, true))
                            ->setProduct($product)
                            ->setUser($user);

                        $manager->persist($comment);
                    }
                }

            }

            // push everything stored in $manager into DB.
            $manager->flush();
        }
    }
}