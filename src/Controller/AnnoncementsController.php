<?php

namespace App\Controller;

use App\Entity\Annoncement;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AnnoncementsController extends abstractController
{
    /**
     * @Route("/annoucements/{page}",
     *     name="annoucements",
     *     defaults={"page"=1},
     *     requirements={"page"="\d+"})
     */
    public function annoucements()
    {
        $em = $this->getDoctrine()->getManager();
$tableau = $em->getRepository(Annoncement::class)->findTableauEnt();
dump($tableau);
        return $this->render('annoncements/annoncements.html.twig',['tableau'=>$tableau]);

    }
}