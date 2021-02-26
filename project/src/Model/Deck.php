<?php


namespace App\Model;

use Doctrine\Common\Collections\ArrayCollection;

/**
 * Class Deck
 *
 * @package App\Model
 */
class Deck
{
    /**
     * @var Card[]|ArrayCollection
     */
    private $cards;

    /**
     * initialize Deck
     * OrderGame constructor.
     */
    public function __construct()
    {
        $this->cards = new ArrayCollection();
        foreach (Value::VALID_VALUES as $value) {
            foreach (Color::VALID_COLORS as $color) {
                $card = new Card(
                    new Value($value),
                    new Color($color)
                );

                $this->addCard($card);
            }
        }
    }

    /**
     * Add Cart to collection
     * @param Card $card
     *
     * @return $this
     */
    public function addCard(Card $card): self
    {
        if (!$this->cards->contains($card)) {
            $this->cards[] = $card;
        }

        return $this;
    }

    /**
     * Get Cards
     * @return Card[]|ArrayCollection
     */
    public function getCards()
    {
        return $this->cards;
    }

    /**
     * Set Cards
     * @param Card[]|ArrayCollection $cards
     */
    public function setCards($cards): void
    {
        $this->cards = $cards;
    }
}