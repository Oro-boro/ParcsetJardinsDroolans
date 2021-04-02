<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class IndexController extends AbstractController
{
    /**
     * @Route("/", name="index")
     */
    public function index(): Response
    {
        return $this->render('public/index.html.twig', [
            'controller_name' => 'IndexController',
        ]);
    }

    /**
     * @Route("/services", name="services")
     */
    public function services(): Response
    {
        return $this->render('public/services.html.twig', [
            'controller_name' => 'IndexController',
        ]);
    }

    /**
     * @Route("/en-images", name="en-images")
     */
    public function galerie(): Response
    {
        return $this->render('public/en-images.html.twig', [
            'controller_name' => 'IndexController',
        ]);
    }

    /**
     * @Route("/contact", name="contact")
     */
    public function contact(): Response
    {
        return $this->render('public/contact.html.twig', [
            'controller_name' => 'IndexController',
        ]);
    }
}