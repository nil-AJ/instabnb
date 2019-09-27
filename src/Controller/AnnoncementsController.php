<?php

namespace App\Controller;

use App\Entity\Annoncement;
use App\Services\UserMananger;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AnnoncementsController extends abstractController
{


    /**
     * @var UserMananger|UserMananger
     */

    private $userManager;


    public function __construct(UserMananger $userManager )
    {
        $this->userManager = $userManager;
    }

    /**
     * @Route("/annoucements/{page}/{_locale}",
     *     name="annoucements",
     *     defaults={"page"=1},
     *     requirements={"page"="\d+"})
     */
    public function annoucements()
    {
        $tableau = $this->userManager->findAnnoncements();
        dump($tableau);
        return $this->render('annoncements/annoncements.html.twig',['tableau'=>$tableau]);

    }
}