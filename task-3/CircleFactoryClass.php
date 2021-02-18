<?php 

class CircleFactory implements FigureFactory {
	
	public function create(): Figure {
		do {
			$r = rand(1,30);
		} while (!(Circle::checkValues($r)));
		
		return new Circle($r);
	}

}

?>