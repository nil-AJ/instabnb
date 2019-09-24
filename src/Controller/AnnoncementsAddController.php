<?php


namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AnnoncementsAddController extends abstractController
{

    /**
     * @Route("/annoucements/add",
     * name="annoucementsAdd",
     * methods={"GET","POST"}
     * )
     */

    public function annoucementsAdd()
    {
        return $this->render('annoncements_add/annoncements_add.html.twig');
    }
}