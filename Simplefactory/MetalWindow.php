<?php

require "Window.php";

class MetalWindow implements Window
{
    /**
     * @var int
     */
	protected $height;

    /**
     * @var int
     */
	protected $width;

    /**
     * MetalWindow constructor.
     *
     * @param $height
     * @param $width
     */
	public function __construct($height, $width)
	{
		$this->height = $height;
		$this->width = $width;
	}

    /**
     * @return int
     */
	public function getWidth()
	{
		return $this->width;
	}

    /**
     * @return int
     */
	public function getHeight()
	{
		return $this->height;
	}
}
