<?php


namespace App\Controller;


use App\DTO\Product;
use App\Form\ProductType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
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
    public function annoucementsAdd(Request $request)
    {
        $product = new Product();
        $form = $this->createForm(ProductType::class, $product);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // $entityManager = $this->getDoctrine()->getManager();
            // $entityManager->persist($task);
            // $entityManager->flush();
//            $data = $form->getData();
//            var_dump($data);
            return $this->redirectToRoute('home');
        }

        return $this->render('annoncements_add/annoncements_add.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}