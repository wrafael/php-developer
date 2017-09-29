<?php
	/**
	**
	Problema 01
	Usando PHP, crear una clase llamada ChangeString ​que tenga un método llamado build
	el cual tome un parámetro string que debe ser modificado por el siguiente algoritmo .
	Reemplazar cada letra de la cadena con la letra siguiente en el alfabeto. Por ejemplo
	reemplazar a​ por b​ ó c​ por d.​ Finalmente devolver la cadena.
	Indicaciones
	● Crear la solución en un solo archivo llamado ChangeString.php
	● El método build devuelve la salida del algoritmo
	● Considerar el siguiente abecedario : a, b, c, d, e, f, g, h, i, j, k, l, m, n, ñ, o, p, q, r,
	s, t, u, v, w, x, y, z.
	Ejemplos
	● entrada : "123 abcd*3" salida : "123 bcde*​ 3"
	● entrada : "**Casa 52" salida : "**Dbtb​ 52"
	● entrada : "**Casa 52Z" salida : "**Dbtb​ 52A​"
	● a
	*/
	class ChangeString
	{
		public $alfabeto= [ 'a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'ñ', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z' ];

		function build($entrada)
		{
			$cantidad = strlen($entrada);
			for ($i=0; $i<$cantidad; ++$i) {
				$entrada[$i] = $this->buildCharacter($entrada[$i]);
			}
			return $entrada;
		}
		function buildCharacter($cadena)
		{
			$mayuscula = ($cadena == strtoupper($cadena));
			$posicion = array_search(strtolower($cadena), $this->alfabeto);
			if ($posicion === false){
				return $cadena;
			}

			if ($posicion == count($this->alfabeto)-1){
				$posicion = 0;
			}else{
				$posicion = $posicion+1;
			}

			if ($mayuscula){
				return strtoupper($this->alfabeto[$posicion]);
			}

			return $this->alfabeto[$posicion];
		}
	}

	$changeString = new ChangeString();
	echo $changeString->build("123 abcd*3");
	echo "<br>";
	echo $changeString->build("**Casa 52");
	echo "<br>";
	echo $changeString->build("**Casa 52Z");
	echo "<br>";
	echo $changeString->build("**DSTXZ 121252Z");


?>