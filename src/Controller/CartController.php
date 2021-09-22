<?php

namespace App\Controller;

use App\Entity\EmailList;
use App\Entity\Products;
use App\Form\EmailListType;
use App\Repository\ProductsRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CartController extends AbstractController
{
    /**
     * @Route("/panier", name="cart_index")
     */
    public function index(Request $request, ProductsRepository $productsRepository, EntityManagerInterface $entityManager): Response
    {
        $panier = $request->getSession()->get("cart");

        $cartData = [];

        foreach($panier as $id => $quantity) {
            $cartData[] = [
                'product' => $productsRepository->find($id),
                "quantity" => $quantity
            ];
        }

        $totalPrice = 0;

        foreach($cartData as $item) {
            $totalPrice += $item["product"]->getSellPrice()  * $item["quantity"];
        }

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

        return $this->render('cart/index.html.twig', [
            "intro_sentence" => 'Panier',
            'email_form' => $email_form->createView(),
            'items' => $cartData,
            'totalPrice' => $totalPrice,
            'related' => $entityManager->getRepository(Products::class)->findRelatedNote($cartData[0]["product"]->getNote(), $cartData[0]["product"]->getId()),
        ]);

    }

    /**
     * @Route("/panier/add/{id}", name="cart_add")
     */
    public function add($id, Request $request)
    {
        // we get the session
        $session = $request->getSession();

        // we get the cart, if cart doesn't exist init him as an empty array.
        $panier = $session->get("cart", []);

        // add things to $panier : on product ($id) quantity = 1.
        // -- if exists, add one to total quantity.
        // -- if not, add only one.
        if (!empty($panier[$id])) {
            $panier[$id]++;
        } else {
            $panier[$id] = 1;
        }

        // update $panier in session.
        $session->set("cart", $panier);

        return $this->redirectToRoute('cart_index');
    }
}
