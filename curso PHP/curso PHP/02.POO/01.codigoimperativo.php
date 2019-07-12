<?php

//codigo imperativo o espaghetti

$automovil1 = (object)["marca" => "Toyota",
						"modelo" => "Corolla"];

$automovil2 = (object)["marca" => "Ford", 
							"modelo" =>"fiesta"];

function mostrar($automovil)
{
	echo "<p> HOLA, soy un $automovil->marca,
	      modelo $automovil->modelo </p>";




}
// no es necesario el salto de linea entre funciones.
mostrar($automovil1);

mostrar($automovil2);




?>