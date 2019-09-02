<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class CourController extends AbstractController
{
    /**
     * @Route("/cour", name="cour")
     */
    public function index()
    {
        return $this->render('cour/index.html.twig', [
            'controller_name' => 'CourController',
        ]);
    }
}
