<?php 

function saveFigures($figAr){
	$isCorrect = 1;
	foreach($figAr as $figure){
		if (!($figure instanceof Figure)){
			echo "Неправильный тип фигуры";
			$isCorrect = 0;
			break;
		}
	}

	if ($isCorrect) {
		$strFigAr = serialize($figAr);
		file_put_contents('figsDump.txt', $strFigAr);
		return true;
	}

	return false;
	
}

function restoreFigures(){
	$strFigAr = file_get_contents('figsDump.txt');
	return unserialize($strFigAr);
}

function sortFigures($figAr){
	$count = count($figAr);

	if ($count <= 1)
		return $figAr;

	for ($k = 0; $k < $count; $k++){
		for ($i = 0; $i < ($count - 1); $i++){
			if ($figAr[$i]->calculateSquare() < $figAr[$i + 1]->calculateSquare()){
				$temp = $figAr[$i];
				$figAr[$i] = $figAr[$i + 1];
				$figAr[$i + 1] = $temp;
			}
		}
	}
	return $figAr;
}

?>