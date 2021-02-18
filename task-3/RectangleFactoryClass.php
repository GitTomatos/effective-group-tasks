<?php 

class RectangleFactory implements FigureFactory {

	public function create(): Figure {
		do {
			$a = rand(1,30);
			$b = rand(1,30);
		} while (!(Rectangle::checkValues($a, $b)));
		
		return new Rectangle($a,$b);
	}

}

?>