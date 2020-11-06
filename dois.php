<?php 
	function parimpar ($numero){
		if ($numero % 2 == 0) {
			return true;
		}
		else { 
			return false;
	}
}

	$numero = rand(1 , 100);
	if (parimpar ($numero)) {
		echo $numero , ' é par';
	}
		else {
			echo $numero , ' é impar';
		}

?>