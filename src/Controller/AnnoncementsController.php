<?php

namespace App\Controller;

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
        $tableau = [['id' => '1',
            'title' => 'Akram',
            'content' => 'num 1',
            'price' => '1',
            'createdDate' => ''],

            ['id' => '2',
                'title' => 'Romu',
                'content' => 'num 2',
                'price' => '2',
                'createdDate' => ''],

            ['id' => '3',
                'title' => 'Vayango',
                'content' => 'num 3',
                'price' => '3',
                'createdDate' => ''],

            ['id' => '4',
                'title' => 'JOJO',
                'content' => 'num 4',
                'price' => '4',
                'createdDate' => ''],

            ['id' => '5',
                'title' => 'LOUIS14',
                'content' => 'num 5',
                'price' => '5',
                'createdDate' => ''],

            ['id' => '6',
                'title' => 'NIL',
                'content' => 'num 6',
                'price' => '6',
                'createdDate' => ''],

            ['id' => '7',
                'title' => 'Sayto',
                'content' => 'num 7',
                'price' => '7',
                'createdDate' => ''],

            ['id' => '8',
                'title' => 'Ekiro',
                'content' => 'num 8',
                'price' => '8',
                'createdDate' => ''],

            ['id' => '9',
                'title' => 'Mathis',
                'content' => 'num 9',
                'price' => '9',
                'createdDate' => ''],

            ['id' => '10',
                'title' => 'pika',
                'content' => 'num 10',
                'price' => '10',
                'createdDate' => '']];


        return $this->render('annoncements/annoncements.html.twig',
        ['tableau'=>$tableau]);

    }
}