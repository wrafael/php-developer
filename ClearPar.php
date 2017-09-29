<?php 

/*
**
Problema 03
Usando PHP, crear una clase llamada ClearPar que tenga un método llamado
build que reciba como parámetro una cadena formada sólo por paréntesis
( ()()()()(()))))())((() ). El algoritmo debe eliminar todos los paréntesis que no tienen
pareja.Finalmente devolver la nueva cadena.
Indicaciones
● Crear la solución en un solo archivo llamado ClearPar .php
● El método build devuelve la salida del algoritmo
● Considerar solamente cadenas formadas de paréntesis
Ejemplos
● entrada : "()())()" salida : "()()()"
● entrada : "()(()" salida : "()()"
● entrada : ")(" salida : ""
● entrada : "((()" salida : "()"
*/

	class ClearPar
	{
		public function build($entrada)
		{
			$estado = false;
			$salida = '';
			$cantidad = strlen($entrada);
			for ($i=0; $i<$cantidad; ++$i) {
				if ($estado == false && $entrada[$i]=='(') {
					$estado = true;
				} else if ($estado == true && $entrada[$i]==')') {
					$salida .= '()';
					$estado = false;
				}
			}
			return $salida;
		}
	}
	echo ClearPar::build("()())()");
	echo "<br>";
	echo ClearPar::build("()(()");
	echo "<br>";
	echo ClearPar::build(")(");
	echo "<br>";
	echo ClearPar::build("((()");
	echo "<br>";
	echo ClearPar::build("())))");
	



 ?>