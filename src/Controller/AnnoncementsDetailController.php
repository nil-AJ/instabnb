<?php


namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AnnoncementsDetailController extends abstractController
{
    /**
     * @Route("/annoucementsss/{id}/detail", name="annoncementsDetail",requirements={"id"="\d+"})
     */
    public function annoncementDetail($id)
    {

        return $this->render('annoncements_detail/annoncements_detail.html.twig',['id'=>$id]);
    }
}