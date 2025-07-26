<?php
// src/Controller/LuckyController.php
namespace App\Controller;

use App\Entity\LuckyNumber;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class LuckyController extends AbstractController
{
    #[Route('/', name: 'lucky_index', methods: ['GET'])]
    public function index(EntityManagerInterface $em): Response
    {
        $number = random_int(0, 100);

        return $this->render('lucky/number.html.twig', [
            'number' => $number,
        ]);
    }
}
