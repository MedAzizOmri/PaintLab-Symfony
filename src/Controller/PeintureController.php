<?php

namespace App\Controller;

use App\Entity\Peinture;
use App\Repository\PeintureRepository;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;


class PeintureController extends AbstractController
{
    #[Route('/realisations', name: 'app_realisations')]
    public function realisations(
        PeintureRepository $peintureRepository,
        PaginatorInterface $paginator,
        Request $request
    ): Response {
        $data = $peintureRepository->findAll();

        $peintures=$paginator->paginate($data,$request->query->getInt('page',1),6);

        return $this->render('peinture/realisations.html.twig', ['peintures' => $peintures,]);
    }

    #[Route('/realisations/{id}', name: 'realisations_details')]
    public function details(Peinture $peinture) : Response
    {
        return $this->render('peinture/details.html.twig', ['peint' => $peinture,]);
    }

}
