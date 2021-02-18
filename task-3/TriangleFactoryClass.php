<?php 

class TriangleFactory implements FigureFactory {

	public function create(): Figure {

		do {
			$a = rand(1,30);
			$b = rand(1,30);
			$c = rand(1,30);
		} while (!(Triangle::checkValues($a, $b, $c)));

		return new Triangle($a, $b, $c);
	}

}

?>