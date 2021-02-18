<?php 

class Circle extends Figure implements CalculatingSquare
{
	
	private int $r;
	const PI = 3.14;


	public function __construct(int $r){
		// $args = func_get_args();
		// $args_num = func_num_args();

		// if ($args_num == 1) {
		// 	$this->setRadius($args[0]);
		// }

		return $this->setRadius($r);

	}

	public function setRadius(int $r){

		$isCorrect = self::checkValues($r);
		
		if ($isCorrect){
			$this->r = $r;
			return true;
		} else {
			echo "\n";
			return false;
		}
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


	public static function checkValues (int $r) {
		$isCorrect = true;

		if ($r <= 0){
			$isCorrect = false;
			// echo "<p>Все стороны должны быть неотрицательными и больше 0!</p>";	
		}

		return $isCorrect;
	}

}

?>