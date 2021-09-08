<?php

namespace App\Controller;

use App\Entity\EmailList;
use App\Form\EmailListType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

class SecurityController extends AbstractController
{
    /**
     * @Route("/login", name="app_login")
     */
    public function login(Request $request, AuthenticationUtils $authenticationUtils): Response
    {
        // if ($this->getUser()) {
        //     return $this->redirectToRoute('target_path');
        // }

        // get the login error if there is one
        $error = $authenticationUtils->getLastAuthenticationError();
        // last username entered by the user
        $lastUsername = $authenticationUtils->getLastUsername();

        // ------------------------------------
        // -------------                 FOOTER
        // ------------------------------------
        // Creating email list form
        $email_list = new EmailList();
        $email_form = $this->createForm(EmailListType::class, $email_list);

        // handling request for email list form
        $email_form->handleRequest($request);
        if ($email_form->isSubmitted() && $email_form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($email_list);
            $entityManager->flush();

            return $this->redirectToRoute('app_login');
        }

        return $this->render('security/login.html.twig', [
            'last_username' => $lastUsername,
            'error' => $error,
            'email_form' => $email_form->createView(),
        ]);
    }

    /**
     * @Route("/logout", name="app_logout")
     */
    public function logout()
    {
        throw new \LogicException('This method can be blank - it will be intercepted by the logout key on your firewall.');
    }
}
