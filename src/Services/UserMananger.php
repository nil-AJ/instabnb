<?php


namespace App\Services;


use App\DTO\Product;
use App\Entity\Annoncement;
use App\Repository\AnnoncementRepository;
use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\ORM\EntityManager;

class UserMananger
{
    /**
     * @var AnnoncementRepository
     */
    private $annoncementRepository;
    private $entityManager;

    public  function  __construct(AnnoncementRepository $annoncementRepository, ObjectManager $entityManager)
    {
        $this->entityManager=$entityManager;
        $this->annoncementRepository = $annoncementRepository;
    }

    public function findAnnoncements()
    {
        return $this->annoncementRepository->findTableauEnt();
    }

    public function save(Product $product)
    {
        $adannoncements = new  Annoncement($product);
        $this->entityManager->persist($adannoncements);
        $this->entityManager->flush();
    }
    public function UserManager()
    {

    }
}