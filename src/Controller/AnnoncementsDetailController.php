<?php


namespace App\Controller;


use App\Entity\Annoncement;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AnnoncementsDetailController extends abstractController
{
    /**
     * @Route("/annoucementsss/{id}/detail/{_locale}", name="annoncementsDetail",requirements={"id"="\d+"})
     */
    public function annoncementDetail($id)
    {
        $repo = $this->getDoctrine()->getRepository(Annoncement::class);

        $annoce = $repo->find($id);

        return $this->render('annoncements_detail/annoncements_detail.html.twig',['annonce'=>$annoce]);
    }
}