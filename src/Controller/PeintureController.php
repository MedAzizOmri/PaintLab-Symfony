<?php

namespace App\Controller;

use App\Entity\Peinture;
use App\Repository\PeintureRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PeintureController extends AbstractController
{
    #[Route('/realisations', name: 'realisations')]
    public function realisations(PeintureRepository $peintureRepository): Response
    {
        return $this->render('peinture/realisations.html.twig', ['peintures' => $peintureRepository->findAll(),]);
    }
}
