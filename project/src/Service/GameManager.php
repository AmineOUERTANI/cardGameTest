<?php

namespace App\Service;

use App\Model\Color;
use App\Model\Deck;
use App\Model\Hand;
use App\Model\Value;

/**
 * Class GameManager
 *
 * @package App\Service
 */
class GameManager
{
    /**
     * colors of card
     *
     * @var string[]
     */
    private $colors;

    /**
     * values of card
     *
     * @var string[]
     */
    private $values;

    /**
     * Initialize color and value card
     *
     * GameCardService constructor.
     */
    public function __construct()
    {
        $this->colors = Color::VALID_COLORS;
        $this->values = Value::VALID_VALUES;

        shuffle($this->colors);
        shuffle($this->values);
    }

    /**
     * Create Deck
     *
     * @return Deck
     */
    public function createDeck() : Deck
    {
        return new Deck();
    }

    /**
     * create player Hand from Deck
     * @param Deck $deck
     * @param int $nbCardInHand
     * @return Hand
     */
    public function createPlayerHandFromDeck(Deck $deck, int $nbCardInHand) : Hand
    {
        $unsortedCardInHand = [];

        foreach (array_rand($deck->getCards()->toArray(), $nbCardInHand) as $key) {
            $unsortedCardInHand[] = $deck->getCards()[$key];
        }

        return (new Hand())->setCards($unsortedCardInHand);
    }

    /**
     * Sort cards
     *
     * @param array $cards
     * @return array
     */
    public function sortCards(array $cards) : array
    {
        usort($cards, function($firstCard, $secondCard) {
            if ($firstCard->getColor() == $secondCard->getColor()) {
                return (
                    array_search($firstCard->getValue()->getValue(), $this->values)
                    <
                    array_search($secondCard->getValue()->getValue(), $this->values)
                ) ? -1 : 1;
            } else {
                return (
                    array_search($firstCard->getColor()->getName(), $this->colors)
                    <
                    array_search($secondCard->getColor()->getName(), $this->colors)
                )
                    ? -1 : 1;
            }
        });

        return $cards;
    }

    /**
     * Get colors
     *
     * @return string[]
     */
    public function getColors() : array
    {
        return $this->colors;
    }

    /**
     * Get Values card
     *
     * @return string[]
     */
    public function getValues() : array
    {
        return $this->values;
    }
}