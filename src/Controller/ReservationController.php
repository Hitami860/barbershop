<?php

namespace App\Controller;

use App\Entity\Barbers;
use App\Repository\BarbersRepository;
use App\Repository\SubservicesRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class ReservationController extends AbstractController
{

    public function __construct(
        readonly private SubservicesRepository $subservicesRepository,
    ){}

    #[Route('/reservation', name: 'app_reservation')]
    public function index(): Response
    {

        $sub = $this->subservicesRepository->findAll();

        foreach($sub as $value){
            $newArray[$value->getServices()->getName()][] = $value;
        }
    
        return $this->render('reservation/reservation.html.twig', [
            'subServices' => $newArray,
        ]);
    }

    #[Route('/reservation/{id}', name: 'app_reservation_detail')]
    public function detail($id, SubservicesRepository $subservicesRepository, EntityManagerInterface $barbers): Response
    {

        $subservice = $subservicesRepository->find($id);

        if (!$subservice) {
            throw $this->createNotFoundException('Sous-service non trouvé');
        }

        $barbers = $barbers->getRepository(Barbers::class)->findBy(["availability"=>true]);

        return $this->render('reservation/detail.html.twig', [
            'subservice' => $subservice,
            'barbers' => $barbers,
        ]);
    }
    
    
}
