<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class AnnonceController extends AbstractController
{
    /**
     * @Route("/annonce", name="annonce")
     */
    public function index()
    {
        $tableau=[['language'=>'Symfony',
                'version'=>'4.3.4'],
                ['language'=>'PHP',
                'version'=>'7.3'],
                ['language'=>'Node.js',
                'version'=>'10.2']];

        $tableau2=['Symfony','TROLL','TOTO'];

        return $this->render('annonce/index.html.twig', [
            'controller_name' => 'AnnonceController',
            'tableau'=>$tableau,
            'tableau2'=>$tableau2,
        ]);

    }
}
