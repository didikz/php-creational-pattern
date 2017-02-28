<?php

require "MetalWindow.php";

class WindowFactory
{
	public static function make($height, $width)
	{
		return new MetalWindow($height, $width);
	}
}