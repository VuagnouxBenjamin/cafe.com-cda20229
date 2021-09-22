<?php

namespace App\Service\Cart;

use App\Entity\Products;
use App\Repository\ProductsRepository;
use Symfony\Component\HttpFoundation\Session\SessionInterface;

class CartService
{


    private SessionInterface $session;
    private ProductsRepository $productsRepository;

    public function __construct(SessionInterface $session, ProductsRepository $productsRepository) {
        $this->session = $session;
        $this->productsRepository = $productsRepository;
    }

    /**
     * @param int $id
     *
     * Add a product ($id) to the "cart" in Session.
     */
    public function addToCart(int $id) :void
    {
        // we get the cart, if cart doesn't exist init him as an empty array.
        $panier = $this->session->get("cart", []);

        // add things to $panier : on product ($id) quantity = 1.
        // -- if exists, add one to total quantity.
        // -- if not, add only one.
        if (!empty($panier[$id])) {
            $panier[$id]++;
        } else {
            $panier[$id] = 1;
        }

        // update $panier in session.
        $this->session->set("cart", $panier);
    }

    /**
     * @return array [Product => quantity]
     *
     * Add the Doctrine Entity and the quantity to a array representing user's cart.
     */
    public function getItemAndQuantity() :array
    {
        $panier = $this->session->get("cart");

        $cartData = [];

        foreach($panier as $id => $quantity) {
            $cartData[] = [
                'product' => $this->productsRepository->find($id),
                "quantity" => $quantity
            ];
        }

        return $cartData;
    }

    /**
     * @return float
     *
     * Calculates total price (sell price * quantity) of all items in cart
     */
    public function getTotalPrice() :float {
        $totalPrice = 0;

        foreach($this->getItemAndQuantity() as $item) {
            $totalPrice += $item["product"]->getSellPrice()  * $item["quantity"];
        }

        return $totalPrice;
    }

    /**
     * @return Products[]
     *
     * return an array of related products to those in the cart
     */
    public function getRelatedToCart() :array
    {
        if (!empty($this->getItemAndQuantity())) {
            return $this->productsRepository->findRelatedNote(
                $this->getItemAndQuantity()[0]["product"]->getNote(),
                $this->getItemAndQuantity()[0]["product"]->getId()
            );
        } else {
            return $this->productsRepository->find4Products();
        }
    }

    /**
     * @param $id
     * @return int number of items left in cart
     *
     * remove an item from the cart
     */
    public function removeFromCart($id) :int
    {
        $panier = $this->session->get("cart", []);

        if (!empty($panier[$id])) {
            unset($panier[$id]);
        }

        $this->session->set("cart", $panier);

        return count($panier);
    }

}