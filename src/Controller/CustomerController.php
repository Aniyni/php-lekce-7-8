<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class CustomerController extends AbstractController
{
    /**
     * @Route("/customer", name="customer")
     */
    public function index()
    {
        return $this->render('customer/index.html.twig', [
            'controller_name' => 'CustomerController',
        ]);
    }
    /**
     * @Route("/customer/detail/{id}", name="detail_customer")
     */
    public function detail($id)
    {
        if (ctype_digit ($id)) { return $this->render('customer/detail.html.twig', [
            'id_customer' => $id,
        ]);
        }
        else { return$this->render('customer/chyba.html.twig', [
            'id_customer' => $id,
        ]);
        }

        }
}
