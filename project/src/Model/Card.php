<?php

namespace App\Model;

/**
 * Class Card
 * @package App\Model
 */
class Card
{
    /**
     * Card value
     *
     * @var Value  $value
     */
    private $value;

    /**
     * Card color
     *
     * @var Color  $color
     */
    private $color;

    public function __construct(Value $value, Color $color)
    {
        $this->value = $value;
        $this->color = $color;
    }


    /**
     * Get color
     * @return Color
     */
    public function getColor(): Color
    {
        return $this->color;
    }

    /**
     * Set color
     * @param Color $color
     */
    public function setColor(Color $color): void
    {
        $this->color = $color;
    }

    /**
     * get Value of card
     * @return Value
     */
    public function getValue(): Value
    {
        return $this->value;
    }

    /**
     * Set value of card
     * @param Value $value
     */
    public function setValue(Value $value): void
    {
        $this->value = $value;
    }

    /**
     * get picture of card
     * @return string
     */
    public function getPicture(): string
    {
        return $this->value->getValue().$this->color->getName();
    }
}
