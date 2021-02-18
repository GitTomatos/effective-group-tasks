<?php

interface GetingSquare
{
	public function getSquare();
}





class Rectangle implements GetingSquare
{

	private $a;
	private $b;


	public function setSides($a, $b){
		$this->a = $a;
		$this->b = $b;
	}

	public function setA($a){
		$this->a = $a;
	}

	public function setB($b){
		$this->b = $b;
	}

	public function getA(){
		echo "<p>Сторона а: " . $this->a . "</p>";
	}

	public function getB(){
		echo "<p>Сторона b: " . $this->b . "</p>";
	}

	public function getSquare()
	{

		if (empty($this->a) or empty($this->b)) {
			if (empty($this->a))
				echo '<p>Не указана сторона a</p>';
			if (empty($this->b))
				echo '<p>Не указана сторона b</p>';
		} else {
			$square = $this->calculateSquare();
			echo '<p>Площадь прямоугольника: ';
			echo $square;
			echo '</p>';	
		}

	}

	public function calculateSquare() {
		return $this->a * $this->b;
	}

}

class circle implements GetingSquare
{
	
	private $r;
	const PI = 3.14;

	public function setRadius($r){
		$this->r = $r;
	}

	public function getRadius(){
		echo "<p>Радиус r: " . $this->r . "</p>";
	}

	public function getSquare()
	{

		if (empty($this->r)) {
			echo '<p>Не указан радиус</p>';
		} else {
			$square = $this->calculateSquare();
			echo '<p>Площадь круга: ';
			echo $square;
			echo '</p>';	
		}

	}

	public function calculateSquare() {
		return self::PI * $this->r * $this->r;
	}

}

class Triangle implements GetingSquare
{
	
	private $a;
	private $b;
	private $c;


	public function setSides($a, $b, $c){
		$this->a = $a;
		$this->b = $b;
		$this->c = $c;
	}

	public function setA($a){
		$this->a = $a;
	}

	public function setB($b){
		$this->b = $b;
	}

	public function setC($c){
		$this->c = $c;
	}

	public function getA(){
		echo "<p>Сторона а: " . $this->a . "</p>";
	}

	public function getB(){
		echo "<p>Сторона b: " . $this->b . "</p>";
	}

	public function getC(){
		echo "<p>Сторона c: " . $this->c . "</p>";
	}

	public function getSquare()
	{

		if (empty($this->a) or empty($this->b) or empty($this->c)) {
			if (empty($this->a))
				echo '<p>Не указана сторона a</p>';
			if (empty($this->b))
				echo '<p>Не указана сторона b</p>';
			if (empty($this->c))
				echo '<p>Не указана сторона c</p>';
		} else {
			$square = $this->calculateSquare();
			echo '<p>Площадь треугольника: ';
			echo $square;
			echo '</p>';	
		}

	}

	public function calculateSquare() {
		$p = $this->calculatePerimeter();
		$square = sqrt($p * ($p - $this->a)*($p - $this->b)*($p - $this->c));
		return round($square, 2);
	}

	public function calculatePerimeter() {
		return $this->a + $this->b + $this->c;
	}

}



echo "<p><b>Прямоугольник</b></p>";
$rec = new Rectangle();
$rec->setSides(3, 4);
$rec->getA();
$rec->getSquare();

echo "<p><b>Круг</b></p>";
$circle = new Circle();
$circle->setRadius(2);
$circle->getSquare();

echo "<p><b>Треугольник</b></p>";
$triangle = new Triangle();
$triangle->setSides(3, 4, 5);
$triangle->getA();
$triangle->getB();
$triangle->getC();
$triangle->getSquare();