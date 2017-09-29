<?php

/*
**
Problema 02
Usando PHP, crear una clase llamada CompleteRange que tenga un método
llamado build el cual tome un parámetro de colección de números enteros
positivos (1,2,3, ...n). El algoritmo debe completar si faltan números en la
colección en el rango dado. Finalmente devolver la colección completa.
Indicaciones
● Crear la solución en un solo archivo llamado CompleteRange .php
● El método build devuelve la salida del algoritmo
● Considerar el parámetro de colecciones con números enteros positivos
ordenados de manera ascendente. Ejemplo [4, 6, 7 ,10]

Ejemplos
● entrada : [1, 2, 4, 5] salida : [1, 2, 3 , 4, 5]
● entrada : [2, 4, 9] salida : [2, 3 , 4, 5, 6, 7, 8 , 9]
● entrada : [55, 58, 60] salida : [55, 56, 57, 58, 59, 60]
*/
	class CompleteRange
	{
		public function build($array)
		{
			$tamanno = count($array);
			if ($tamanno == 0)
				return [];
			$inicio = $array[0];
			$final = $array[$tamanno-1];
			return range($inicio, $final);
		}

	}
	$build = new CompleteRange();

	//var_dump([1,2,4,5]);
	$resultado = $build->build([1,2,4,5]);
	var_dump($resultado);
	echo "<br>";

	$resultado = $build->build([2,4,9]);
	var_dump($resultado);
	echo "<br>";

	$resultado = $build->build([55,58,60]);
	var_dump($resultado);
	echo "<br>";

	$resultado = $build->build([1,4]);
	var_dump($resultado);

?>

