<?php

namespace App\Controller;

use App\Entity\EmailList;
use App\Form\EmailListType;
use App\Service\Cart\CartService;
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
    public function index(CartService $cartService,Request $request, EntityManagerInterface $entityManager): Response
    {

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
            'items' => $cartService->getItemAndQuantity(),
            'totalPrice' => $cartService->getTotalPrice(),
            'related' => $cartService->getRelatedToCart(),
        ]);

    }

    /**
     * @Route("/panier/add/{id}", name="cart_add")
     */
    public function add($id, CartService $cartService)
    {
        $cartService->addToCart($id);
        return $this->redirectToRoute('cart_index');
    }

    /**
     * @Route("/panier/remove/{id}", name="cart_remove")
     */
    public function remove($id, CartService $cartService)
    {
        $itemCount = $cartService->removeFromCart($id);

        if ($itemCount > 0 ) {
            return $this->redirectToRoute("cart_index");
        } else {
            return $this->redirectToRoute("home");
        }
    }
}
