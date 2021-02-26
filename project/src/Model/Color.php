<?php

namespace App\Model;

/**
 * Class Color
 *
 * @package App\Model
 */
class Color
{
    /** @var string[] valid colors of card */
    const VALID_COLORS = ['Clubs', 'Diamonds', 'Hearts', 'Spades'];

    /** @var string name of color */
    private string $name;

    /**
     * Color constructor.
     * @param string $name
     */
    public function __construct(string $name)
    {
        $this->name = $name;
    }

    /**
     * Get name of color
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * Set name of color
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }
}