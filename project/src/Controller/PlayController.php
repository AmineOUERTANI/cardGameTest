<?php

namespace App\Controller;

use App\Service\GameManager;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Class PlayController
 *
 * @package App\Controller
 */
class PlayController extends AbstractController
{
    /**
     * Page d'accueil
     * @Route("/", name="home_page")
     *
     * @param GameManager $gameManager
     * @return Response
     */
    public function index(GameManager $gameManager): Response
    {
        $deck = $gameManager->createDeck();
        $playerHand = $gameManager->createPlayerHandFromDeck($deck, 10);

        return $this->render('play.html.twig', [
            'colors' => $gameManager->getColors(),
            'values' => $gameManager->getValues(),
            'unsortedCards' => $playerHand->getCards(),
            'sortedCards' => $gameManager->sortCards($playerHand->getCards())
        ]);
    }
}
