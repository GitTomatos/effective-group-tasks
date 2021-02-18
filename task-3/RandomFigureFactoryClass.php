<?php 

class RandomFigureFactory {
	private $figTypes;
	
	public function setFigTypes($figTypes){

		$isCorrect = 1;
		foreach($figTypes as $type){
			if (!($type instanceof FigureFactory)){
				echo "Неправильный тип";
				$isCorrect = 0;
				break;
			}
		}

		if ($isCorrect) {
			$this->figTypes = $figTypes;
		}

	}

	public function randFig(int $num){

		$randFigures;
		for ($i = 0; $i < $num; $i++){
			$id = rand(0, count($this->figTypes) - 1);
			$randFigures[] = $this->figTypes[$id]->create();
		}
		return $randFigures;
	}

}

?>