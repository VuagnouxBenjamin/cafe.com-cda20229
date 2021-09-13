<?php

namespace App\Controller;

use App\Entity\EmailList;
use App\Entity\Products;
use App\Form\EmailListType;
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

        // ------------------------------------
        // -------------                 FOOTER
        // ------------------------------------
        // Creating email list form
        $email_list = new EmailList();
        $email_form = $this->createForm(EmailListType::class, $email_list);

        // handling request for email list form
        $email_form->handleRequest($request);
        if ($email_form->isSubmitted() && $email_form->isValid()) {
            $entityManager->persist($email_list);
            $entityManager->flush();

            return $this->redirectToRoute('home');
        }


        return $this->render('product_list/index.html.twig', [
            'products' => $products,
            'pagination' => $pagination,
            'email_form' => $email_form->createView(),
            'intro_sentence' => 'Tous les cafés'
        ]);
    }
}
