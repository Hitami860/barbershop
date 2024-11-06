<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

class SecurityController extends AbstractController
{
    #[Route('/login', name: 'app_login')]
    public function index(AuthenticationUtils $authenticationUtils): Response
    {
        $error = $authenticationUtils->getLastAuthenticationError();
        $lastPseudo = $authenticationUtils->getLastUsername();
        return $this->render('security/login.html.twig', [
            'controller_name' => 'SecurityController',
            'error' => $error,
            'lastpseudo' => $lastPseudo,
        ]);
    }
}
