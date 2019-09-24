<?php


namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;

class HomeController extends abstractController
{
    /**
     * @Route("/",name ="home")
     */
    public function home()
    {
        $tableau=[['id' => '1',
            'title' => 'Akram',
            'content' => 'num 1',
            'price' => '1',
            'createdDate' => ''],

            ['id' => '2',
                'title' => 'Romu',
                'content' => 'num 2',
                'price' => '2',
                'createdDate' => '']];
        return $this->render('home/home.html.twig',
            ['tableau'=>$tableau]);

    }
}