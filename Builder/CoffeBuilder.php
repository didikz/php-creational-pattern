<?php
require "Coffe.php";

class CoffeBuilder
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
     * CoffeBuilder constructor.
     *
     * @param $type
     */
    public function __construct($type)
    {
        $this->type = $type;
    }

    /**
     * @return $this
     */
    public function addSugar()
    {
        $this->sugar = true;
        return $this;
    }

    /**
     * @return $this
     */
    public function addCream()
    {
        $this->cream = true;
        return $this;
    }

    /**
     * @return $this
     */
    public function addIce()
    {
        $this->ice = true;
        return $this;
    }

    /**
     * @return Coffe
     */
    public function build()
    {
        return new Coffe($this);
    }
}