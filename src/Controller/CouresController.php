<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class CouresController extends AbstractController
{
    /**
     * @Route("/coures", name="coures")
     */
    public function index()
    {
        return $this->render('coures/index.html.twig');
    }
}
