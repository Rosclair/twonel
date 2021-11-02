<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @Route("/eduquer-votre-chien", name="chien")
     */
    public function chien(): Response
    {
        return $this->render('home/chien.html.twig');
    }

    /**
     * @Route("/methode-plus-jamais-d-acne", name="acne")
     */
    public function acne(): Response
    {
        return $this->render('home/acne.html.twig');
    }

    /**
     * @Route("/miracle-de-la-grossesse", name="grossesse")
     */
    public function grossesse(): Response
    {
        return $this->render('home/grossesse.html.twig');
    }

    /**
     * @Route("/stop-hemorroides", name="home")
     */
    public function hemorroides(): Response
    {
        return $this->render('home/hemorroides.html.twig');
    }
}
