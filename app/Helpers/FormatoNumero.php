<?php 

function formato_numero($numero){

	$bs = number_format($numero, 2, ',', '.');

	return $bs;

}