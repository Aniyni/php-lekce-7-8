<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class GentleGnomeController extends AbstractController
{
    /**
     * @Route("/gentle/gnome", name="gentle_gnome")
     */
    public function index()
    {
        return $this->render('gentle_gnome/index.html.twig', [
            'controller_name' => 'GentleGnomeController',
        ]);
    }
}
