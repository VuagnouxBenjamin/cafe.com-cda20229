<?php

namespace App\Controller;

use App\Entity\Categories;
use App\Entity\EmailList;
use App\Form\EmailListType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function index(Request $request, EntityManagerInterface $entityManager): Response
    {
        // ------------------------------------
        // -------------             CATEGORIES
        // ------------------------------------
        $cat_repository = $entityManager->getRepository(Categories::class);
        $categories = $cat_repository->findSixLast();

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
            $this->redirectToRoute('home');
            // TODO GROUP : Au submit recharger la page pour reset le formulaire.
        }

        // ------------------------------------
        // -------------                 RENDER
        // ------------------------------------
        return $this->render('home/index.html.twig', [
            'email_form' => $email_form->createView(),
            'categories' => $categories,
        ]);
    }
}
