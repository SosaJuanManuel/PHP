<?php

//funciones sin parametros

function saludo()
{
	echo "HOLA MUNDO<br>"; 

}

saludo();

//funciones con parametros

function despedida($adios)
{
		echo $adios."<br>";
}

despedida("<br> ADIOS");

// funciones con return


function retorno($retornar)
{
	return $retornar."<br>";

}

echo retorno("RETORNAR")
?>