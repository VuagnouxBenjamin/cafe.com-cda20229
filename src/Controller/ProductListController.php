<?php

namespace App\Controller;

use App\Entity\Products;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProductListController extends AbstractController
{
    /**
     * @Route("/categorie-{id}", name="product_list")
     */
    public function index($id, EntityManagerInterface $entityManager): Response
    {



        return $this->render('product_list/index.html.twig', [
            'controller_name' => 'ProductListController',
            'products' => $entityManager->getRepository(Products::class)->findBy(['categorie' => $id]),
        ]);
    }
}
