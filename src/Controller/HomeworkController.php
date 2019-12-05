<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class HomeworkController extends AbstractController
{
    /**
     * @Route("/homework", name="homework")
     */
    public function index()
    {
        return $this->render('homework/index.html.twig', [
            'controller_name' => 'HomeworkController',
        ]);
    }
    /**
 * @Route("/homework/remember", name="remember")
 */
    public function remember()
    {
        return $this->render('homework/remember.html.twig', [
            'controller_name' => 'HomeworkController',
        ]);
    }

    /**
     * @Route("/homework/list", name="list")
     */
    public function list()
    {
        return $this->render('homework/list.html.twig', [
            'controller_name' => 'HomeworkController',
        ]);
    }

}
