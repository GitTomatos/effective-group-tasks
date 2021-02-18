<?php 

class Rectangle extends Figure implements CalculatingSquare
{
	
	private int $a;
	private int $b;


	public function __construct($a, $b){
		// $args = func_get_args();
		// $args_num = func_num_args();

		// if ($args_num == 2) {
		// 	$this->setSides($args[0], $args[1]);
		// }

		return $this->setSides($a, $b);

	}

	public function setSides(int $a, int $b){
		$isCorrect = self::checkValues($a, $b);
		
		if ($isCorrect){
			$this->a = $a;
			$this->b = $b;
			return true;
		} else {
			echo "\n";
			return false;
		}

	}

	public function setA(int $a){
		$isCorrect = self::checkValues($a, $this->b);
		if ($isCorrect){
			$this->a = $a;
			return true;
		} else {
			echo "\n";
			return false;
		}
	}

	public function setB(int $b){

		$isCorrect = self::checkValues($this->a, $b);

		if ($isCorrect){
			$this->b = $b;
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


	public static function checkValues (int $a, int $b) {
		$isCorrect = true;

		if ($a <= 0 or $b <= 0){
			$isCorrect = false;
			// echo "<p>Все стороны должны быть неотрицательными и больше 0!</p>";	
		}

		return $isCorrect;
	}

}

?>