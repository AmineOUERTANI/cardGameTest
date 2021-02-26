<?php

namespace App\Model;

/**
 * Class Value
 *
 * @package App\Model
 */
class Value
{
    /** @var string[] valid values of card */
    Const VALID_VALUES = [
        'Ace',
        '2',
        '3',
        '4',
        '5',
        '6',
        '7',
        '8',
        '9',
        '10',
        'Jack',
        'Queen',
        'King'
    ];

    /** @var string $value */
    private $value;

    /**
     * Value constructor.
     *
     * @param string $value
     */
    public function __construct(string $value)
    {
        $this->value = $value;
    }

    /**
     * Get value
     * @return string
     */
    public function getValue(): string
    {
        return $this->value;
    }

    /**
     * Set value
     * @param string $value
     */
    public function setValue(string $value): void
    {
        $this->value = $value;
    }

}