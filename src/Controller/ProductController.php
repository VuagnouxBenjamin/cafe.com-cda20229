<?php

namespace App\Controller;

use App\Entity\Comments;
use App\Entity\EmailList;
use App\Entity\Products;
use App\Entity\ProductSearch;
use App\Form\EmailListType;
use App\Form\ProductSearchType;
use Doctrine\ORM\EntityManagerInterface;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


/**
 * @Route("/products")
 */
class ProductController extends AbstractController
{
    /**
     * @Route("/categorie/{id}", name="product_list")
     */
    public function index($id, EntityManagerInterface $entityManager, PaginatorInterface $paginator, Request $request): Response
    {

        // Filter
        $search = new ProductSearch();
        $filterForm = $this->createForm(ProductSearchType::class, $search);
        $filterForm->handleRequest($request);


        // Pagination
        $products = $entityManager->getRepository(Products::class)->findBy(['categorie' => $id]);

        $pagination = $paginator->paginate(
            $entityManager->getRepository(Products::class)->findByCategoryQuery($search, $id),
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

        return $this->render('products/index.html.twig', [
            'products' => $products,
            'pagination' => $pagination,
            'email_form' => $email_form->createView(),
            'intro_sentence' => 'Tous les cafés',
            'filter_form' => $filterForm->createView(),
        ]);
    }

    /**
     * @Route("/{id}/{slug}", name="product_detail")
     */
    public function detail($slug, $id, EntityManagerInterface $entityManager, Request $request) : Response
    {
        $product = $entityManager->getRepository(Products::class)->find($id);
        $rating = $entityManager->getRepository(Comments::class)->getAverageRating($id);

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

        return $this->render('products/detail.html.twig', [
            'product' => $product,
            'rating' => $rating[0],
            'email_form' => $email_form->createView(),
            'comments' => $entityManager->getRepository(Comments::class)->findBy(['product' => $id]),
            'related' => $entityManager->getRepository(Products::class)->findRelatedNote($product->getNote()),
        ]);
    }

}
