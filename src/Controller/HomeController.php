<?php


namespace App\Controller;

use App\Entity\Annoncement;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;

class HomeController extends abstractController
{
    /**
     * @Route("/{_locale}",name ="home")
     */
    public function home()
    {


        $em = $this->getDoctrine()->getManager();
        $tableau = $em->getRepository(Annoncement::class)->findTableau(2);
        return $this->render('home/home.html.twig',['tableau'=>$tableau]);

    }
}