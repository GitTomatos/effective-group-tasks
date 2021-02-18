<?php

require_once 'interfaces.php';
require_once 'FigureClass.php';
require_once 'RectangleClass.php';
require_once 'CircleClass.php';
require_once 'TriangleClass.php';

require_once 'RectangleFactoryClass.php';
require_once 'CircleFactoryClass.php';
require_once 'TriangleFactoryClass.php';
require_once 'RandomFigureFactoryClass.php';

require_once 'functions.php';




$factory = new RandomFigureFactory();
$factory->setFigTypes([new RectangleFactory, new CircleFactory, new TriangleFactory]);

$figAr = $factory->randFig(5);
print_r($figAr);

foreach($figAr as $figure){
	echo "<p>";
	print_r($figure);
	echo "</br> ";
	echo $figure->getSquare();
	echo "</br> ";
	echo "</p>";
}


echo "</br> </br>";

$figAr = sortFigures($figAr);

foreach($figAr as $figure){
	echo "<p>";
	print_r($figure);
	echo "</br> ";
	echo $figure->getSquare();
	echo "</br> ";
	echo "</p>";
}

saveFigures($figAr);

