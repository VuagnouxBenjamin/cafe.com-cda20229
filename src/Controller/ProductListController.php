<?php

namespace App\Controller;

use App\Entity\Products;
use Doctrine\ORM\EntityManagerInterface;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProductListController extends AbstractController
{
    /**
     * @Route("/categorie-{id}", name="product_list")
     */
    public function index($id, EntityManagerInterface $entityManager, PaginatorInterface $paginator, Request $request): Response
    {
        $products = $entityManager->getRepository(Products::class)->findBy(['categorie' => $id]);

        $pagination = $paginator->paginate(
            $entityManager->getRepository(Products::class)->findByCategoryQuery($id),
            $request->query->getInt('page', 1),
            12
        );


        return $this->render('product_list/index.html.twig', [
            'controller_name' => 'ProductListController',
            'products' => $products,
            'pagination' => $pagination,
        ]);
    }
}
