<?php

namespace App\DataFixtures;

use App\Entity\Cour;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        // $product = new Product();
        // $manager->persist($product);
        $date=time();
        $cour=new Cour();
        $cour->setTitleCour('titre')
              ->setIllustrationCour('illustration')
              ->setCreeationDate(new \DateTime('@'.$date))
              ->setDescription('un cour super');
              $manager->persist($cour);

        $manager->flush();
    }
}
