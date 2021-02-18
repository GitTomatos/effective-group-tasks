<?php 
interface CalculatingSquare
{
	public function calculateSquare();
}

interface FigureFactory{
	public function create(): Figure;
}
?>

