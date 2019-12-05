<?php

namespace App\Controller;

use App\Repository\ProgrammingLanguageRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class TestController extends AbstractController
{
    /**
     * @Route("/test/list", name="test_list")
     */
    public function findAll(ProgrammingLanguageRepository $programmingLanguageRepository)
    {
        return $this->render('test/list.html.twig', [
         'languanges' => $programmingLanguageRepository ->findAll()
        ]);
    }
    /**
     * @Route("/test/known", name="know")
     */
    public function findKnow(ProgrammingLanguageRepository $programmingLanguageRepository)
    {
        return $this->render('test/know.html.twig', [
            'languanges' => $programmingLanguageRepository ->findKnown()
        ]);
    }


    /**
     * @Route("/test", name="test")
     */
    public function index()
    {
        return $this->render('test/index.html.twig', [
            'controller_name' => 'TestController',
        ]);
    }
    /**
     * @Route("/test/detail ", name="detail")
     */
    public function detail()
    {
        return $this->render('test/detail.html.twig', [
            'username' => 'andrejmaly',
            'password' => 'supertajneheslo',
            'name' => 'Andrej Malý',
            'age' => '20',
        ]);
    }
    /**
     * @Route("/test/{name}", name="hello")
     */
    public function hello($name)    {
        return $this->render('test/index.html.twig', [
            'controller_name' => $name,
        ]);
    }

}
