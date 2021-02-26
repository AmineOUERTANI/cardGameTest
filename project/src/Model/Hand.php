<?php

namespace App\Model;

use Doctrine\Common\Collections\ArrayCollection;

/**
 * Class Hand
 * @package App\Model
 */
class Hand
{
    /** @var array */
    private $cards;

    /**
     * Get cards
     *
     * @return array
     */
    public function getCards(): array
    {
        return $this->cards;
    }

    /**
     * Set cards
     *
     * @param array $cards
     */
    public function setCards(array $cards): Hand
    {
        $this->cards = $cards;

        return $this;
    }
}