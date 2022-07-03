<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TestController extends AbstractController
{
    /**
     * @Route("/", name="app_test")
     */
    public function index(): Response
    {   
        print_r(apache_get_modules());
        return $this->render('test/index.html.twig', [
            'controller_name' => 'TestController',
        ]);
    }

 /**
     * @Route("/blog", name="app_list")
     */
    public function list()
    {
        // ...
    }
}
