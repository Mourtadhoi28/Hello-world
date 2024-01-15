<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    #[Route('/home', name: 'app_home')]
    public function index(): Response
    {
        $deck = []; 
        $coin = []; 
        $dices = []; 

        $mj = new Mj($deck, $coin, $dice);

        $critRate = 70;

        $result = $mj->rollForCrit($critRate);
        return $this->render('home/index.html.twig', [
            'result' => $result,
        ]);
    }
}
