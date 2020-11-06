<?php 
	function turma ($rapazes , $raparigas){
		$num = (50/(14+8))*100;
		return $num;
	}
		$nrapazes = 14;
		$nraparigas = 8;
		$alu = turma ($nrapazes , $nraparigas);
		echo 'A percentagem de rapazes e raparigas na turma é ' .$alu. '%';
?>