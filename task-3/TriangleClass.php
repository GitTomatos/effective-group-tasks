<?php 

class Triangle extends Figure implements CalculatingSquare
{
	
	private int $a;
	private int $b;
	private int $c;


	public function __construct(int $a, int $b, int $c){
		// $args = func_get_args();
		// $args_num = func_num_args();

		// if ($args_num == 3) {
		// 	return $this->setSides($args[0], $args[1], $args[2]);
		// }

		return $this->setSides($a, $b, $c);
	}

	public function setSides(int $a, int $b, int $c){
		
		$isCorrect = self::checkValues($a, $b, $c);

		if ($isCorrect){
			$this->a = $a;
			$this->b = $b;
			$this->c = $c;
			return true;
		} else {
			echo "\n";
			return false;
		}
	}

	public function setA(int $a){

		$isCorrect = self::checkValues($a, $this->b, $this->c);

		if ($isCorrect){
			$this->a = $a;
			return true;
		} else {
			echo "\n";
			return false;
		}

	}

	public function setB(int $b){

		$isCorrect = self::checkValues($this->a, $b, $this->c);

		if ($isCorrect){
			$this->b = $b;
			return true;
		} else {
			echo "\n";
			return false;
		}

	}

	public function setC(int $c){

		$isCorrect = self::checkValues($this->a, $this->b, $c);

		if ($isCorrect){
			$this->c = $c;
			return true;
		} else {
			echo "\n";
			return false;
		}
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


	public static function checkValues (int $a, int $b, int $c) {
		$isCorrect = true;

		if ($a <= 0 or $b <= 0 or $c <= 0){
			$isCorrect = false;
			// echo "<p>Все стороны должны быть неотрицательными и больше 0!</p>";	
		}

		if (($a >= $b + $c) or ($b >= $a + $c) or ($c >= $a + $b)){
			$isCorrect = false;
			// echo "<p>Не выполняется неравенство треугольника!</p>";	
		}

		return $isCorrect;
	}

}

?>