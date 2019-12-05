<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class PhytagorasController extends AbstractController
{
    /**
     * @Route("/phytagoras", name="phytagoras")
     */
    public function index($a, $b)
    {
        return $this->render('phytagoras/index.html.twig', [
        'a' => $a,
        'b' => $b,
        'obdelnikobsah' => $a * $b,
        'obdelnikobvod' => '($a + $b)*2',
        'strana' => '6',
        'uhel' => '60',
        'vyska' => 'strana' * sin (deg2rad('uhel')),
        'obsahtrojuhelniku' => ('vyska' * 'strana')/2,
        ]);
    }
}
