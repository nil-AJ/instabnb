<?php


namespace App\Controller;


use App\DTO\Product;
use App\Entity\Annoncement;
use App\Form\ProductType;
use App\Services\AnnnoncementsServices;
use App\Services\UserMananger;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AnnoncementsAddController extends AbstractController
{

    /**
     * @var Annoncement|AnnnoncementsServices
     */

    private $annnoncementsServices;

    /**
     * @var UserMananger|UserMananger
     */

    private $UserManager;

    /**
     * AnnoncementsAddController constructor.
     * @param UserMananger $UserManager
     */
    public function __construct(UserMananger $UserManager, AnnnoncementsServices $annnoncementsServices)
    {
        $this->UserManager = $UserManager;

        $this->annnoncementsServices = $annnoncementsServices;
    }


    /**
     * @Route("/annoucements/add/{_locale}",
     * name="annoucementsAdd",
     * methods={"GET","POST"}
     * )
     */
    public function annoucementsAdd(Request $request)
    {
        dump($this->annnoncementsServices->index());
        $product = new Product();
        $form = $this->createForm(ProductType::class, $product);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->UserManager->save($product);
            return $this->redirectToRoute('home');
        }

        return $this->render('annoncements_add/annoncements_add.html.twig', [
            'form' => $form->createView(),
        ]);


    }



}