<?php

require "Simplefactory/WindowFactory.php";
require "FactoryMethod/DeveloperManager.php";
require "Builder/CoffeBuilder.php";

$window = WindowFactory::make(5, 3);
echo "=============== This is Simple Factory Implementation ================".PHP_EOL;
echo "window height: ".$window->getHeight().PHP_EOL;
echo "window width: ".$window->getWidth().PHP_EOL;

$developerManager = new DeveloperManager();
echo "=============== This is Factory Method Implementation ================".PHP_EOL;
echo "questions: ".$developerManager->takeInterview().PHP_EOL;

$coffee = (new CoffeBuilder('cappucino'))->addIce()->addCream()->addSugar()->build();
echo "=============== This is Builder Implementation ================".PHP_EOL;
echo $coffee->save().PHP_EOL;
