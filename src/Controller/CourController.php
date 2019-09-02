<?php

namespace App\Controller;

use App\Repository\CourRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class CourController extends AbstractController
{
    /**
     * @Route("/cour", name="cour")
     */
    public function index(CourRepository $courRepository)
    {   
        $cours = $courRepository->findAll();
        dump($cours);
        return $this->render('cour/index.html.twig',[
            'cours' => $cours,
        ]);
    }
}
