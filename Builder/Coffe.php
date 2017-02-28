<?php

class Coffe
{
    /**
     * @var string
     */
    public $type;

    /**
     * @var bool
     */
    public $sugar = false;

    /**
     * @var bool
     */
    public $cream = false;

    /**
     * @var bool
     */
    public $ice = false;

    /**
     * Coffe constructor.
     *
     * @param CoffeBuilder $coffeBuilder
     */
    public function __construct(CoffeBuilder $coffeBuilder)
    {
        $this->type = $coffeBuilder->type;
        $this->sugar = $coffeBuilder->sugar;
        $this->cream = $coffeBuilder->cream;
        $this->ice = $coffeBuilder->ice;
    }

    /**
     * @return string
     */
    public function save()
    {
        return "persist coffee ".$this->type." to db";
    }
}