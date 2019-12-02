<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class ThesesController extends AbstractController
{
    /**
     * @Route("/theses", name="theses")
     */
    public function index()
    {
        return $this->render('theses/index.html.twig', [
            'controller_name' => 'ThesesController',
        ]);
    }
}
