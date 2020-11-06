<?php 
	define('Pi', 3.14);
	$raio = rand(1 , 100);
	function area($raio){
		return $raio * $raio * Pi;
	}

	echo 'O raio da circunferência é ' .$raio. ', a  area é ' . area($raio);
?>